<?php 
add_theme_support( 'menus' );
if ( function_exists( 'register_nav_menus' ) ) {
  	register_nav_menus(
  		array(
  		  'menu_slug' => 'Menu 1',
  		)
  	);
}

if ( ! isset( $content_width ) )
    $content_width = 1800;

add_filter('show_admin_bar', '__return_false');

include('php/calendar.php');
include('php/popups.php');

?>
