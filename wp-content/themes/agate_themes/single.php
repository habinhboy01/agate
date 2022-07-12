<?php get_header(); ?>

	<div class="container bg-category">
		<p class="text-single"><?php echo get_the_date(); ?></p>

		<h1 class="text-single2"><?php the_title(); ?></h1>


        <div class="date-author">
        	<ul>
        		<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

					<li class="text-news4"><?php the_author(); ?></li>
    				<li class="text-news5"><?php echo get_the_date(); ?></li>

					<?php endwhile;?>
				<?php endif; ?>	
        	</ul>

    		<ul class="social-single">
    			<?php if( have_rows('social-single', 'option') ): ?>
		            <?php while( have_rows('social-single', 'option') ): the_row(); 
		                $icon = get_sub_field('icon');
		                $link = get_sub_field('link'); ?>

		                <li class="social-single2">
			                <a href="<?php echo $link; ?>">
			                	<?php echo $icon ?>
			                </a>
			            </li>
		                
		            <?php endwhile; ?>
		        <?php endif; ?>

		        <li class="social-single3"><i class="fas fa-comment-alt"></i></li>

		        <li><img src="<?php bloginfo('template_directory') ?>/images/save.png"></li>
    		</ul>
   		
    	</div>

    	<div class="content-single"><?php the_content(); ?></div>

	</div>


	<div class="container">
		<ul class="card-single">
		    <?php if( have_rows('card-single', 'option') ): ?>
	            <?php while( have_rows('card-single', 'option') ): the_row(); 
	                $icon = get_sub_field('text');
	                $link = get_sub_field('link'); ?>

	                <li>
		                <a href="<?php echo $link; ?>">
		                	<?php echo $icon ?>
		                </a>
		            </li>
	                
	            <?php endwhile; ?>
	        <?php endif; ?>
		</ul>

		<div class="content-share">
			<div class="share-single">
				<h1 class="text-share">Chia sẻ bài viết:</h1>

				<ul class="social-single">
	    			<?php if( have_rows('social-single', 'option') ): ?>
			            <?php while( have_rows('social-single', 'option') ): the_row(); 
			                $icon = get_sub_field('icon');
			                $link = get_sub_field('link'); ?>

			                <li>
				                <a href="<?php echo $link; ?>">
				                	<?php echo $icon ?>
				                </a>
				            </li>
			                
			            <?php endwhile; ?>
			        <?php endif; ?>
			    </ul>
			</div>

			<div class="share-single">
				<h1 class="text-share">Bình luận</h1>

			 	<span class="social-single3 text-share2"><i class="fas fa-comment-alt"></i></span>

			 	<img src="<?php bloginfo('template_directory') ?>/images/save.png">
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

	<!-- bài viết liên quan -->

	<div class="container bg-related">
		<div class="geometry">
			<img src="<?php bloginfo('template_directory') ?>/images/img6.png">

			<h1 class="text-recently">BÀI VIẾT LIÊN QUAN</h1>
		</div>



		<?php
		/*
		 * Code hiển thị bài viết liên quan trong cùng 1 category
		 * Code by levantoan.com
		 */
		$categories = get_the_category(get_the_ID());
		if ($categories){
		    echo '<div class="row related">';
		    $category_ids = array();
		    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		    $args=array(
		        'category__in' => $category_ids,
		        'post__not_in' => array(get_the_ID()),
		        'posts_per_page' => 3,
		        'order'        => 'ASC',
		        
		    );
		    $my_query = new wp_query($args);
		    if( $my_query->have_posts() ):
		       
		        while ($my_query->have_posts()):$my_query->the_post();
		            ?>

		            <div class="col-lg-5 col-12 related2">
	            		<a class="img-news" href="<?php the_permalink(); ?>">
        					<?php the_post_thumbnail('full'); ?>             						
        				</a>
			        </div>

			        <div class="col-lg-7 col-12 related2">
			        	<h1 class="text-recently2">
		            		<a href="<?php the_permalink() ?>">
			                    <?php the_title() ?>
			                </a>
			            </h1>

			            <div class="date-author">
                    		<ul>
                    			<li class="text-news4"><?php the_author(); ?></li>
                    			<li class="text-news5"><?php echo get_the_date(); ?></li>
                    		</ul>
                    	</div>
			        </div>

		            <?php
		        endwhile;
		        echo '</div>';
		    endif; wp_reset_query();
		    echo '</div>';
			}
			?>
	</div>

<?php get_footer(); ?>