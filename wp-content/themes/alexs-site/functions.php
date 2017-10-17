<?php

function alexs_site_scripts() {
	wp_enqueue_style('twentyfifteen-fonts', 'https://fonts.googleapis.com/css?family=Oswald|Open+Sans', array(), null);
	wp_enqueue_style('twentyfifteen-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'alexs_site_scripts');

function register_menus() {
	register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action('init', 'register_menus');

function excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'excerpt_more');
