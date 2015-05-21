

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
				<a href="#"><img class="smiconimg" src="<?php bloginfo('template_url'); ?>/inc/img/twitter-01.png" height="30px"></a>
				<a href="#"><img class="smiconimg" src="<?php bloginfo('template_url'); ?>/inc/img/facebook-01.png" height="30px"></a>
				<a href="#"><img class="smiconimg" src="<?php bloginfo('template_url'); ?>/inc/img/instagram-01.png" height="30px"></a>
				<!-- <a href="#"><img class="smiconimg" src="<?php bloginfo('template_url'); ?>/inc/img/logoblack-01.png" height="50px"></a> -->
			</span>
		</div>
		<?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'container_class' => 'navbar-collapse collapse', 'menu_class' => 'nav navbar-nav pull-right')); ?>
	</div>
</div>


