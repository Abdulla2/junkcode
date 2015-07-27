<?php
//Initialize the update checker.
require 'theme-updates/theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(
    'SiTeFoS',
    'https://doc-04-6o-docs.googleusercontent.com/docs/securesc/ha0ro937gcuc7l7deffksulhg5h7mbp1/kjcg7ipsfbi93dl6b01iv0nms0q47k3i/1429243200000/15277636868814870676/*/0B7X8dZ29tMSzNVhtUWI2SS01ejQ?e=download'
);
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

function wpbeginner_comment_text($arg) {
  
  $arg['comment_notes_before'] = "We're glad you have chosen to leave a comment. Please keep in mind that comments are moderated according to our <a href='http://www.example.com/comment-policy-page/'>comment policy</a>. Your email address is required but will not be published.";
    
  return $arg;
}

add_filter('comment_form_defaults', 'wpbeginner_comment_text');

function wpbeginner_comment_text_after($arg) {
    $arg['comment_notes_after'] = "We are glad you have chosen to leave a comment. Please keep in mind that comments are moderated according to our <a href='http://www.example.com/comment-policy-page/'>comment policy</a>.";
    return $arg;
}

add_filter('comment_form_defaults', 'wpbeginner_comment_text_after');
?> 
