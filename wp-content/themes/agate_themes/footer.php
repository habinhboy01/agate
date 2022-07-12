	<div class="bg-footer">
		<ul class="list-footer">
			<?php if( have_rows('menu-footer', 'option') ): ?>
	            <?php while( have_rows('menu-footer', 'option') ): the_row(); 
	                $link = get_sub_field('link');
	                $social_icon = get_sub_field('text');
	                ?>

	                <li>
		                <a href="<?php echo $link;?>">
						   <?php echo $social_icon ?> <i class="fas fa-chevron-right"></i>
						</a>
					</li>

	       	    <?php endwhile; ?>
			<?php endif; ?>
		</ul>

		<div class="container">
			<div class="row bg-footer2">
				<div class="col-lg-3 col-12">
					<div class="content-footer">
						<a class="home-url" href="<?php echo home_url(); ?>">
		            		<img src="<?php echo get_theme_mod( 'Logo' ); ?>">
		        		</a>

		        		<p class="text-footer"><?php echo get_field('rightscopy','option'); ?></p>

		        		<p class="text-footer2"><?php echo get_field('follow','option'); ?></p>

		        		<ul class="list-social">
		        			<?php if( have_rows('list-social', 'option') ): ?>
					            <?php while( have_rows('list-social', 'option') ): the_row(); 
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
		        	</div>
				</div>

				<div class="col-lg-3 col-12">
					<h1 class="text-footer3"><?php echo get_field('product','option'); ?></h1>

					<ul class="list-agate">
	        			<?php if( have_rows('list-agate', 'option') ): ?>
				            <?php while( have_rows('list-agate', 'option') ): the_row(); 
				                $link = get_sub_field('link');
				                $social_icon = get_sub_field('text');
				                ?>

				                <li>
					                <a href="<?php echo $link;?>">
									   <?php echo $social_icon ?>
									</a>
								</li>

				       	    <?php endwhile; ?>
						<?php endif; ?>
	        		</ul>
				</div>

				<div class="col-lg-3 col-12">
					<h1 class="text-footer3"><?php echo get_field('about-agate','option'); ?></h1>

					<ul class="list-agate">
	        			<?php if( have_rows('about-us', 'option') ): ?>
				            <?php while( have_rows('about-us', 'option') ): the_row(); 
				                $link = get_sub_field('link');
				                $social_icon = get_sub_field('text');
				                ?>

				                <li>
					                <a href="<?php echo $link;?>">
									   <?php echo $social_icon ?>
									</a>
								</li>

				       	    <?php endwhile; ?>
						<?php endif; ?>
	        		</ul>
				</div>

				<div class="col-lg-3 col-12">
					<h1 class="text-footer3"><?php echo get_field('contact','option'); ?></h1>

					<ul class="list-agate">
						<li>
							<a href="https://goo.gl/maps/auHjAwwtCkwDUbA67"><?php echo get_field('address','option'); ?></a>
						</li>

						<li>
							<a href="tel:+(84) 936 614 091"><?php echo get_field('contact-phone','option'); ?></a>
						</li>


						<li>
							<a href="mailto:youniverse@agate.vn"><?php echo get_field('contact-email','option'); ?></a>
						</li>

	        		</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-footer3">
		<img class="img-footer3" src="<?php bloginfo('template_directory') ?>/images/img4.png">

		<div class="content-footer2">
			<img src="<?php bloginfo('template_directory') ?>/images/img5.png">

			<img class="img-footer" src="<?php bloginfo('template_directory') ?>/images/img12.png">

			<img class="img-footer2" src="<?php bloginfo('template_directory') ?>/images/img7.png">
		</div>
	</div>




<?php wp_footer() ?>    
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- library animation js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/aos.js"></script>

<!-- My Js -->

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>


<script>
  AOS.init();
</script>

</body>
</html>