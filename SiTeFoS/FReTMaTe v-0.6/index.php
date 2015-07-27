<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
	'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

	<head>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ltr.css">
		<title><?php wp_title();?></title> <!--the title that apears in the tab of the browser-->
		<meta http-equiv='content-type' content='text/html;charset=utf-8' />
	</head>

	<body>
		<!--<?php
			//get_header();
			?>
			<div id='main'> two parts the blogs and the widgets  
			<div id='content'>  the blogs 
				<?php 
					//while(have_posts()) {
					//the_post();
				?>
				<h2><?php //the_title();?></h2>
				<div id='blog'>
					<?php //the_content();?> <a href="<?php the_permalink();?>"> countinue reading»»»</a>

			</div>
			<?php //} ?>	
			<?php
				//get_sidebar();
			?>
			</div>
		 -->
			<?php get_header();?>
			
	</body>
</html>
