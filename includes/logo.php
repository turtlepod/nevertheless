<?php
/**
 * Logo
**/

/* === Logo === */
$logo_args = array(
	'crop'                   => false, /* set to false to disable image cropper. */
	'width'                  => 300,
	'height'                 => 100,
	'flex_height'            => 1, /* 1 = true, 0 = false */
	'flex_width'             => 1, /* 1 = true, 0 = false */
	'label'                  => _x( 'Logo', 'customizer', 'nevertheless' ),
	'description'            => _x( 'This will replace site title and tagline with logo in header area. Recommended maximum height for the logo size is 100px.', 'customizer', 'nevertheless' ),
);
add_theme_support( 'tamatebako-logo', $logo_args );

