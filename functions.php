<?php

add_theme_support('automatic-feed-links');
add_action( 'init', 'register_my_menus' );

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

?>
