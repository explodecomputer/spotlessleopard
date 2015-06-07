<?php get_header(); ?>

<div class="jumbotron menujumbo">
<div class="container">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 text-center">
			<h1>[menu]</h1>
		</div>
		<div class="col-md-3">
		</div>
	</div>

</div>
</div>

<?php if ( have_posts() ) : while( have_posts() ) : the_post();
		the_content();
	endwhile; endif; ?>


<?php get_footer(); ?>
