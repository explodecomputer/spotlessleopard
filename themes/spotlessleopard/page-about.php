<?php get_header(); ?>

<div class="jumbotron aboutjumbo">
<div class="container">
	<div id="photocredit">
		<p id="credits">Photograph by Phil Randall</p>
	</div>

	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 text-center">
			<h1>[about]</h1>
		</div>
		<div class="col-md-2">

		</div>
	</div>
</div>
</div>


<div class="container">

<?php if ( have_posts() ) : while( have_posts() ) : the_post();
the_content();
?>
</div>

<div class="buff"></div>

<div class="jumbotron vanjumbo">
</div>

<div class="container">

<div class="row buff">
<div class="col-md-4 text-right presstitle">
<h2>In the press</h2>
</div>
<div class="col-md-8 leftborder presslinks">
<?php
echo the_field('press');
endwhile; endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>