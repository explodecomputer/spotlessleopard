<?php get_header(); ?>

<div class="jumbotron cateringjumbo">
<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 text-center bigtitle">
			<h1 class="bigtitle">[catering]</h1>
		</div>
		<div class="col-md-2">
		</div>
	</div>

</div>
</div>

<div class="container">
	<div class="row buff">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center">

<?php if ( have_posts() ) : while( have_posts() ) : the_post();
	the_content();
endwhile; endif; ?>

		</div>
	</div>
</div>


<?php get_footer(); ?>