<?php 

/* Template Name: PA Directory */

get_header(); ?>

<div id="internal_main">
	
	<div class="page_container">

		<h1 id='internal_header'><?php the_title();?></h1><!-- internal_header -->

		<div id='pa_directory' class="internal_wrapper">
		
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

		</div><!-- pa_directory -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>
