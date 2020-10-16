

<div id='logos_slider_wrapper'>

		<?php if(get_field('section_six_logos',10)): ?>


			<div id='logos_left_arrow' class="logos_arrow">
				
				<?php echo file_get_contents( get_template_directory() . '/images/news-arrow.svg' ); ?>
				
			</div><!-- logos_left_arrow -->
			
			<div id='logos_slider'>
			
			<?php while(has_sub_field('section_six_logos',10)): ?>
		
				<div class='logos_slide <?php the_sub_field('class');?>'>
				
					<div class='logos_slide_inner'>

					<?php $logos = get_sub_field( 'logos'); ?>
					
					<?php if ( $logos ) { ?>
						
						<img class="lazyload" data-src="<?php echo $logos['url']; ?>" alt="<?php echo $logos['alt']; ?>" />
					
					<?php } ?>
				
					</div><!-- logos_slide_inner -->
			
				</div><!-- logos_slide -->
			
			<?php endwhile; ?>

			</div><!-- logos_slider -->

			<div id='logos_right_arrow' class="logos_arrow">
				
					<?php echo file_get_contents( get_template_directory() . '/images/news-arrow.svg' ); ?>
				
				</div><!-- logos_right_arrow -->

		<?php endif; ?>
		
		</div><!-- logos_slider_wrapper -->