<!DOCTYPE html>
<html>
<head>
	<title>
	    <?php if (is_front_page()) : ?>
	        <?php bloginfo('name') ?>
	    <?php elseif (is_single()) : ?>
	        <?php echo wp_title('', true, ''); ?>
	    <?php else : ?>
	        <?php echo wp_title('', true, ''); ?>
	    <?php endif ?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/css/bootstrap.min.css">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/fontawesome-free-5.15.3-web/css/all.min.css">

	 <!-- carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

  	<!-- library animation -->
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/aos.css">
  	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory') ?>/images/logo.ico"/>

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	<?php wp_head() ?>
</head>
<body>

	<!-- menu pc -->
	<div class="bg-menu2">
		<div class="container">

			<ul class="menu-social">
				<?php if( have_rows('menu-social', 'option') ): ?>
		            <?php while( have_rows('menu-social', 'option') ): the_row(); 
		                $link = get_sub_field('link');
		                $social_icon = get_sub_field('icon');
		                ?>

		                <li>
			                <a href="<?php echo $link;?>">
							   <?php echo $social_icon ?>
							</a>
						</li>

		       	    <?php endwhile; ?>
				<?php endif; ?>
			</ul>

			<div class="bg-menu">
				<a class="home-url" href="<?php echo home_url(); ?>">
	            	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
	        	</a>

	        	<div>
		        	<ul class="menu-pc">
		        		<li>
		        			<?php echo do_shortcode('[wp_search_form]'); ?>
		        		</li>

		        		<li>
			        		<?php if( have_rows('sign-up', 'option') ): ?>
					            <?php while( have_rows('sign-up', 'option') ): the_row(); 
					            	$link = get_sub_field('link');
					                $social_icon = get_sub_field('text'); ?>

					               <a class="sign-up" href="<?php echo $link['url'];?>">
									   <?php echo $social_icon ?>
									</a>

					        	<?php endwhile; ?>
							<?php endif; ?>
						</li>

						<li>
							<?php if( have_rows('login', 'option') ): ?>
					            <?php while( have_rows('login', 'option') ): the_row(); 
					            	$link = get_sub_field('link');
					                $social_icon = get_sub_field('text'); ?>

					               <a class="login" href="<?php echo $link['url'];?>">
									   <?php echo $social_icon ?>
									</a>

					        	<?php endwhile; ?>
							<?php endif; ?>
						</li>
		        	</ul>

		        	<div class="menu-pc2">
			        	<?php wp_nav_menu (
			            array('theme_location' => 'menu-1', 'menu_class' => 'list-menu'));?>

		            	<?php if( have_rows('teen-picks', 'option') ): ?>
				            <?php while( have_rows('teen-picks', 'option') ): the_row(); 
				            	$link = get_sub_field('link');
				                $social_icon = get_sub_field('text'); ?>

				               <a class="login" href="<?php echo $link['url'];?>">
								   <?php echo $social_icon ?>
								</a>

				        	<?php endwhile; ?>
						<?php endif; ?>
			        </div>
		        </div>
			</div>
		
		</div>
	</div>

	<!-- menu mobile -->
	<div class="menu-mobile">
		<div class="container">
			<div class="menu-main">
				<a class="home-url" href="<?php echo home_url(); ?>">
	            	<img class="logo-mobile" src="<?php echo get_theme_mod( 'Logo' ); ?>">
	        	</a>

	        	<ul class="menu-social">
					<?php if( have_rows('menu-social', 'option') ): ?>
			            <?php while( have_rows('menu-social', 'option') ): the_row(); 
			                $link = get_sub_field('link');
			                $social_icon = get_sub_field('icon');
			                ?>

			                <li>
				                <a href="<?php echo $link;?>">
								   <?php echo $social_icon ?>
								</a>
							</li>

			       	    <?php endwhile; ?>
					<?php endif; ?>

					<li class="icon-bar"><i class="fas fa-bars"></i></li>
				</ul>
			</div>

			<div class="bg-mobile">
				<?php echo do_shortcode('[wp_search_form]'); ?>
				
	        	<ul class="menu-pc">
	        		<li>
		        		<?php if( have_rows('sign-up', 'option') ): ?>
				            <?php while( have_rows('sign-up', 'option') ): the_row(); 
				            	$link = get_sub_field('link');
				                $social_icon = get_sub_field('text'); ?>

				               <a class="sign-up" href="<?php echo $link['url'];?>">
								   <?php echo $social_icon ?>
								</a>

				        	<?php endwhile; ?>
						<?php endif; ?>
					</li>

					<li>
						<?php if( have_rows('login', 'option') ): ?>
				            <?php while( have_rows('login', 'option') ): the_row(); 
				            	$link = get_sub_field('link');
				                $social_icon = get_sub_field('text'); ?>

				               <a class="login" href="<?php echo $link['url'];?>">
								   <?php echo $social_icon ?>
								</a>

				        	<?php endwhile; ?>
						<?php endif; ?>
					</li>
	        	</ul>

	        	<div class="menu-pc2">
	        		<?php if( have_rows('teen-picks', 'option') ): ?>
			            <?php while( have_rows('teen-picks', 'option') ): the_row(); 
			            	$link = get_sub_field('link');
			                $social_icon = get_sub_field('text'); ?>

			               <a class="login" href="<?php echo $link['url'];?>">
							   <?php echo $social_icon ?>
							</a>

			        	<?php endwhile; ?>
					<?php endif; ?>

		        	<?php wp_nav_menu (
		            array('theme_location' => 'menu-1', 'menu_class' => 'list-menu'));?>
		        </div>
		    </div>
		</div>
	</div>
