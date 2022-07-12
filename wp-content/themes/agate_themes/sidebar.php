	<!-- xu hướng -->

	<div class="geometry">
		<img src="<?php bloginfo('template_directory') ?>/images/img7.png">

		<img src="<?php bloginfo('template_directory') ?>/images/img6.png">

		<h1 class="text-recently4"><?php echo get_field('trend'); ?></h1>
	</div>

	<div class="row bg-new2">
		<?php
            $args = array(
                'post_status' => 'publish',
                'post_type' => 'post',
                'posts_per_page' => 6,
                'orderby' => 'post_date',
                'order' => 'ASC',
            ); 
        ?>
            <?php $getposts = new WP_query($args); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php if (have_posts()) : ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

            	<div class="col-lg-5 col-12 bg-new4">
	            	<a class="img-intro" href="<?php the_permalink(); ?>">
        				<?php the_post_thumbnail('full'); ?>              			
        			</a>
        		</div>

        		<div class="col-lg-7 col-12 bg-new4">	              			

        			<?php the_category(); ?>

        			<a class="text-recently5" href="<?php the_permalink() ?>">
                		<?php the_title() ?>
                	</a>

                	<p class="text-news5 text-recently6"><?php echo get_the_date(); ?></p>

            	</div>

        	<?php endwhile; wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>

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


    <!-- banner quảng cáo -->

    <div class="bg-banner">
        <div class="content-banner">
            <?php if (have_rows('link-banner')) : ?>
                <?php while (have_rows('link-banner')) : the_row();
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; 
                    $link = get_sub_field('link');
                ?>

                <a href="<?php echo $link;?>">
                    <img class="img-podcast" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                </a>

                <?php endwhile; ?>
            <?php endif; ?>

            <h1 class="text-banner"><?php echo get_field('banner'); ?></h1>

            <div class="content-banner2">
                <img src="<?php bloginfo('template_directory') ?>/images/img14.png">

                <img src="<?php bloginfo('template_directory') ?>/images/img13.png">
            </div>
        </div>
    </div>