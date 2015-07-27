<?php
	function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div id="everywidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div><br>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?> 
