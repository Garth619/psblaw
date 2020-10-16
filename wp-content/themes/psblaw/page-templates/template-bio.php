<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">

<div id='att_banner'>

	<div id='att_banner_inner'>
	
		<div id='att_banner_left'>
	
			<div id='att_banner_header_wrapper'>
	
				<h1 id="internal_header" class='att_header' ><?php the_title();?></h1><!-- att_header -->

				<span class='double_line bio_line'></span><!-- double_line -->

				<span id='att_position'><?php the_field( 'position' ); ?></span><!-- att_position -->
	
			</div><!-- att_banner_header_wrapper -->

		</div><!-- att_banner_left -->

		<div id='att_banner_right'></div><!-- att_banner_right -->

	</div><!-- att_banner_inner -->

	<?php get_template_part('page-templates/includes/att_bio_template_parts/template','profile_image'); ?>
	
</div><!-- att_banner -->

<div class="page_container two_col">
		
		<div class="page_content att_content content">
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
		</div><!-- page_content -->

		<?php get_sidebar('bio'); ?>
		
	</div><!-- page_container -->
	
	
</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
