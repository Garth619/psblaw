<?php get_header(); ?>

<div id="internal_main">

	<div id='two_col_template_with_banner'>
	
		<?php get_template_part('page-templates/includes/template','default-page-banner'); ?>	

	</div><!-- two_col_template_with_banner -->
	
	<div class="page_container two_col">
		
		<div class="page_content">

			<?php get_template_part( 'loop', 'single' ); ?>
			
		</div><!-- page_content -->

		<?php if(!get_field('disable_sidebar')) {

			get_sidebar('blog');

		} ?>
		
	</div><!-- page_container -->
	
	</div><!-- internal_main -->

<?php get_footer(); ?>




