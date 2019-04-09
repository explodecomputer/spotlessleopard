<?php get_header(); ?>

<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>


<div class="jumbotron eventjumbo">
	<a id="photocredit" href="http://twitter.com/brtknr/">Photo credit: Bharat Kunwar</a>
</div>

<div class="container">
<div class="row buff">
<div class="col-md-4 text-right popuptitle rightborder">

<h2><?php the_title(); ?></h2>

<div>
	<?php
	bigdate(get_field('start_time'));
	?>
</div>
<p class="wday"><?php echo human_date(get_field('start_time'), 'Y-m-d H:i:s', 'g:ia'); ?> - <?php echo human_date(get_field('end_time'), 'Y-m-d H:i:s', 'g:ia'); ?></p>
<p class="wday"><?php echo get_field('location'); ?></p>
<p class="wday"><?php echo get_field('price'); ?></p>
<p class="wday">For bookings contact us at <a href="mailto:info@thespotlessleopard.co.uk">info@thespotlessleopard.co.uk</a></p>

</div>
<div class="col-md-8">
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
</div>


<div class="row buff">
<div class="col-md-4 popuptitle text-right rightborder">
<h3>All upcoming popups</h3>
</div>
<div class="col-md-8">
<?
	$myposts = get_posts(array(
		'posts_per_page'=>'100', 
		'post_status'=>'publish', 
		'category_name'=>'Pop-up',
		'meta_key'=>'start_time',
		'orderby'=>'meta_value',
		'order'=>'ASC'));
	print_popup_list($myposts, '', 1);
	// print_popup_list($myposts, '', -1);
?>
</div>
</div>
</div>
<?php get_footer(); ?>