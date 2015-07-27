<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
/*
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div id="everywidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/*
 	if(function_exists('register_sidebar'))
	register_sidebar(array(
		'name' => 'sidebar',
 		'before_widget' => '',
		'after_widget' => '</div>',
		'before_title' => '<',
		'after_title' => '</div>',
		));
	{ 
		register_sidebar();
	} */

/*
$defaults = array(
	'default-image'          => get_template_directory_uri() . '/logo.png',
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
);
add_theme_support( 'custom-header', $defaults );

 
function et_excerpt_length($length) {
    return 1;
}
add_filter('excerpt_length', 'et_excerpt_length');
 
 
function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">View Full Post</a></div>;';
}
add_filter('excerpt_more', 'et_excerpt_more');
*/
/**
 * Register our sidebars and widgetized areas.
 *
 */
/*
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
*/
/*
if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Homepage Sidebar',
'id' => 'homepage-sidebar',
'description' => 'Appears as the sidebar on the custom homepage',
'before_widget' => '<div style="height: 280px"></div><li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
}
*/

 	if(function_exists('register_sidebar'))
	register_sidebar(array(
		'name' => 'side ',
 		'before_widget' => '<div class="widget">',
		'after_widget' => '</div><!--End widget-cont--></div><!--End widget-->',
		'before_title' => '<h2>',
		'after_title' => '</h2><div class="widget-cont">',
		));
	{ 
		register_sidebar();
	}

?>