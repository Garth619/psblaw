<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/template','default-page-banner'); ?>
	
	<div class="page_container">

		<div id='testimonials_wrapper' class="internal_wrapper">

			<?php if ( have_rows( 'testi_page' ) ) : ?>
				
				<?php while ( have_rows( 'testi_page' ) ) : the_row(); ?>

					<div class='single_test'>
			
						<?php echo file_get_contents( get_template_directory() . '/images/stars.svg' ); ?>

						<span class='single_test_descrip'><?php the_sub_field( 'intro' ); ?></span><!-- single_test_descrip -->

						<div class='single_test_content content'>
			
							<?php the_sub_field( 'description' ); ?>
			
						</div><!-- single_test_content -->

						<span class='double_line'></span><!-- double_line -->

						<span class='single_test_name'><?php the_sub_field( 'name' ); ?></span><!-- single_test_name -->
		
					</div><!-- single_test -->
		
				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- testimonials_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
