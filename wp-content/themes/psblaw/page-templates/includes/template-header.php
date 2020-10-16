<header>

	<div id='header_inner'>
	
		<div id='header_left'>

			<div class='header_title_wrapper'>
		
				<span class='header_title_sml'><?php the_field( 'header_left_sub_title','option'); ?></span><!-- header_title_sml -->

				<span class='header_title_lrg'><?php the_field( 'header_left_large_title','option'); ?></span><!-- header_title_sml -->

			</div><!-- header_title_wrapper -->
		
		</div><!-- header_left -->

		<div id='header_middle'>
		
			<a id="logo" href="<?php bloginfo('url');?>">

			<?php $logo = get_field( 'logo','option'); ?>
			
			<?php if ( $logo ) { ?>
				
				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
			
			<?php } ?>

			</a><!-- logo -->
		
		</div><!-- header_middle -->

		<div id='header_right'>
			
			<div class='header_title_wrapper'>
			
				<span class='header_title_sml'><?php the_field( 'header_right_sub_title','option'); ?></span><!-- header_title_sml -->

				<span class='header_title_lrg'><?php the_field( 'header_right_large_title','option'); ?></span><!-- header_title_sml -->
			
			</div><!-- header_title_wrapper -->

			<nav><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?></nav>
			
			<div id='menu_wrapper'>
			
				<span></span>
				<span></span>
				<span></span>
			
			</div><!-- menu_wrapper -->

		</div><!-- header_right -->
	
	</div><!-- header_inner -->		



</header>