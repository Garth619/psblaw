<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal-main">

<div class='page-title-wrapper'>

  <h1 class="page-title page-large-content-title"><?php the_title();?></h1>

</div><!-- page-title-wrapper -->

<?php //if(get_field('faqs_page_description')) { ?>

  <div id='page-descrip-wrapper'>

    <?php //the_field( 'faqs_page_description' ); ?>

		<p>If you would like to leave us a review we would love to hear from you. </p>

	
  </div><!-- page-descrip-wrapper -->

	<a class='button testi-button' href='<?php bloginfo('bloginfo');?>/href'>Click here to leave a review</a><!-- button testi-button -->

<?php  //} ?>

	<div id="page-container">
			
		<div id='testi-slide-wrapper'>

			<div class='testi-arrow testi-arrow-left'>
			
				<?php echo file_get_contents( get_template_directory() . '/images/arrow-left.svg' ); ?>
			
			</div><!-- testi-arrow testi-arrow-left -->

			<div id='testi-slider'>
			
				<div class='testi-slide'>
				
					<div class='single-video'>
		
						<div class='video-thumb'>

							<div class='mywisita wistia_embed wistia_async_pl66ui8qz5 popover=true popoverContent=thumbnail'></div><!-- wistia -->

							<div class='video-overlay'>

								<div class='play-button'></div><!-- play-button -->

							</div><!-- video-overlay -->

						</div><!-- video-thumb -->

						<div class='video_title_wrapper'>

							<img id='video-stars' src='<?php bloginfo('template_directory');?>/images/test-stars-large.svg' alt=''/>

							<span class='video_title'>FReEMAN V. DOE REALTY COMPANY</span><!-- video_title -->

						</div><!-- video_title_wrapper -->

					</div><!-- single-video -->
				
				</div><!-- testi-slide -->

				<div class='testi-slide'>
				
					<div class='single-video'>
		
						<div class='video-thumb'>

							<div class='mywisita wistia_embed wistia_async_pl66ui8qz5 popover=true popoverContent=thumbnail'></div><!-- wistia -->

							<div class='video-overlay'>

								<div class='play-button'></div><!-- play-button -->

							</div><!-- video-overlay -->

						</div><!-- video-thumb -->

						<div class='video_title_wrapper'>

							<img id='video-stars' src='<?php bloginfo('template_directory');?>/images/test-stars-large.svg' alt=''/>

							<span class='video_title'>FReEMAN V. DOE REALTY COMPANY</span><!-- video_title -->

						</div><!-- video_title_wrapper -->

					</div><!-- single-video -->
				
				</div><!-- testi-slide -->

				<div class='testi-slide'>
				
					<div class='single-video'>
		
						<div class='video-thumb'>

							<div class='mywisita wistia_embed wistia_async_pl66ui8qz5 popover=true popoverContent=thumbnail'></div><!-- wistia -->

							<div class='video-overlay'>

								<div class='play-button'></div><!-- play-button -->

							</div><!-- video-overlay -->

						</div><!-- video-thumb -->

						<div class='video_title_wrapper'>

							<img id='video-stars' src='<?php bloginfo('template_directory');?>/images/test-stars-large.svg' alt=''/>

							<span class='video_title'>FReEMAN V. DOE REALTY COMPANY</span><!-- video_title -->

						</div><!-- video_title_wrapper -->

					</div><!-- single-video -->
				
				</div><!-- testi-slide -->

				<div class='testi-slide'>
				
					<div class='single-video'>
		
						<div class='video-thumb'>

							<div class='mywisita wistia_embed wistia_async_pl66ui8qz5 popover=true popoverContent=thumbnail'></div><!-- wistia -->

							<div class='video-overlay'>

								<div class='play-button'></div><!-- play-button -->

							</div><!-- video-overlay -->

						</div><!-- video-thumb -->

						<div class='video_title_wrapper'>

							<img id='video-stars' src='<?php bloginfo('template_directory');?>/images/test-stars-large.svg' alt=''/>

							<span class='video_title'>FReEMAN V. DOE REALTY COMPANY</span><!-- video_title -->

						</div><!-- video_title_wrapper -->

					</div><!-- single-video -->
				
				</div><!-- testi-slide -->

				<div class='testi-slide'>
				
					<div class='single-video'>
		
						<div class='video-thumb'>

							<div class='mywisita wistia_embed wistia_async_pl66ui8qz5 popover=true popoverContent=thumbnail'></div><!-- wistia -->

							<div class='video-overlay'>

								<div class='play-button'></div><!-- play-button -->

							</div><!-- video-overlay -->

						</div><!-- video-thumb -->

						<div class='video_title_wrapper'>

							<img id='video-stars' src='<?php bloginfo('template_directory');?>/images/test-stars-large.svg' alt=''/>

							<span class='video_title'>FReEMAN V. DOE REALTY COMPANY</span><!-- video_title -->

						</div><!-- video_title_wrapper -->

					</div><!-- single-video -->
				
				</div><!-- testi-slide -->
			
			</div><!-- testi-slider -->

			<div class='testi-arrow testi-arrow-right'>
			
				<?php echo file_get_contents( get_template_directory() . '/images/arrow-right.svg' ); ?>
			
			</div><!-- testi-arrow testi-arrow-right -->

		</div><!-- testi-slide-wrapper -->

	</div><!-- page-container -->
	
</div><!-- internal-main -->

<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

<?php get_footer(); ?>
