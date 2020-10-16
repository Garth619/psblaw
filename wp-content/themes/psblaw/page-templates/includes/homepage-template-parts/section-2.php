<section id='section_two'>

	<div id='sec_two_inner' class="preload_section">

		<?php if ( have_rows( 'section_two_selling_points' ) ) : ?>

			<div id='sec_two_slider' class="preload_slider">
			
			<?php while ( have_rows( 'section_two_selling_points' ) ) : the_row(); ?>
			
				<div class='sec_two_slide'>

					<?php $icon = get_sub_field( 'icon' ); ?>
					
					<?php if ( $icon ) { ?>
						
						<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
					
					<?php } ?>

					<span class="amount"><?php the_sub_field( 'amount' ); ?></span>

					<span class='double_line'></span><!-- double_line -->

					<span class='type'><?php the_sub_field( 'description' ); ?></span><!-- type -->

				</div><!-- sec_two_slide -->

			<?php endwhile; ?>

			</div><!-- sec_two_slider -->

		<?php endif; ?>
	
	</div><!-- sec_two_inner -->

</section><!-- section_two -->