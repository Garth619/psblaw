<?php get_header(); ?>

<div id="internal-main">

<div class='page-title-wrapper'>

	<h1 class="page-title page-large-content-title"><?php the_title();?></h1>
	
	</div><!-- page-title-wrapper -->
	
	<div id="page-container" class="two-col no-banner-layout">
		
		<div class="page-content">

			<div class='page-content-inner content'>

			<div class='fetured-on-wrapper'>

				<span class='featured-one'>Featured On:</span><!-- featured-one -->
			
				<div class='featured-on-inner'>
			
				<div class='featured-on-video'>
				
					<div class='single-video'>
				
						<div class='video-thumb'>
	
							<div class='mywisita wistia_embed wistia_async_<?php the_field( 'attorney_wistia_id' ); ?> popover=true popoverContent=thumbnail'></div><!-- wistia -->
	
							<div class='video-overlay'>
	
								<div class='play-button'></div><!-- play-button -->
	
							</div><!-- video-overlay -->
	
						</div><!-- video-thumb -->
	
					</div><!-- single-video -->
	
				<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
				
				</div><!-- featured-on-video -->
			
				</div><!-- featured-on-inner -->
			
			</div><!-- fetured-on-wrapper -->

				
			
			</div><!-- page-content-inner -->
			
		</div><!-- page-content -->

		<?php if(!get_field('disable_sidebar')) {

			get_sidebar('case-results');

		} ?>
		
	</div><!-- page-container -->

</div><!-- internal-main -->
		

<?php get_footer(); ?>





