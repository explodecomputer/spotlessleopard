<div class="jumbotron" id="footerjumbo">
	<footer>
	<div class="container">
<!-- 		<div class="row text-center">
			<img style="padding-bottom: 10px; padding-right: 10px;"  src="<?php bloginfo('template_url'); ?>/inc/img/ai/stamplogo.png" width="120"><br/>
		</div> -->
		<div class="row text-left">
			<div class="col-md-3 text-center" id="footerlogo">
				<!-- <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/inc/img/ai/logo-17.png" width="250" ></a> -->
			</div>
			<div class="col-md-2">
				<h3>Summary</h3>
				<p>Vegan food, served in a truck, at a pop-up, or at your next big event.</p>
				<h3>We accept</h3>
				<p>
					<img src="<?php bloginfo('template_url'); ?>/inc/img/logo-notag.svg" width="80"></a>
					<img src="<?php bloginfo('template_url'); ?>/inc/img/contactless.png" width="50"></a>
					<img src="<?php bloginfo('template_url'); ?>/inc/img/square.jpg" width="130"></a>
				</p>

			</div>

			<div class="col-md-2">
				<!-- <hr> -->
				<h3>Usual Hours</h3>
				<p>
				Mon: Closed<br/>
				Tue: 11am-4pm<br/>
				Wed: 11am-4pm<br/>
				Thu: 11am-4pm<br/>
				Fri: 11am-4pm<br/>
				Sat: Closed<br/>
				Sun: Closed<br/>
				</p>
			</div>
			<div class="col-md-2">
				<h3>Current status</h3>
				<p><a href="<?php echo home_url(); ?>/location"><?php global $opentext; echo $opentext; ?></a></p>
				<h3>Next Pop-up</h3>
				<?php
				$myposts = get_posts(array(
					'posts_per_page'=>'100', 
					'post_status'=>'publish', 
					'category_name'=>'Pop-up',
					'meta_key'=>'start_time',
					'orderby'=>'meta_value',
					'order'=>'ASC'));
				?>
				<p><?php echo get_next_popup($myposts); ?></p>
			</div>
			<div class="col-md-3">
				<h3>Contact</h3>
				<p>
					<!-- <img src="<?php bloginfo('template_url'); ?>/inc/img/Old_typical_phone_64 (1).png" height="15" style="padding-right: 5px;">07925641299<br/> -->
					<img src="<?php bloginfo('template_url'); ?>/inc/img/email_black.png" height="15" style="padding-right: 5px;"><a href="mailto:info@thespotlessleopard.co.uk">info@thespotlessleopard.co.uk</a><br/>
					<img src="<?php bloginfo('template_url'); ?>/inc/img/Facebook_logo_64 (1).png" height="15" style="padding-right: 5px;"><a target="_blank" href="https://www.facebook.com/TheSpotlessLeopardUK">The SpotlessLeopardUK</a><br/>
					<img src="<?php bloginfo('template_url'); ?>/inc/img/Big_Instagram_logo_64 (1).png" height="15" style="padding-right: 5px;"><a target="_blank" href="https://instagram.com/thespotlessleopard/">@thespotlessleopard</a><br/>
				</p>
				<div id="credits"><a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/80x15.png" /></a> Website created by <a href="http://github.com/explodecomputer">explodecomputer</a></div>
				<br>
				<div>
					<a href='https://www.addtoevent.co.uk/the-spotless-leopard'><img src="<?php bloginfo('template_url'); ?>/inc/img/featured_circular_white_large.png" width="80"></a>
						<a href='https://www.vegfest.co.uk/2018/10/27/vegfestuk-awards-2018-full-results/'><img src="<?php bloginfo('template_url'); ?>/inc/img/vegfest-award-2018.png" width="80"></a>
						<a href='https://www.bristolpost.co.uk/whats-on/food-drink/the-spotless-leopard-vegan-food-2631664'><img src="<?php bloginfo('template_url'); ?>/inc/img/lonelyplanet-award.png" width="80"></a>
				</div>
			</div>

		</div>
	</div> <!-- /container -->
	</footer>
</div>




<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lightbox.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/video.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/navbar.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<?php wp_footer();?>

</body>
</html>
