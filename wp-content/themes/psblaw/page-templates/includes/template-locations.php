<div id='locations'>
  
    <div class='loc_col'>
    
      <span class='loc_title'><?php the_field( 'local_office_title','option'); ?></span><!-- loc_title -->

			<span class='double_line'></span><!-- double_line -->

			<span class='address loc_descrip'><?php the_field( 'address','option'); ?></span><!-- address -->
			
			<a class='get_directions' href='<?php the_field( 'get_directions_link','option'); ?>' target="_blank" rel="noopener"><?php the_field( 'get_directions_verbiage','option'); ?></a><!-- get_directions -->
    
    </div><!-- loc_col -->

		<div class='loc_col'>
    
      <span class='loc_title'><?php the_field( 'full_service_term_title','option'); ?></span><!-- loc_title -->

			<span class='double_line'></span><!-- double_line -->

			<span class='loc_descrip loc_cta'><?php the_field( 'full_service_term_description','option'); ?></span><!-- loc_descrip -->
    
    </div><!-- loc_col -->

		<div class='loc_col'>
    
      <span class='loc_title'><?php the_field( 'contact_us_title','option'); ?></span><!-- loc_title -->

			<span class='double_line'></span><!-- double_line -->

			<a class='loc_phone loc_descrip' href='tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('footer_phone', 'option')); ?>'><?php the_field( 'footer_phone','option'); ?></a><!-- loc_phone -->

			<span class='loc_title connect_title'><?php the_field( 'connect_title','option'); ?></span><!-- loc_title -->

			<span class='double_line'></span><!-- double_line -->

			<div class='social_media'>

			<?php if ( have_rows( 'social_media','option') ) : ?>
			
				<?php while ( have_rows( 'social_media','option') ) : the_row(); ?>

				<?php if(get_sub_field('icon') == "Facebook") { ?>

					<a class='sm' href='<?php the_sub_field( 'link' ); ?>' target="_blank" rel="noopener">
				
						<?php echo file_get_contents( get_template_directory() . '/images/fb.svg' ); ?>
				
					</a><!-- sm -->

				<?php } ?>

				<?php if(get_sub_field('icon') == "LinkedIn") { ?>

					<a class='sm' href='<?php the_sub_field( 'link' ); ?>' target="_blank" rel="noopener">

						<?php echo file_get_contents( get_template_directory() . '/images/linkedin.svg' ); ?>

					</a><!-- sm -->

				<?php } ?>

				<?php endwhile; ?>

			<?php endif; ?>
			
			</div><!-- social_media -->
    
    </div><!-- loc_col -->
  
  </div><!-- locations -->