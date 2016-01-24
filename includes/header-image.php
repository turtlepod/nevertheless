<?php
/**
 * Custom Header Image
**/

/* === Custom Header Image === */
$custom_header_args = array(
	'default-image'          => get_template_directory_uri() . '/assets/images/header.jpg',
	'random-default'         => false,
	'width'                  => 940,
	'height'                 => 240,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '#ffffff',
	'header-text'            => false, /* no option */
	'uploads'                => true,
	'wp-head-callback'       => '',
);
add_theme_support( 'custom-header', $custom_header_args );
