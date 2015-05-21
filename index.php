<?php get_header(); ?>

<div class="homepage-hero-module">
	<div class="video-container">
		<div class="title-container">
			<div class="container">
	 			<div class="row">
					<div class="col-md-6">
						<div class="headline">
			               	<!-- <h1>Welcome to our Company</h1> -->
								<h1>hiya.<br/>the <span class="sl">spotless leopard</span> is a food truck serving vegan goodness to the people of bristol. we also have regular pop-up restaurants at various locations across the city.</br>come and find us =]</h1>
								<p>
								<button type="button" class="btn btn-default btn-lg spotlessbutton">Pop-up Reservations</button>
								<button type="button" class="btn btn-default btn-lg spotlessbutton spotlessbutton_map">Find the van</button></p>

			            </div>

					</div>
					<div class="col-md-6">
					</div>
				</div>
			</div>
		</div>
		<div class="filter"></div>
		<video autoplay preload muted class="fillWidth">
			<source src="<?php bloginfo('template_url'); ?>/inc/video/spotlesscake5.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
		</video>
		<div class="poster hidden">
			<img src="http://www.videojs.com/img/poster.jpg" alt="">
		</div>
	</div>
</div>
<div class="container" id="content">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 welcome">
			<h1>healthy &middot; ethical &middot; delicious</h1>
		</div>
		<div class="col-md-3">
			<!-- <p><button type="button" class="btn btn-default btn-lg">Next pop-up</button></p> -->
			<!-- <p><button type="button" class="btn btn-default btn-lg">Find the van</button></p> -->

		</div>
	</div>
</div>



<?php get_footer(); ?>
