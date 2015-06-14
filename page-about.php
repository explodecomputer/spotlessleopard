<?php get_header(); ?>

<div class="jumbotron aboutjumbo">
<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 text-center bigtitle">
			<h1 class="bigtitle">[about]</h1>
		</div>
		<div class="col-md-2">
		</div>
	</div>

</div>
</div>

<?php if ( have_posts() ) : while( have_posts() ) : the_post();
	the_content();
endwhile; endif; ?>


<?php
/*
Template Name: All posts
*/
?>

<?php get_header(); ?>


<div>
<?

$myposts = get_posts(array(
	'posts_per_page'=>'100', 
	'post_status'=>'publish', 
	'category_name'=>'Pop-up',
	'meta_key'=>'event_begin',
	'orderby'=>'meta_value',
	'order'=>'ASC'));
echo get_next_popup($myposts);

?>


</div>




<?php get_footer(); ?>
