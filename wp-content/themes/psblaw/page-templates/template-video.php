<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_main">
	
	<div class="page_container">

		<h1 id='internal_header'><?php the_title();?></h1><!-- internal_header -->

		<div id='video_wrapper' class="internal_wrapper">
		
		<?php if ( have_rows( 'video_center' ) ) : ?>
			<?php while ( have_rows( 'video_center' ) ) : the_row(); ?>

			<?php if(get_field('wistia_or_youtube') == "Wistia") { ?>
	
			<div class='single_video video_hover_styles'>

				<div class='video_thumb'>
				
					<div class='mywisita wistia_embed wistia_async_<?php the_sub_field( 'wistia_id' ); ?> popover=true popoverContent=thumbnail'></div><!-- mywisita -->

					<div class='video_overlay'>
					
						<span class='play_button'></span><!-- play_button -->
					
					</div><!-- video_overlay -->
				
				</div><!-- video_thumb -->

				<div class='video_title_wrapper'>
				
					<span class='video_title'><?php the_sub_field( 'video_title' ); ?></span><!-- video_title -->
				
				</div><!-- video_title_wrapper -->
				
			</div><!-- single_video -->

			<?php } ?>

			<?php if(get_field('wistia_or_youtube') == "Youtube") { ?>

				<div class='single_video video_hover_styles'>

				<a href="https://www.youtube.com/embed/<?php the_sub_field( 'youtube_id' ); ?>" data-lity>

				<div class='video_thumb'>
				
					<img class="youtube" src="https://img.youtube.com/vi/<?php the_sub_field( 'youtube_id' ); ?>/0.jpg"/>

					<div class='video_overlay'>
					
						<span class='play_button'></span><!-- play_button -->
					
					</div><!-- video_overlay -->
				
				</div><!-- video_thumb -->

				<div class='video_title_wrapper'>
				
					<span class='video_title'><?php the_sub_field( 'video_title' ); ?></span><!-- video_title -->
				
				</div><!-- video_title_wrapper -->

				</a>
				
			</div><!-- single_video -->

			<?php } ?>

			<?php endwhile; ?>
		<?php endif; ?>


    <?php if(get_field('wistia_or_youtube') == "Wistia") { ?>
	<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
<?php } ?>

		</div><!-- video_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
