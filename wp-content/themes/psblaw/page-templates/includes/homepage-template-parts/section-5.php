<section id='section_five'>

	<div id='sec_five_inner'>
	
		<div id='sec_five_left'>
		
			<div id='sec_five_image_wrapper'>

				<picture>

					<?php $section_five_image_desktop = get_field( 'section_five_image_desktop' ); ?>
					
					<?php if ( $section_five_image_desktop ) { ?>

						<source media='(min-width: 1380px)' data-srcset='<?php echo $section_five_image_desktop['url']; ?>'>

					<?php } ?>

					<?php $section_five_image_laptop = get_field( 'section_five_image_laptop' ); ?>

					<?php if ( $section_five_image_laptop ) { ?>

						<source media='(min-width: 1170px)' data-srcset='<?php echo $section_five_image_laptop['url']; ?>'>

					<?php } ?>

					<?php $section_five_image_mobile = get_field( 'section_five_image_mobile' ); ?>

					<img class="lazyload" data-src='<?php echo $section_five_image_mobile['url']; ?>' /><!-- name -->

				</picture>
			
			</div><!-- sec_five_image_wrapper -->

			<div id='sec_five_left_content'>
			
				<span style="display:none" class="double_line"></span>

				<span id='sec_five_intro'><?php the_field( 'section_five_quote' ); ?></span><!-- sec_five_intro -->

				<a class='button_two' href='<?php the_field( 'section_five_page_link' ); ?>'><?php the_field( 'section_five_button_verbiage' ); ?></a><!-- button_two -->

			</div><!-- sec_five_left_content -->
		
		</div><!-- sec_five_left -->

		<div id='sec_five_right' class="content">
		
			<?php the_field( 'section_five_content' ); ?>
		
		</div><!-- sec_five_right -->
	
	</div><!-- sec_five_inner -->

</section><!-- section_five -->