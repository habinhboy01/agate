<?php
/*

Template Name: Tag page

*/

get_header(); ?>

	<!-- bài viết -->
	<div class="container bg-related">
		<div class="row">
			<div class="col-lg-7 col-12">

				<div class="geometry">
					<img src="<?php bloginfo('template_directory') ?>/images/img8.png">

					<h1 class="text-recently4">BÀI VIẾT</h1>
				</div>

				<div class="row">
					<?php
			            $args = array(
			                'post_status' => 'publish',
			                'post_type' => 'post',
			                'posts_per_page' => 6,
			                'orderby' => 'post_date',
			                'order' => 'date',
			            ); 
			        ?>
			            <?php $getposts = new WP_query($args); ?>
			            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
			            <?php if (have_posts()) : ?>
			            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

			            	<div class="col-lg-6 col-12 bg-new2">
				            	<a class="img-intro" href="<?php the_permalink(); ?>">
		            				<?php the_post_thumbnail('full'); ?>              			
		            			</a>

		            			<div class="title-news2">

		                			<a class="text-news3" href="<?php the_permalink() ?>">
			                    		<?php the_title() ?>
			                    	</a>

			                    	<div class="date-author">
			                    		<ul>
			                    			<li class="text-news4"><?php the_author(); ?></li>
			                    			<li class="text-news5"><?php echo get_the_date(); ?></li>
			                    		</ul>

			                    		<img src="<?php bloginfo('template_directory') ?>/images/save.png">
			                    	</div>
			                    </div>
			            	</div>

			        	<?php endwhile; wp_reset_postdata(); ?>
		    		<?php endif; ?>
		    	</div>

			</div>

			<div class="col-lg-5 col-12 bg-new3 bg-tag">

				<!-- thẻ phổ biến -->

				<div class="geometry">
					<img src="<?php bloginfo('template_directory') ?>/images/img9.png">

					<h1 class="text-recently4"><?php echo get_field('popular'); ?></h1>
				</div>

				<!-- row 1 -->
				<ul class="list-card row-card1">
					<?php if( have_rows('row-card1') ): ?>
			            <?php while( have_rows('row-card1') ): the_row(); 
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

				<!-- row 2 -->
				<ul class="list-card row-card2">
					<?php if( have_rows('row-card2') ): ?>
			            <?php while( have_rows('row-card2') ): the_row(); 
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

			    <!-- row 3 -->
			    <ul class="list-card row-card3">
			        <?php if( have_rows('row-card3') ): ?>
			            <?php while( have_rows('row-card3') ): the_row(); 
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

			    <!-- row 4 -->
			    <ul class="list-card row-card4">
			        <?php if( have_rows('row-card4') ): ?>
			            <?php while( have_rows('row-card4') ): the_row(); 
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

			    <img class="img-tag" src="<?php bloginfo('template_directory') ?>/images/img16.png">
			</div>
		</div>
	</div>


	<!-- thông báo bài viết mới -->
	<div class="bg-notification">
		<div class="container">
			<h1 class="text-notification"><?php echo get_field('notification'); ?></h1>

			<div class="form-notification">
				<?php echo do_shortcode( '[contact-form-7 id="118" title="Contact form 1"]' ); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>