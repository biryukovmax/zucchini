<?php
remove_filter('the_content', 'wpautop');

function wp_zucchini_theme_setup(){
	// Поддержка миниатюр
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wp_zucchini_theme_setup' );


// Register Sidebar
function striped_sidebar() {
 
	$args = array(
		'id'            => 'sidebar-left',
		'name'          => __( 'Sidebar', 'striped' ),
		'description'   => __( 'Left Sidebar', 'striped' ),
		'class'         => 'striped-widget',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
 
}
 
// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'striped_sidebar' );