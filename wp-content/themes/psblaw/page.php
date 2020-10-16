<?php get_header(); ?>

<div id="internal_main">

<div id='two_col_template_with_banner'>

	<?php get_template_part('page-templates/includes/template','default-page-banner'); ?>

</div><!-- two_col_template_with_banner -->

<div class="page_container two_col">
		
		<div class="page_content">
			
			<?php if(get_field('banner_h1') == "Yes") : ?>
			
				<h2 class="page_header"><?php the_title();?></h2>
			
			<?php else:?>
			
				<h1 class="page_header"><?php the_title();?></h1>
			
			<?php endif;?>

			<span class='double_line'></span><!-- double_line -->

			<div class='page_content_inner content'>
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
			</div><!-- page_content_inner -->
			
		</div><!-- page_content -->

		<?php if(!get_field('disable_sidebar')) {

			get_sidebar();

		} ?>
		
	</div><!-- page_container -->
	
	
</div><!-- internal_main -->
		

<?php get_footer(); ?>
