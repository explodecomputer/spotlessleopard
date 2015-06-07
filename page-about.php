<?php get_header(); ?>

<div class="container buff">

<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
	<?php if ( have_posts() ) : while( have_posts() ) : the_post();
		the_content();
	endwhile; endif; ?>
	</div>
	<div class="col-md-2">
	</div>
</div>
</div>

<?php get_footer(); ?>
