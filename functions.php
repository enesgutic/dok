<?php

function dok_setup() {

	load_theme_textdomain( 'dok', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primaryMenu' => esc_html__( 'Primary', 'dok' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

  /* Enables selective refresh with widgets */
	add_theme_support( 'customize-selective-refresh-widgets' );

  /* Custom theme logo support */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'dok_setup' );



function scripts(){

wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 'all');
wp_enqueue_style('style');

wp_enqueue_script('jquery');

wp_register_script('script', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
wp_enqueue_script('script');

wp_register_script('fontA', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/js/all.js', [], 1, false);
wp_enqueue_script('fontA');
}
add_action('wp_enqueue_scripts', 'scripts');