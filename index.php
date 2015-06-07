<?php get_header(); ?>

<div class="homepage-hero-module">
	<div class="video-container">
		<div class="title-container">
			<div class="container">
	 			<div class="row">
					<div class="col-md-6">
						<div class="headline">
								<div>
								
								<!-- <h2>hiya.<br/>the <span class="sl">spotless leopard</span> is a food truck serving vegan goodness to the people of bristol. we also have regular pop-up restaurants at various locations across the city.</br>come and find us =]</h2> --></div>
								<p>
								
								</p>
																<p>

</p>

			            </div>

					</div>
					<div class="col-md-6">
						<div class="headline">
							<p style="text-align: center;">
								<!-- <img class="smiconimg" src="<?php bloginfo('template_url'); ?>/inc/img/ai/logo-10.png" height="100px"><br/> -->
							</p>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						
					</div>
					<div class="col-md-4 text-center">
						<img style="padding-bottom: 10px; padding-right: 10px;"  src="<?php bloginfo('template_url'); ?>/inc/img/ai/logo-17.png" width="300"><br/>
						
						
						
					</div>
				</div>
				<div class="row smallbuff">
					<div class="col-md-3 text-right">
						
					</div>
					<div class="col-md-3 text-center">
						<button type="button" class="btn btn-block btn-default btn-lg spotlessbutton">Pop-up Reservations</button>
					</div>
					<div class="col-md-6 text-left">
						<p class="reservations">The next pop-up will be on Saturday 3rd July 2015</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center"></div>
					<div class="col-md-3 text-center">
						<button type="button" class="btn btn-block btn-default btn-lg spotlessbutton spotlessbutton_map">Find the van</button>								
					</div>
					<div class="col-md-4 text-left">
						<p class="findthevan">We are currently <b>open</b>!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">

					</div>
					<div class="col-md-4 text-center">
						<a id="replayBtn" href="#"><img style="margin-top: 30px;padding-bottom: 10px; padding-right: 10px;"  src="<?php bloginfo('template_url'); ?>/inc/img/replay2.png" height="30" width="30"></a>
					</div>
				</div>
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


<div class="container" id="content">
<!-- 	<div class="row">
		<div class="col-md-12 welcome text-center">
			<h1>healthy &middot; ethical &middot; delicious</h1>
		</div>
	</div>
 -->
	<div class="row">
		<div class="col-md-2 welcome text-center">
		</div>
		<div class="col-md-8 welcome text-center">
			<?php if ( have_posts() ) : while( have_posts() ) : the_post();
				the_content();
			endwhile; endif; ?>
		</div>
		<div class="col-md-2 welcome text-center">
		</div>
	</div>

</div>


<?php get_footer(); ?>
