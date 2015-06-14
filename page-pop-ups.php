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
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center popupinfo">
					<p>We regularly host pop-up restaurants where we serve a full set meal to a small number of patrons (usually around 20 people). We often plan each event around a particular theme.</p>
					<hr class="fuzzy">
					<p>As always, our food is 100% vegan, and we use only the finest ingredients: organic and locally sourced.</p>
					<hr class="fuzzy">
					<p class="popupbooking">To book please email us at <a href="mailto:info@thespotlessleopard.co.uk">info@thespotlessleopard.co.uk</a></p>.
				</div>
			</div>
			<!-- <div class="buff"></div> -->
			<h1 class="nopads">Upcoming</h1>
			<?
			$myposts = get_posts(array(
				'posts_per_page'=>'100', 
				'post_status'=>'publish', 
				'category_name'=>'Pop-up',
				'meta_key'=>'event_begin',
				'orderby'=>'meta_value',
				'order'=>'ASC'));
			print_popup_list($myposts, '', 1);
			?>
			<h1 class="nopads">Previous</h1>
			<?
			print_popup_list($myposts, '', -1);
			?>
		</div>
	</div>
</div>


<?php get_footer(); ?>
