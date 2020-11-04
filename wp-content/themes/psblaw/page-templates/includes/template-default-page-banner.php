<?php if(!get_field('disable_banner_new')) { ?>
	
	<div id="internal-banner">
		
		<div id="internal-banner-content">

		<?php if(is_home()) { ?>

			<h1 class="banner-title page-title"><?php the_field( 'internal_banner_blog_title','option'); ?></h1><!-- banner_title -->

			<?php if(get_field('blog_banner_description', 'option')) { ?>
			
			<div id='banner-descrip'>
			
				<?php the_field('blog_banner_description','option'); ?>
			
			</div><!-- banner-descrip -->

			<?php } ?>

		<?php } ?>

		<?php if(!is_home() && basename(get_page_template()) === 'page.php') { ?>

			ppaagge

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