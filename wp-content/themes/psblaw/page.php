<?php get_header(); ?>

<div id="internal-main">

<div id='two-col-template-with-banner'>

	<?php get_template_part('page-templates/includes/template','default-page-banner'); ?>

</div><!-- two-col-template-with-banner -->

<div class="page-container two-col">
		
		<div class="page-content">
			
			<?php if(get_field('banner_h1') == "Yes") : ?>
			
				<h2 class="page-header"><?php the_title();?></h2>
			
			<?php else:?>
			
				<h1 class="page-header"><?php the_title();?></h1>
			
			<?php endif;?>

			<div class='page-content-inner content'>
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
			</div><!-- page-content-inner -->
			
		</div><!-- page-content -->

		<?php if(!get_field('disable_sidebar')) {

			get_sidebar();

		} ?>
		
	</div><!-- page-container -->
	
	
</div><!-- internal-main -->
		

<?php get_footer(); ?>
