<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">

	<div id='about_banner'>
	
		<div id='about_content_inner'>
		
			<h1 class='about_title banner_title'><?php the_title();?></h1><!-- banner_title -->

			<span class='double_line'></span><!-- double_line -->

			<div id='about_intro' class="content">
			
				<?php the_field( 'about_intro' ); ?>

			</div><!-- about_intro -->
		
		</div><!-- about_content_inner -->

		<img id='about_banner_image' src='<?php bloginfo('template_directory');?>/images/hero-intl-about-tablet-new.jpg' alt=''/><!-- about_banner_image -->
	
	</div><!-- about_banner -->

	<div class="page_container about_container two_col content">
		
		<div class='about_col'>
		
			<?php the_field( 'about_column_one' ); ?>

		</div><!-- about_col -->

		<div class='about_col'>

			<div id='about_video_wrapper'>

				<div id='about_video_inner'>

				<?php if(get_field('about_video_wistia_or_youtube') == "Wistia") { ?>
				
					<div id='about_video' class="video_hover_styles">

							<div id='mywistia' class="wistia_embed wistia_async_<?php the_field( 'about_video_id_wistia' ); ?> popover=true popoverContent=html"></div><!-- mywistia -->

							<?php $about_video_image = get_field( 'about_video_image' ); ?>
							
							<?php if ( $about_video_image ) { ?>
							
								<img src="<?php echo $about_video_image['url']; ?>" alt="<?php echo $about_video_image['alt']; ?>" />
							
							<?php } ?>

							<div id='video_overlay'>

								<div class='play_button'></div><!-- play_button -->

							</div><!-- video_overlay -->

				</div><!-- about_video -->

				<?php } ?>

				<?php if(get_field('about_video_wistia_or_youtube') == "Youtube") { ?>
				
				<div id='about_video' class="video_hover_styles">

						<a href="https://www.youtube.com/embed/<?php the_field( 'about_video_id_youtube' ); ?>" data-lity>

						<?php $about_video_image = get_field( 'about_video_image' ); ?>
						
						<?php if ( $about_video_image ) { ?>
						
							<img src="<?php echo $about_video_image['url']; ?>" alt="<?php echo $about_video_image['alt']; ?>" />
						
						<?php } ?>

						<div id='video_overlay'>

							<div class='play_button'></div><!-- play_button -->

						</div><!-- video_overlay -->

					</a>

			</div><!-- about_video -->

			<?php } ?>

				<?php if ( have_rows( 'about_video_bullets' ) ) : ?>
					
					<ul>

					<?php while ( have_rows( 'about_video_bullets' ) ) : the_row(); ?>

						<li><?php the_sub_field( 'bullet' ); ?></li>
		
					<?php endwhile; ?>

					</ul>

				<?php endif; ?>
			
				</div><!-- about_video_inner -->

				<span class='double_line'></span><!-- double_line -->
			
			</div><!-- about_video_wrapper -->
		
			<?php the_field( 'about_column_two' ); ?>
		
		</div><!-- page_container -->
		
	</div><!-- about_container -->

	<div id='about_bottom_wrapper'>
	
		<div id='about_bottom_inner'>
		
			<span id='about_bottom_title'><?php the_field( 'about_logos_title' ); ?></span><!-- about_bottom_title -->

			<span class='double_line'></span><!-- double_line -->

			<?php get_template_part('page-templates/includes/template','nationally_recognized_slider'); ?>
		
		</div><!-- about_bottom_inner -->
	
	</div><!-- about_bottom_wrapper -->
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>
