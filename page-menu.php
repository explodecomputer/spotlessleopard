<?php get_header(); ?>

<div class="jumbotron menujumbo">
<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 text-center">
			<h1>[menu]</h1>
		</div>
		<div class="col-md-2">
		</div>
	</div>

</div>
</div>




<div class="container">
<div class="row buff">
<div class="col-md-4 text-right menublurb rightborder">
	<p class="wday">We are constantly experimenting and as a consequence we don’t have a set menu. Every day we will serve up three or four options for main meals, different salads, and a few cakes.</p>
	<p class="wday">We use only the highest quality ingredients. Except for the wraps that we get from Sainsbury’s, we can’t really say that they are the highest quality. But they’re not shit or anything. And we will always have gluten free options available. Well, not always. But mostly. You should eat gluten though, it’s delicious.</p>
	<p class="wday">Here are some examples of the things we like to serve. Every day is a new adventure! Go vegan motherfucker.</p>
</div>
<div class="col-md-8 popuptitle">



<?php if ( have_posts() ) : while( have_posts() ) : the_post();
		the_content();
	endwhile; endif; ?>



</div>
</div>
</div>




<?php get_footer(); ?>
