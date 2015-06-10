<?php get_header(); ?>

<div class="homepage-hero-module">
	<div class="video-container">
		<div class="title-container">
			<div class="container">


	 			<div class="row">
					<div class="col-md-6">
						<div class="headline">
							<h2>hiya.<br/>we are an artisan* food truck serving vegan goodness to the people of bristol. <a id="replayBtn" href="#"><img src="<?php bloginfo('template_url'); ?>/inc/img/replay2.png" height="20" width="20"></a></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-left">
						<h3><a style="font-family: 'Oswald'; text-transform: uppercase; color: white;" href=""><img src="<?php bloginfo('template_url'); ?>/inc/img/leaf_64.png" height="30"> Pop-up reservations</a></h3>
						<h3><a style="font-family: 'Oswald'; text-transform: uppercase; color: white;" href=""><img src="<?php bloginfo('template_url'); ?>/inc/img/pin2white.png" height="30"> Find the van</a></h3>

					</div>
					<div class="col-md-2">
						<img src="<?php bloginfo('template_url'); ?>/inc/img/ai/stamplogo.png" height="150">
					</div>
				</div>




				<!-- <div class="row">
					<div class="col-md-4 text-center">
						
					</div>
					<div class="col-md-4 text-center">
						<img style="padding-bottom: 10px; padding-right: 10px;"  src="<?php bloginfo('template_url'); ?>/inc/img/ai/logo-17.png" width="300"><br/>
					</div>
				</div>
				<div class="row smallbuff">
					<div class="col-md-3 text-right"></div>
					<div class="col-md-3 text-center">
						<button type="button" class="btn btn-block btn-default btn-lg spotlessbutton">Pop-up Reservations</button>						
						<p class="reservations">The next pop-up is on Saturday 3rd July 2015</p>
					</div>
					<div class="col-md-3 text-center">
						<button type="button" class="btn btn-block btn-default btn-lg spotlessbutton spotlessbutton_map">Find the van</button>								
						<p class="findthevan">We are currently <b>open</b>!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">

					</div>
					<div class="col-md-4 text-center">
						<a id="replayBtn" href="#"><img style="margin-top: 30px;padding-bottom: 10px; padding-right: 10px;"  src="<?php bloginfo('template_url'); ?>/inc/img/replay2.png" height="30" width="30"></a>
					</div>
				</div> -->





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
