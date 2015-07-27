<div id= 'header'> <!-- two parts -->
			<div id='header_part1'> <!-- links at the blog ,social network icons and search bar -->
				<div id='links'>
					<ul> <!-- pages at the blog -->
					<a href='<?php $url = home_url();
echo $url;?>'>home</a>
		<?php wp_list_pages('title_li='); ?>

				</ul>
					</div> 
				<div id='social'> <!--social network icons-->
					<a href='#'><img src='<?php echo get_template_directory_uri(); ?>/facebook-32x32-grey.png'></a>
			 		<a href='#'><img src='<?php echo get_template_directory_uri(); ?>/twitter-32x32-grey.png'></a>

				</div>
				<div id='search'> <!--search bar--> 
					<form  method="get"  action="<?php bloginfo('url'); ?>">
						<input type="text" name="s" id='tsearch'/ ><input type="submit" value="search" id='ssearch'/>
					</form>
				</div>
			</div> 
			<div id='header_part2'> <!-- the title -->
				<div id='title'> 
					<h1 id='text_title'><a href='<?php $url = home_url();
echo $url;?>'><?php bloginfo('name'); ?> </a></h1>
				</div> 

			</div>
		</div>