<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>
	
	<div id="internal_main">
	
	<div class="page_container">

	<h1 id='internal_header'><?php the_title();?></h1><!-- internal_header -->

	<span class='double_line contact_header'></span><!-- double_line -->

		<div id='contact_wrapper' class="internal_wrapper">
		
		<div id='contact_locations'>
  
			<?php get_template_part('page-templates/includes/template','locations');?> 

		</div><!-- contact_locations -->

		</div><!-- contact_wrapper -->
		
	</div><!-- page_container -->
	
	<div id='contact_bottom'></div><!-- contact_bottom -->
	
</div><!-- internal_main -->

	<?php get_footer(); ?>