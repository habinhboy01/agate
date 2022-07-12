<?php get_header(); ?>

	<!-- gần đây nhất -->

	<div class="container bg-category">
		<h1 class="text-cetegory"><?php single_cat_title(); ?></h1>

		<div class="row bg-new2">

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

	            	<div class="col-lg-6 col-12 bg-category2">
	            		<div class="content-recently">
		            		<a class="img-news" href="<?php the_permalink(); ?>">
            					<?php the_post_thumbnail('full'); ?>             						
            				</a>

            				<div class="img-save img-save2">
	                    		<img src="<?php bloginfo('template_directory') ?>/images/save.png">
	                    	</div>
	                    </div>
	            	</div>

	            	<div class="col-lg-6 col-12 bg-category2">
	            		<h1 class="text-recently2">
		            		<a href="<?php the_permalink() ?>">
			                    <?php the_title() ?>
			                </a>
			            </h1>

			            <div class="text-recently3"><?php the_excerpt(); ?></div>

	            		<div class="date-author">
                    		<ul>
                    			<li class="text-news4"><?php the_author(); ?></li>
                    			<li class="text-news5"><?php echo get_the_date(); ?></li>
                    		</ul>

                    		<img src="<?php bloginfo('template_directory') ?>/images/save.png">
                    	</div>
	            	</div>

	            <?php endwhile; wp_reset_postdata(); ?>
    		<?php endif; ?>
    	</div>

		<!-- phân trang -->

		<?php if(paginate_links()!='') {?>
			<div class="pagination">
				<?php
				global $wp_query;
				$big = 999999999;
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'prev_text'    => __('<'),
					'next_text'    => __('>'),
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
					) );
			    ?>
			</div>
		<?php } ?>

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