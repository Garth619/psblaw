<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>
	
	<div id="internal-main">

	<div id="internal-banner">
		
		<div id="internal-banner-content">

			<h1 class="banner-title page-title"><?php the_title(); ?></h1><!-- banner_title -->

			<div id='banner-descrip'>
			
				
			
			</div><!-- banner-descrip -->

	
		</div><!-- internal-banner-content -->

		<div id='internal-banner-slider-wrapper'>
		
			<div id='internal-banner-slider'>
			
				<div class='internal-banner-slide'>
				
					<img src='<?php bloginfo('template_directory');?>/images/int-image-la.jpg' alt=''/>
				
				</div><!-- internal-banner-slide -->

				<div class='internal-banner-slide'>
				
					<img src='<?php bloginfo('template_directory');?>/images/int-image-oc.jpg' alt=''/>
				
				</div><!-- internal-banner-slide -->

				<div class='internal-banner-slide'>
				
					<img src='<?php bloginfo('template_directory');?>/images/int-image-sd.jpg' alt=''/>
				
				</div><!-- internal-banner-slide -->

				<div class='internal-banner-slide'>
				
					<img src='<?php bloginfo('template_directory');?>/images/int-image-sf.jpg' alt=''/>
				
				</div><!-- internal-banner-slide -->
		
		</div><!-- internal-banner-slider -->
		
		</div><!-- internal-banner-slider-wrapper -->
		
	</div><!-- internal-banner -->

	<div id="page-container" class="">
	
		<div class="page-content">

			<div class='page-content-inner content'>

				<?php get_template_part( 'loop', 'page' ); ?>
		
			</div><!-- page-content-inner -->
		
		</div><!-- page-content -->
	
	</div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer(); ?>