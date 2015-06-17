
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
	$day = $date->format('d');
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


function print_popup_list($myposts, $thisclass='', $future, $concise = 0)
{
	$count_posts = wp_count_posts();
	$nextpost = 0;
	$published_posts = $count_posts->publish;
	global $post;
	foreach($myposts as $post) :
		global $post;
		setup_postdata($post);
		$now = date("Y-m-d H:i:s");
		if(get_sign(strtotime(get_field('start_time')) - strtotime($now)) == get_sign($future))
		{
			if($concise == 1)
			{
				echo '<hr class="fuzzy">';
			}
			echo '<div class="row ' . $thisclass . '">';
			echo '<div class="col-md-1 bigdate text-left">';
			bigdate(get_field('start_time'));
			echo '</div>';
			echo '<div class="col-md-10 information text-left">';
			echo '<p class=""><a href="';
			the_permalink();
			echo '">';
			the_title();
			echo '</a>';
			if($concise == 0)
			{
				echo '<br/>';
			}
			echo '<span class="loccy"> ' . get_field('location') . '</span> </p>';
			if($concise == 1)
			{
				echo '<div class="excerpt">';
				the_excerpt();
				echo '<a class="readmore" href="';
				the_permalink();
				echo '">Read more</a>';
				echo '</div>';
			}
			echo '</div>';
			echo '</div>';
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
		$now = date("Y-m-d H:i:s");
		if($now < get_field('start_time'))
		{
			// echo strtotime($now) - strtotime(get_field('start_time'));
			$flag = 1;
			echo '<span class="' . $thisclass . '"><a href="';
			the_permalink();
			echo '">';
			the_title();
			echo '</a>';
			echo ' at ' . human_date(get_field('start_time'), 'Y-m-d H:i:s', 'g:ia') . ' on ' . human_date(get_field('start_time')) . '</span>';
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
