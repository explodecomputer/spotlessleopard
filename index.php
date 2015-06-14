<?php get_header(); ?>

<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>


<div class="jumbotron eventjumbo">
</div>

<div class="container">
<div class="row buff">
<div class="col-md-4 text-right popuptitle">

<h2><? the_title(); ?></h2>

<div>
	<? 
	$myvals = get_post_meta(get_the_ID());
	bigdate($myvals['event_begin'][0]);
	?>
</div>
<p class="wday"><? echo human_date($myvals['event_begin'][0], 'Y-m-d H:i:s', 'g:ia'); ?> - <? echo human_date($myvals['event_end'][0], 'Y-m-d H:i:s', 'g:ia'); ?></p>
<p class="wday"><? echo $myvals['geo_address'][0]; ?></p>
<p class="wday">For bookings contact us at <a href="mailto:info@thespotlessleopard.co.uk">info@thespotlessleopard.co.uk</a></p>

</div>
<div class="col-md-8 leftborder">
<? the_content(); ?>
<? endwhile; endif; ?>
</div>
</div>


<div class="row buff">
<div class="col-md-4 popuptitle text-right">
<h3>All upcoming popups</h3>
</div>
<div class="col-md-8 leftborder">
<?
	$myposts = get_posts(array(
		'posts_per_page'=>'100', 
		'post_status'=>'publish', 
		'category_name'=>'Pop-up',
		'meta_key'=>'event_begin',
		'orderby'=>'meta_value',
		'order'=>'ASC'));
	print_popup_list($myposts, '', 1);
	// print_popup_list($myposts, '', -1);
?>
</div>
</div>
</div>
<?php get_footer(); ?>
