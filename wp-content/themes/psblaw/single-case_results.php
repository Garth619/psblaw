<?php get_header(); ?>

<div id="internal-main">

<div class='page-title-wrapper'>

	<h1 class="page-title page-large-content-title"><?php the_title();?></h1>
	
	</div><!-- page-title-wrapper -->
	
	<div id="page-container" class="two-col no-banner-layout">
		
		<div class="page-content">

			<div class='page-content-inner content'>

				<?php get_template_part( 'loop', 'single' ); ?>

				<div id='related-news'>
				
					<h3 id='related-news-title'>Related News</h3><!-- related-news-title -->

					<ul>
						<li><a href="">Orange Unified School District Sued for Wrongful Death of Student Killed in Campus Golf Cart Crash</a></li>
						<li><a href="">Mother of Manny Perez Seeks Justice for Son Following Death at El Modena H.S.</a></li>
					</ul>
				
				</div><!-- related-news -->
			
			</div><!-- page-content-inner -->
			
		</div><!-- page-content -->

		<?php if(!get_field('disable_sidebar')) {

			get_sidebar('blog');

		} ?>
		
	</div><!-- page-container -->
	
	<?php get_template_part('page-templates/includes/template','morenews-slider'); ?>

</div><!-- internal-main -->
		

<?php get_footer(); ?>





