<?php
/**
 * Custom Header Image
**/

/* === Custom Header Image === */
$custom_header_args = array(
	'default-image'          => '%s/assets/images/header.jpg',
	'random-default'         => false,
	'width'                  => 940,
	'height'                 => 240,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => false,
	'header-text'            => false, /* no option */
	'uploads'                => true,
	'wp-head-callback'       => '__return_false',
);
add_theme_support( 'custom-header', $custom_header_args );

/* Registers default headers for the theme. */
register_default_headers(
	array(
		'default' => array(
			'url'           => '%s/assets/images/header.jpg',
			'thumbnail_url' => '%s/assets/images/header.jpg',
			'description'   => __( 'Default', 'nevertheless' )
		),
	)
);