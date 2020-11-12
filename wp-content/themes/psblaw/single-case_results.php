<?php get_header(); ?>

<div id="internal-main">

<div class='page-title-wrapper'>

	<h1 class="page-title page-large-content-title"><?php the_title();?></h1>
	
	</div><!-- page-title-wrapper -->
	
	<div id="page-container" class="two-col no-banner-layout">
		
		<div class="page-content">

			<div class='page-content-inner content'>

				<?php get_template_part( 'loop', 'single' ); ?>

				
			
			</div><!-- page-content-inner -->
			
		</div><!-- page-content -->

		<?php if(!get_field('disable_sidebar')) {

			get_sidebar('case-results');

		} ?>
		
	</div><!-- page-container -->
	
	<?php get_template_part('page-templates/includes/template','morenews-slider'); ?>

</div><!-- internal-main -->
		

<?php get_footer(); ?>





