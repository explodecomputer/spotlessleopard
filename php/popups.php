
<?

function human_date($timestamp, $informat = 'Y-m-d H:i:s', $outformat = 'l jS F Y')
{
	$date = DateTime::createFromFormat($informat, $timestamp);
	return $date->format($outformat);
}


function bigdate($timestamp, $informat = 'Y-m-d H:i:s')
{
	$date = DateTime::createFromFormat($informat, $timestamp);
	$month = $date->format('M');
	$day = $date->format('m');
	$year = $date->format('Y');
	echo '<p class="month">' . $month . '</p><p class="bigday">' . $day . '</p>' . '<p class="bigyear">' . $year . '</p>';
}



function get_sign($x)
{
	if($x < 0)
		return -1;
	if($x > 0)
		return 1;
	if($x == 0)
		return 0;
}


function print_popup_list($myposts, $thisclass='', $future)
{
	$count_posts = wp_count_posts();
	$nextpost = 0;
	$published_posts = $count_posts->publish;
	global $post;
	foreach($myposts as $post) :
		global $post;
		setup_postdata($post);
		$myvals = get_post_meta(get_the_ID());
		$now = date("Y-m-d H:i:s");
		if(get_sign(strtotime($myvals['event_begin'][0]) - strtotime($now)) == get_sign($future))
		{
			echo '<hr class="fuzzy"><div class="row ' . $thisclass . '">';
			echo '<div class="col-md-1 bigdate text-left">';
			bigdate($myvals['event_begin'][0]);
			echo '</div>';
			echo '<div class="col-md-10 information text-left">';
			echo '<p class=""><a href="';
			the_permalink();
			echo '">';
			the_title();
			echo '</a> <span class="loccy"> ' . $myvals['geo_address'][0] . '</span> </p>';
			echo '<div class="excerpt">';
			the_excerpt();
			echo '<a class="readmore" href="';
			the_permalink();
			echo '">Read more</a>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			// echo '<p class="wday">' . human_date($myvals['event_begin'][0], 'Y-m-d H:i:s', 'g:ia') . ' on ' . human_date($myvals['event_begin'][0]) . '<br/>' . $myvals['geo_address'][0] . '</p>';
		}
	endforeach;
	wp_reset_postdata(); 
}



function get_next_popup($myposts, $thisclass='')
{
	$count_posts = wp_count_posts();
	$nextpost = 0;
	$published_posts = $count_posts->publish;
	global $post;
	foreach($myposts as $post) :
		global $post;
		setup_postdata($post);
		$flag = 0;
		$myvals = get_post_meta(get_the_ID());
		$now = date("Y-m-d H:i:s");
		if($now < $myvals['event_begin'][0])
		{
			// echo strtotime($now) - strtotime($myvals['event_begin'][0]);
			$flag = 1;
			echo '<span class="' . $thisclass . '"><a href="';
			the_permalink();
			echo '">';
			the_title();
			echo '</a>';
			echo ' at ' . human_date($myvals['event_begin'][0], 'Y-m-d H:i:s', 'g:ia') . ' on ' . human_date($myvals['event_begin'][0]) . '</span>';
			break;
		}
	endforeach;
	if($flag == 0)
	{
		echo '<span class="' . $thisclass . '">No upcoming pop-ups for now. Keep checking back!</span>';
	}
	wp_reset_postdata(); 
}

?>
