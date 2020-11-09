<?php if(!get_field('disable_banner_new')) { ?>
	
	<div id="internal-banner">
		
		<div id="internal-banner-content">

		<?php // blog main feed
		
			if(is_home()) { ?>

			<h1 class="banner-title page-title"><?php the_field( 'internal_banner_blog_title','option'); ?></h1><!-- banner_title -->

			<?php if(get_field('blog_banner_description', 'option')) { ?>
			
			<div id='banner-descrip'>
			
				<?php the_field('blog_banner_description','option'); ?>
			
			</div><!-- banner-descrip -->

			<?php } ?>

		<?php } ?>

		<?php // category feed
			
			if(is_category()) { ?>

			<h1 class="banner-title page-title"><?php single_cat_title() ?></h1><!-- banner_title -->

		<?php } ?>

		<?php // archive feed
		
		if(is_archive() && !is_category()) { ?>
			
			<h1 class="banner-title page-title"><?php printf( __( '<span>%s</span>'), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?></h1>

		<?php } ?>

		<?php 

			// contact page
		
			if(is_page_template('page-templates/template-contact.php')) { ?>

			<h1 class="banner-title page-title"><?php the_title(); ?></h1><!-- banner_title -->

			<div id='banner-descrip'>
			
				<p>Locations in Los Angeles, Orange County, San Diego and San Francisco</p>

				<div id='social-media-wrapper'>
            
              <a href="" target="_blank" rel="noopener">

                <?php echo file_get_contents( get_template_directory() . '/images/social-ig.svg' ); ?>
              
              </a>

              <a href="" target="_blank" rel="noopener">

              <?php echo file_get_contents( get_template_directory() . '/images/social-twitter.svg' ); ?>
            
            </a>

            <a href="" target="_blank" rel="noopener">

              <?php echo file_get_contents( get_template_directory() . '/images/social-fb.svg' ); ?>
            
            </a>
            
          </div><!-- social-media-wrapper -->
			
			</div><!-- banner-descrip -->

		<?php } ?>

		<?php 
		
		// pa pages
		
		if(!is_home() && !is_archive() && basename(get_page_template()) === 'page.php') { ?>

		<?php if(get_field('banner_title')) : ?>
			
			<?php if(get_field('banner_h1') == "Yes") : ?>
		
				<h1 class="banner-title page-title"><?php the_field( 'banner_title' ); ?></h1><!-- banner_title -->
			
				<?php else: ?>
			
				<span class="banner-title page-title"><?php the_field( 'banner_title' ); ?></span><!-- banner_title -->
			
			<?php endif;?>
		
		<?php else:?>
		
		<?php if(get_field('banner_h1') == "Yes") : ?>
		
			<h1 class="banner-title page-title"><?php the_field( 'global_banner_title','option'); ?></h1><!-- banner_title -->

			<?php else: ?>
		
			<span class="banner-title page-title"><?php the_field( 'global_banner_title','option'); ?></span><!-- banner_title -->

		<?php endif;?>
		
		<?php endif;?>

			<?php if(get_field('global_internal_banner_description', 'option')) { ?>
			
			<div id='banner-descrip'>
			
				<?php the_field('global_internal_banner_description','option'); ?>
			
			</div><!-- banner-descrip -->

			<?php } ?>

			<?php } ?>

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

	<?php } ?>