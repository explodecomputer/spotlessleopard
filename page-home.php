<?php get_header(); ?>

<div class="homepage-hero-module">
	<div class="video-container">
		<div class="title-container">
			<div class="container">


	 			<div class="row">
					<div class="col-md-6">
						<div class="headline">
<!-- 							<h2>hello.<br/>we are an artisan* food truck serving vegan goodness to the people of bristol. <a id="replayBtn" href="#"><img src="<?php bloginfo('template_url'); ?>/inc/img/replay2.png" height="20" width="20"></a></h2> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6 text-center">
						<img style="padding-bottom: 10px; padding-right: 10px;"  src="<?php bloginfo('template_url'); ?>/inc/img/ai/logo-17.png" width="300"><br/>
						<h3><a style="font-family: 'Oswald'; text-transform: uppercase; color: white;" href="<?php echo home_url(); ?>/index.php/pop-ups"><img src="<?php bloginfo('template_url'); ?>/inc/img/leaf_64.png" height="30"> Pop-up reservations</a></h3>
						<h3><a style="font-family: 'Oswald'; text-transform: uppercase; color: white;" href="<?php echo home_url(); ?>/index.php/location"><img src="<?php bloginfo('template_url'); ?>/inc/img/pin2white.png" height="30"> Find the van</a></h3>
						<a id="replayBtn" href="#"><img style="margin-top: 20px;padding-bottom: 10px; padding-right: 10px;"  src="<?php bloginfo('template_url'); ?>/inc/img/replay2.png" height="30" width="30"></a>

					</div>
					<div class="col-md-2">
						<!-- <img src="<?php bloginfo('template_url'); ?>/inc/img/ai/stamplogo.png" height="150"> -->
					</div>
				</div>


<!-- 

				<div class="row">
					<div class="col-md-4 text-center">
						
					</div>
					<div class="col-md-4 text-center">
						<img style="padding-bottom: 10px; padding-right: 10px;"  src="<?php bloginfo('template_url'); ?>/inc/img/ai/logo-17.png" width="300"><br/>
					</div>
				</div>
				<div class="row smallbuff">
					<div class="col-md-3 text-right"></div>
					<div class="col-md-6 text-center">
						<h3><a style="font-family: 'Oswald'; text-transform: uppercase; color: white; padding-right: 20px;" href="<?php echo home_url(); ?>/index.php/pop-ups"><img src="<?php bloginfo('template_url'); ?>/inc/img/leaf_64.png" height="30"> Pop-up reservations</a> 
						<a style="font-family: 'Oswald'; text-transform: uppercase; color: white;" href="<?php echo home_url(); ?>/index.php/location"><img src="<?php bloginfo('template_url'); ?>/inc/img/pin2white.png" height="30"> Find the van</a></h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">

					</div>
					<div class="col-md-4 text-center">
						<a id="replayBtn" href="#"><img style="margin-top: 30px;padding-bottom: 10px; padding-right: 10px;"  src="<?php bloginfo('template_url'); ?>/inc/img/replay2.png" height="30" width="30"></a>
					</div>
				</div>


 -->


			</div>
		</div>
		<div class="filter"></div>
		<video autoplay preload muted class="fillWidth" id="bigvideo">
			<source src="<?php bloginfo('template_url'); ?>/inc/video/spotlesscake6.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
		</video>
		<div class="poster hidden">
			<img src="http://www.videojs.com/img/poster.jpg" alt="">
		</div>
	</div>
</div>
<?php if ( have_posts() ) : while( have_posts() ) : the_post();
	the_content();
endwhile; endif; ?>
<?php get_footer(); ?>
