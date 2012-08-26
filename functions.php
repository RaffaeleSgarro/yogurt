<?php

add_theme_support( 'automatic-feed-links' );
add_action( 'init', 'register_my_menus' );
add_action( 'init', 'register_nav_sidebar' );
add_action( 'wp_enqueue_scripts', 'register_my_scripts' );

function register_my_scripts() {
	wp_enqueue_script(
		'yogurt',
		get_template_directory_uri() . "/js/yogurt.js",
		array('jquery-effects-core')
	);
}    
 
function register_nav_sidebar() {
  register_sidebar( array(
    'id' => 'navigation',
    'name' => 'Navigation',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));
}

function register_my_menus() {
  register_nav_menus(array(
    'navigation' => __( 'Navigation' ),
  ));
}

function tags() {
  the_tags(
    '<p class="tags"><span class="tag">',
    '</span> <span class="tag">',
    '</span><p>');
}

function img( $name ) {
  $src = get_template_directory_uri() . '/images/' . $name;
  echo "<img src='$src'/>";
}

?>
