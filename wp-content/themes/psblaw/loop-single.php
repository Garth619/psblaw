<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id='single-post'>

<?php if(get_field('banner_h1') == "Yes") : ?>
			
			<h2 class="blog-header"><?php the_title();?></h2>
		
		<?php else:?>
		
		<h1 class="blog-header"><?php the_title();?></h1>
		
		<?php endif;?>
		
		<div class="blog-meta">
		
			<span class="date">Posted on <?php $pfx_date = get_the_date(); echo $pfx_date ?> in</span>
			
			<?php echo get_the_category_list();?>
		
		</div><!-- blog-meta -->
		
		<div class="blog-content content">
			
			<?php the_content();?>
		
		</div><!-- blog-content -->
			
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>
	
	</div><!-- single-post -->

<?php endwhile; // end of loop ?>

<?php endif; ?>