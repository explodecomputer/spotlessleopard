<?php get_header(); ?>

<div class="jumbotron partnersjumbo">
<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 text-center">
			<h1>[partners]</h1>
		</div>
		<div class="col-md-2">
		</div>
	</div>

</div>
</div>

<?php if ( have_posts() ) : while( have_posts() ) : the_post();
		the_content();
	endwhile; endif; ?>


<?php get_footer(); ?>
