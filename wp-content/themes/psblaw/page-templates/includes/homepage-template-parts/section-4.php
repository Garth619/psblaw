<section id='section_four'>

	<div id='sec_four_inner'>

		<?php echo file_get_contents( get_template_directory() . '/images/stars.svg' ); ?>

		<div id='sec_four_slider_wrapper'>

		<?php if ( have_rows( 'section_four_testimonials' ) ) : ?>
			
			<div id='sec_four_slider'>
			
			<?php while ( have_rows( 'section_four_testimonials' ) ) : the_row(); ?>

				<div class='sec_four_slide'>

					<div class='intro_wrapper'>

						<?php the_sub_field( 'intro' ); ?>

					</div><!-- intro_wrapper -->

					<div class='descrip_wrapper'>

							<?php the_sub_field( 'content' ); ?>

					</div><!-- descrip_wrapper -->

					<span class='double_line'></span><!-- double_line -->

					<span class='name'><?php the_sub_field( 'name' ); ?></span><!-- name -->

				</div><!-- sec_four_slide -->
		
			<?php endwhile; ?>

			</div><!-- sec_four_slider -->

		<?php endif; ?>

		<div id="sec_four_left_arrow" class='sec_four_arrow'>
		
			<?php echo file_get_contents( get_template_directory() . '/images/ico-arrow.svg' ); ?>
		
		</div><!-- sec_four_arrow -->

		<div id="sec_four_right_arrow" class='sec_four_arrow'>
		
			<?php echo file_get_contents( get_template_directory() . '/images/ico-arrow.svg' ); ?>
		
		</div><!-- sec_four_arrow -->

		</div><!-- sec_four_slider_wrapper -->
	
	</div><!-- sec_four_inner -->


	<picture>
	
		<?php $section_four_background_image_desktop = get_field( 'section_four_background_image_desktop' ); ?>

		<?php if ( $section_four_background_image_desktop ) { ?>

			<source media='(min-width: 1170px)' data-srcset='<?php echo $section_four_background_image_desktop['url']; ?>'>
			
		<?php } ?>

		<?php $section_four_background_image_tablet = get_field( 'section_four_background_image_tablet' ); ?>

		<img id='sec_four_img' class="lazyload" data-src='<?php echo $section_four_background_image_desktop['url']; ?>' /><!-- sec_four_img -->

	</picture>

</section><!-- section_four -->