 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
	'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

	<head>
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ltr.css">
		<title><?php wp_title();?></title> <!--the title that apears in the tab of the browser-->
		<meta http-equiv='content-type' content='text/html;charset=utf-8' />
	</head>

			<?php get_header();?>
			<div id='main'>
				<div id='blogs-single'>
				<?php
				 if(have_posts()) { 

				 	while(have_posts()) { 
				 		the_post();
				 		?>
				 		 <a href="<?php the_permalink(); ?>" class='blog-title-single'> <?php the_title(); ?></a>
				 		 <?php the_content('<div class="view-full-post"><div class="view-full-post-btn">View Full Post</div></div>');?>
				 	<?php

				} 
				 }
 else { 
echo"<p>Not found</p>";
 } 				 echo "</div>";

  ?>
  <?php get_sidebar();?>

</div>
</div>
	</body>
</html>
