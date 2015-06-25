

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="smicons">
				<a href="<?php echo get_option('home'); ?>"><img class="smiconimg" src="<?php bloginfo('template_url'); ?>/inc/img/ai/logo-12.png" height="30px"></a>
				<a target="_blank" href="https://twitter.com/thespotlessleop"><img class="smiconimg" src="<?php bloginfo('template_url'); ?>/inc/img/ai/twitter-02.png" height="30px"></a>
				<a target="_blank" href="https://www.facebook.com/TheSpotlessLeopardUK"><img class="smiconimg" src="<?php bloginfo('template_url'); ?>/inc/img/ai/facebook-02.png" height="30px"></a>
				<a target="_blank" href="https://instagram.com/thespotlessleopard/"><img class="smiconimg" src="<?php bloginfo('template_url'); ?>/inc/img/ai/instagram-02.png" height="30px"></a>
				
			</span>
		</div>
		<?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'container_class' => 'navbar-collapse collapse', 'menu_class' => 'nav navbar-nav pull-right')); ?>
	</div>
</div>


