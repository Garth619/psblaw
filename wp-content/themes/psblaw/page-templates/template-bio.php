<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal-main">
	
	<div id="page-container" class="two-col">
		
		<div class="page-content">

			<?php if(!get_field('disable_banner_new')) : ?>
			
				<?php if(get_field('banner_h1') == "Yes") : ?>
			
					<h2 class="page-title"><?php the_title();?></h2>
	
					<?php else:?>
	
					<h1 class="page-title"><?php the_title();?></h1>
	
				<?php endif;?>

			<?php endif; ?>

			<div class='page-content-inner content'>

					<div id='att-top'>
					
						<div class='att-profile-wrapper'>
						
							<div class='att-profile-img'>
						
								<img src='<?php bloginfo('template_directory');?>/images/att-brian-panish.jpg' alt=''/>
						
							</div><!-- att-profile-img -->

							<div class='att-email-wrapper'>
							
								<span>Email</span><a class='att-email' href="mailto:panish@psblaw.com">panish@psblaw.com</a>
						
							</div><!-- att-email -->

							<a class='button vcard' href=''>Download VCARD</a><!-- button vcard -->
					
						</div><!-- att-profile-wrapper -->

						<div id='att-intro-wrapper'>
					
							<div class='single-video'>

								<div class='video-thumb'>

									<div class='mywisita wistia_embed wistia_async_7y9zdxmy0q popover=true popoverContent=thumbnail'></div><!-- wistia -->

									<div class='video-overlay'>

										<div class='play-button'></div><!-- play-button -->

									</div><!-- video-overlay -->

								</div><!-- video-thumb -->

							</div><!-- single-video -->

							<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
					
						</div><!-- att-intro-wrapper -->
					
					</div><!-- att-top -->

				<?php the_field( 'attorney_intro' ); ?>

				<?php get_template_part( 'loop', 'page' ); ?>
			
			</div><!-- page-content-inner -->
			
		</div><!-- page-content -->

		<?php if(!get_field('disable_sidebar')) {

			get_sidebar();

		} ?>
		
	</div><!-- page-container -->
	
	
</div><!-- internal-main -->
					 
					 	
<?php get_footer(); ?>
