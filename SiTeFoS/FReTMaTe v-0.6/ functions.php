<?php
$defaults = array(
	'default-image'          => get_template_directory_uri() . '/logo.png',
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
);
add_theme_support( 'custom-header', $defaults );
?>