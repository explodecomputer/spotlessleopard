<?php
 
/* Base code provided by Sarah Bailey.
Case Western Reserve University, Cleveland OH.
Please do not email me for support. Post a comment instead.
Current v 1.1
Props to commenter Matt for pointing out the maxResults parameter.
*/
 
//TO DEBUG UNCOMMENT THESE LINES
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
 
//INCLUDE THE GOOGLE API PHP CLIENT LIBRARY FOUND HERE
//https://github.com/google/google-api-php-client
//DOWNLOAD IT AND PUT IT ON YOUR WEBSERVER IN THE ROOT FOLDER.

function getCalendar(){
	include(__DIR__.'/google-api-php-client/src/Google/autoload.php'); 	 
	$client = new Google_Client();
	$client->setApplicationName("Spotless Leopard");
	$client->setDeveloperKey('AIzaSyDMO5IzHHapmNae_i8pes_cOhE1G2k-SoQ');
	$cal = new Google_Service_Calendar($client);
	$calendarId = 'c5lf84fmpd9pj2r0g4dqhk4hnk@group.calendar.google.com';

	$params = array(

		orderBy => 'startTime',
		'singleEvents' => true
		// // 'timeMin' => date(DateTime::ATOM),//ONLY PULL EVENTS STARTING TODAY
		// 'maxResults' => 7 //ONLY USE THIS IF YOU WANT TO LIMIT THE NUMBER
		// 			  //OF EVENTS DISPLAYED
	 
	);
	//THIS IS WHERE WE ACTUALLY PUT THE RESULTS INTO A VAR
	$appointments = $cal->events->listEvents($calendarId, $params); 

	return $appointments;
}



// Assume that all normal hours are called "Regular spot"
// and everything else is a special event
// Only print working hours for the next 7 days
function getCategories($appointments, $pattern){
	$regular = array();
	$events = array();
	$now = date("Y-m-d H:i:s");
	foreach($appointments->getItems() as $appointment)
	{
		if($appointment->summary == $pattern)
		{
			if(strtotime($appointment->start->dateTime) < strtotime(date('Y-m-d', strtotime($now. ' + 7 days'))))
			{
				array_push($regular, $appointment);				
			}
		} else {
			array_push($events, $appointment);
		}
	}
	$temp = array($regular, $events);
	return $temp;
}



// Find if open or closed
// if closed then return the number of seconds until open
function openOrClosed($regular){
	$status = 'closed';
	$now = date("Y-m-d H:i:s");
	foreach($regular as $event)
	{
		if ((strtotime($now) > strtotime($event->start->dateTime)) && (strtotime($now) < strtotime($event->end->dateTime)))
		{
			$status = 'open';
		}
	}


	// if tomorrow then "Tomorrow at 'opening hours'"
	// if later today then "Today at 'opening hours'"
	if($status == 'closed')
	{
		$i=0;
		foreach($regular as $event)
		{
			if (strtotime($now) < strtotime($event->start->dateTime))
			{
				break;
			} else {
				$i = $i + 1;
			}
		}	
		$status = strtotime($regular[$i]->start->dateTime) - strtotime($now);
	}

	

	return $status;
}




function displayRegular($regular, $calTimeZone)
{

	foreach ($regular as $event) {

		//Convert date to month and day

		$eventDateStr = $event->start->dateTime;
		if(empty($eventDateStr))
		{
			// it's an all day event
			$eventDateStr = $event->start->date;
		}

		$temp_timezone = $event->start->timeZone;
		//THIS OVERRIDES THE CALENDAR TIMEZONE IF THE EVENT HAS A SPECIAL TZ
		if (!empty($temp_timezone)) {
		$timezone = new DateTimeZone($temp_timezone); //GET THE TIME ZONE
		 //Set your default timezone in case your events don't have one
		} else { 
			$timezone = new DateTimeZone($calTimeZone);
		}
		$eventlocation = $event->location;
		$eventdate = new DateTime($eventDateStr,$timezone);
		$link = $event->htmlLink;
		$TZlink = $link . "&ctz=" . $calTimeZone; 
		//ADD TZ TO EVENT LINK
		//PREVENTS GOOGLE FROM DISPLAYING EVERYTHING IN GMT
		$newmonth = $eventdate->format("M");
		//CONVERT REGULAR EVENT DATE TO LEGIBLE MONTH
		$newday = $eventdate->format("j");
		$newwday = $eventdate->format("l");
		$newth = $eventdate->format("S");
		//CONVERT REGULAR EVENT DATE TO LEGIBLE DAY



		?>
<div>
	<div>
		<p><a href="javascript:void(0);" onclick="newPosition(<?php echo $event->location; ?>);"><span class="wday"><?php echo $newwday; ?></span> <span class="day"><?php echo $newday; ?></span><span class="th"><?php echo $newth; ?></span> <span class="month"><?php echo $newmonth; ?></span></a>
		</p>
	</div>
</div>
	<?php
	}
}


function displayEvents($regular, $calTimeZone)
{

	foreach ($regular as $event) {

		//Convert date to month and day

		$eventDateStr = $event->start->dateTime;
		if(empty($eventDateStr))
		{
			// it's an all day event
			$eventDateStr = $event->start->date;
			$timeinterval = "All day";
		} else {
			$stime = date("g.ia", strtotime($eventDateStr));
			$etime = date("g.ia", strtotime($event->end->dateTime));
			$timeinterval = $stime."-".$etime;
		}

		$temp_timezone = $event->start->timeZone;
		//THIS OVERRIDES THE CALENDAR TIMEZONE IF THE EVENT HAS A SPECIAL TZ
		if (!empty($temp_timezone)) {
		$timezone = new DateTimeZone($temp_timezone); //GET THE TIME ZONE
		 //Set your default timezone in case your events don't have one
		} else { 
			$timezone = new DateTimeZone($calTimeZone);
		}
		$eventlocation = $event->location;
		$eventdate = new DateTime($eventDateStr,$timezone);
		$link = $event->htmlLink;
		$TZlink = $link . "&ctz=" . $calTimeZone; 
		//ADD TZ TO EVENT LINK
		//PREVENTS GOOGLE FROM DISPLAYING EVERYTHING IN GMT
		$newmonth = $eventdate->format("F");
		//CONVERT REGULAR EVENT DATE TO LEGIBLE MONTH
		$newday = $eventdate->format("j");
		$newwday = $eventdate->format("l");
		$newth = $eventdate->format("S");
		//CONVERT REGULAR EVENT DATE TO LEGIBLE DAY

		?>
<div>
	<div>
		<p>
		</p>
		 
	</div>
	<div>
		<p><a href="javascript:void(0);" onclick="newPosition(<?php echo $event->location; ?>);"><img src="<?php bloginfo('template_url'); ?>/inc/img/pin2.png" height="20" width="20"><?php echo $event->summary; ?></a><br/>
		<span class="timeint"><?php echo $timeinterval; ?></span> <span class="wday"><?php echo $newwday; ?> <?php echo $newday; ?><?php echo $newth; ?> <?php echo $newmonth; ?></span><br/>
		<?php echo $event->description; ?><br/><br/></p>
	</div>
</div>
	<?php
	}
}


$appointments = getCalendar();
$calTimeZone = $appointments->timeZone; //GET THE TZ OF THE CALENDAR
date_default_timezone_set($calTimeZone);

//SET THE DEFAULT TIMEZONE SO PHP DOESN'T COMPLAIN. SET TO YOUR LOCAL TIME ZONE.

$temp = getCategories($appointments, 'Regular spot');
$regular = $temp[0];
$events = $temp[1];
// echo openOrClosed($regular)."<br/>";

?>
