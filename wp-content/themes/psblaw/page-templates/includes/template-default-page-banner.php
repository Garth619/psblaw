<?php if(!get_field('disable_banner_new')) { ?>
	
	<div id="internal_banner">
		
		<div id="internal_banner_content">

			<?php if(get_field('banner_title')) : ?>
			
				<?php if(get_field('banner_h1') == "Yes") : ?>
			
					<h1 class="banner_title"><?php the_field( 'banner_title' ); ?></h1><!-- banner_title -->
				
					<?php else: ?>
				
					<span class="banner_title"><?php the_field( 'banner_title' ); ?></span><!-- banner_title -->
				
				<?php endif;?>
			
			<?php else:?>
			
			<?php if(get_field('banner_h1') == "Yes") : ?>
			
				<h1 class="banner_title"><?php the_field( 'global_internal_banner_title','option'); ?></h1><!-- banner_title -->

				<?php else: ?>
			
				<span class="banner_title"><?php the_field( 'global_internal_banner_title','option'); ?></span><!-- banner_title -->

			<?php endif;?>
			
			<?php endif;?>

			<span class='double_line'></span><!-- double_line -->
			
			<?php if(get_field('turn_off_button') == "Yes") : ?>
			
			<?php else: ?>
			
				<a class="button internal_button" href="#consultation">
				
					<span><?php the_field( 'global_internal_banner_button_verbiage','option'); ?></span>
			
				</a>
			
			<?php endif;?>

		</div><!-- internal_banner_content -->
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $global_internal_banner_image_tablet = get_field( 'global_internal_banner_image_tablet','option'); ?>
		
		<?php $banner_image = get_field( 'banner_image' ); ?>
		<?php $banner_image_tablet = get_field( 'banner_image_tablet' ); ?>
		
		<?php if($banner_image || $banner_image_tablet) : ?>

			<picture>

				<source media='(min-width: 1170px)' srcset='<?php echo $banner_image['url']; ?>'>
		
				<img id="internal_hero" src="<?php echo $banner_image_tablet['url']; ?>" alt="<?php echo $banner_image_tablet['alt']; ?>"/><!-- internal_hero -->

			</picture>
		
		<?php else: ?>

			<picture>

			<source media='(min-width: 1170px)' srcset='<?php echo $global_internal_banner_image['url']; ?>'>
		
			<img id="internal_hero" src="<?php echo $global_internal_banner_image_tablet['url']; ?>" alt="<?php echo $global_internal_banner_image_tablet['alt']; ?>"/><!-- internal_hero -->

			</picture>
		
		<?php endif;?>
		
	</div><!-- internal_banner -->

	<?php } ?>