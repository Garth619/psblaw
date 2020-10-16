<?php get_header(); ?>

<div id="internal_main">
	
	<div class="page_container one_col">

		<div id='not_found_wrapper' class="internal_wrapper">
		
			<h1 id='internal_header'><?php the_field( 'not_found_title','option'); ?></h1><!-- internal_header -->

			<span class='double_line not_found_header'></span><!-- double_line -->

			<span id='not_found_subtitle'><?php the_field( 'not_found_subtitle','option'); ?></span><!-- not_found_subtitle -->

			<div id='not_found_content' class="content">
			
				<?php the_field( 'not_found_content','option'); ?>
			
			</div><!-- not_found_content -->

		</div><!-- not_found_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->
			
<?php get_footer(); ?>