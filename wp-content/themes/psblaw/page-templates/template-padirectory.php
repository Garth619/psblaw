<?php 

/* Template Name: PA Directory */

get_header(); ?>

<div id="internal-main">

<h1 class="page-title page-large-content-title"><?php the_title();?></h1>

<div id='page-descrip-wrapper'>

	<div id='page-descrip'>
	
		<p>The lawyers at Panish Shea & Boyle, LLP handle many types of cases, and are always searching for new areas in which we can offer our legal expertise. If you don’t see the category for your type of case, please call us in Los Angeles at (310) 477-1700 or toll-free at (888) 498-6487 to discuss your legal matter and whether we can help you. If we can’t, we can help refer you to someone who can.</p>
	
	</div><!-- page-descrip -->

	<span id='pa-subtitle'>The following is the list of the practice areas we assist in:</span><!-- pa-subtitle -->

</div><!-- page-descrip-wrapper -->

	<div id="page-container">
			
		<div id='pa-directory'>
			
			<?php if(get_field('practice_area_directory')): ?>
			
				<ul class="pa_directory_top_menu">
				
					<?php while(has_sub_field('practice_area_directory')): ?>
		
						<li>
						
							<a><?php the_sub_field( 'title' ); ?></a>
					
								<?php $obj = get_sub_field('pa_nav_menu'); ?>
				
								<?php wp_nav_menu( array( 'menu' => $obj->name) ); ?>
					
						</li>
					
					<?php endwhile; ?>
			
				</ul><!-- pa_directory_top_menu -->
		
			<?php endif; ?>

		</div><!-- pa-directory -->

	</div><!-- page-container -->
	
</div><!-- internal-main -->
		
<?php get_footer(); ?>
