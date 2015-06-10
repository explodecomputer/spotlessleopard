<?php get_header(); ?>

<div class="jumbotron popupjumbo">
<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 text-center bigtitle">
			<h1 class="bigtitle">[pop-ups]</h1>
		</div>
		<div class="col-md-2">
		</div>
	</div>

</div>
</div>

<div class="container">
	<div class="row buff">
		<div class="col-md-4">
		<p>We regularly host pop-up restaurants where we serve a full set meal to a small number of patrons (usually around 20 people). We often plan each event around a particular theme.</p>
		<p>As always, our food is 100% vegan, and we use only the finest ingredients: organic and locally source.</p>
		<p>To book please email us at <a href="mailto:info@thespotlessleopard.co.uk">info@thespotlessleopard.co.uk</a></p>.
		</div>
		<div class="col-md-8 text-center">

	<?php if ( have_posts() ) : while( have_posts() ) : the_post();
		the_content();
	endwhile; endif; ?>

		</div>
	</div>
</div>
</div>


<?php get_footer(); ?>
