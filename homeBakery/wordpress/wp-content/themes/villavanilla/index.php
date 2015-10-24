<?php?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" type="text/css" href="css/scss/main_style.css">-->
	<?php if( is_page_template('index.php')  ) :?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" type="text/css" />
	<?php else:?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<?php endif;?>

	<link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Tangerine|Pinyon+Script|Great+Vibes|Niconne|Alex+Brush|Rochester|Allura|Parisienne|Stalemate|Ruthie|Lovers+Quarrel' rel='stylesheet' type='text/css'>
</head>
<body <?php body_class(); ?>>
	<div class="conatiner-fluid" id="transparent">
		<div class="row background_image">
			<!--Container for logo -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs blur">
				<div class="row transparent">
					<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12 logo_section transparent">
						<img src="wp-content/themes/villavanilla/img/logo_white.png">
					</div>
				</div>
				<div class="row intro transparent">
					<!-- Container for Menu section-->
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						
							<div class="menu row transparent">
								
								<ul class="menu-font hidden-sm hidden-xs transparent">
									<li><img src="wp-content/themes/villavanilla/img/menu_frame.png" class="menu_frame menu_frame_transform"></li>
									<li><a href="#about">About</a></li>
									<li><a href="#gallery">Gallery</a></li>
									<li><a href="#contacts">Contacts</a></li>
									<li><img src="wp-content/themes/villavanilla/img/menu_frame.png" class="menu_frame"></li>
								</ul>

								<ul class="menu-font-mobile hidden-lg hidden-md col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 transparent">
									<li><a href="#about">About</a></li>
									<li><a href="#gallery">Gallery</a></li>
									<li><a href="#contacts">Contacts</a></li>
								</ul>
								
							</div>
						
					</div>

					<!-- Container for About sectiob-->
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 transparent">
						<div class="row about transparent" id="about">
							<div class="col-lg-8 col-md-6 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
								<h2 class="title-font">About</h2>
								<p class="normal-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
								</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Gallery section-->
	<div class="conatiner-fluid gallery_container " id="gallery">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!-- Section image-->
				<img src="wp-content/themes/villavanilla/img/section_start_img.png" class="section_img">
				<!--Section title -->
				<h2 class="section_title text-center title-font">Gallery</h2>

					

				
				<div class="row">
						<!-- Start the Loop. -->
							 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							 	<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
									 	<!-- Display the Title -->
									 	<div class="post">
									 		<div class="post_image">
									 		<?php 
											if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it
													the_post_thumbnail();
												
											} 
											?>

									 	</div>

									 	<!-- Display the Post's content in a div box. -->
									 	<h3 class="product_title post-title-font"><?php the_title(); ?></h3>
									 	<div class="ingredients normal-text">
									 		<?php the_content(); ?>
									 	</div>
									 	</div>
							 	</div>

							 	<!-- Stop The Loop (but note the "else:" - see next line). -->

							 <?php endwhile; else : ?>


							 	<!-- The very first "if" tested to see if there were any Posts to -->
							 	<!-- display.  This "else" part tells what do if there weren't any. -->
							 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


							 	<!-- REALLY stop The Loop. -->
							 <?php endif; ?>


					
					
					
					<!--<div class="col-lg-6">
						<img src="img/vanilla.jpg" class="img-responsive">
						<div class="description">
							<ul>
								<li>Name</li>
								<li>price</li>
								<li>ingredients</li>
							</ul>
						</div>
					</div>

					
					<div class="col-lg-6">
						<img src="img/vanilla.jpg" class="img-responsive">
						<div class="description">
							<ul>
								<li>Name</li>
								<li>price</li>
								<li>ingredients</li>
							</ul>
						</div>
					</div>

						
					<div class="col-lg-6">
						<img src="img/vanilla.jpg" class="img-responsive">
						<div class="description">
							<ul>
								<li>Name</li>
								<li>price</li>
								<li>ingredients</li>
							</ul>
						</div>
					</div>

						
					<div class="col-lg-6">
						<img src="img/vanilla.jpg" class="img-responsive">
						<div class="description">
							<ul>
								<li>Name</li>
								<li>price</li>
								<li>ingredients</li>
							</ul>
						</div>
					</div>

						
					<div class="col-lg-6">
						<img src="img/vanilla.jpg" class="img-responsive">
						<div class="description">
							<ul>
								<li>Name</li>
								<li>price</li>
								<li>ingredients</li>
							</ul>
						</div>
					</div>-->

				</div>
			</div>
		</div>

	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<!-- Section image-->
				<img src="wp-content/themes/villavanilla/img/section_start_img.png" class="section_img">
				<!--Section title -->
				<h2 class="section_title text-center title-font">Location</h2>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.914302889256!2d24.95169469999999!3d60.198701099999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4692099c9c9e3a2d%3A0x86893d99cf0a7632!2sKarstulav%C3%A4gen+8%2C+00550+Helsingfors!5e0!3m2!1sen!2sfi!4v1443955791516" width="94%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>


			</div>
		</div>
	</div>
	<footer class="container-fluid contacts" id="contacts">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<!-- Section image-->
				<img src="wp-content/themes/villavanilla/img/section_start_img.png" class="section_img">
				<!--Section title -->
				<h2 class="section_title text-center title-font">Contacts</h2>

				<div class="row normal-text">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 links">
						<ul>
							<li>Facebook</li>
							<li>Instagram</li>
							<li>Twitter</li>
						</ul>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right contact-info">
						<p>Here is our email:<br/>
							something@gmail.com
						</p>
					</div>
				</div>
		</div>
	</footer>

</body>
</html>