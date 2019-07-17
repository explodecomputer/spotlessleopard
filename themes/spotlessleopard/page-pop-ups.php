<?php get_header(); ?>

<div class="jumbotron popupjumbo">
<div class="container">
	<div id="photocredit">
		<p id="credits">Photograph by the excellent <a href="https://www.instagram.com/brtknr/">Bharat Kunwar</a></p>
	</div>

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
			

<?php if ( have_posts() ) : while( have_posts() ) : the_post();
	the_content();
endwhile; endif; ?>



			<!-- <div class="buff"></div> -->
			<h1 class="nopads">Upcoming</h1>
			<?php
			$myposts = get_posts(array(
				'posts_per_page'=>'100', 
				'post_status'=>'publish', 
				'category_name'=>'Pop-up',
				'meta_key'=>'start_time',
				'orderby'=>'meta_value',
				'order'=>'DESC'));
			print_popup_list($myposts, '', 1, 1);
			?>
			<h1 class="nopads">Previous</h1>
			<?php
			print_popup_list($myposts, '', -1, 1);
			?>
		</div>
	</div>
</div>


<?php get_footer(); ?>