<section id='section-two'>

	<div id='sec-two-inner' class="">

		<div id='sec-two-left'>

			<div id='psb-playbook-wrapper'>

				<?php $section_two_info_image = get_field( 'section_two_info_image' ); ?>
				
				<?php if ( $section_two_info_image ) { ?>
					
					<img id='psb-playbook' src="<?php echo $section_two_info_image['url']; ?>" alt="<?php echo $section_two_info_image['alt']; ?>" />
				
				<?php } ?>

				<?php if ( get_field( 'section_two_info_title' ) ) { ?>
			
					<span id='sec-two-left-title'><?php the_field( 'section_two_info_title' ); ?></span><!-- sec-two-left-title -->

				<?php } ?>

				<?php if ( get_field( 'section_two_info_description' ) ) { ?>

					<span id='sec-two-descrip'><?php the_field( 'section_two_info_description' ); ?></span><!-- sec-two-descrip -->

				<?php } ?>

				<?php if ( get_field( 'section_two_info_button_link' ) ) { ?>

					<a class='button sec-two-button' href='<?php the_field( 'section_two_info_button_link' ); ?>'><?php the_field( 'section_two_info_button_verbiage' ); ?></a><!-- class -->

				<?php } ?>

			</div><!-- psb-playbook-wrapper -->
		
		</div><!-- sec-two-left -->

		<div id='sec-two-right'>
		
			<span id='sec-two-title'>Breaking News And Current Cases</span><!-- sec-two-title -->

			<div id='sec-two-slide-wrapper' class="preload-section">
			
				<div id='sec-two-slider' class="preload-slider">
			
					<div class='sec-two-slide'>

					<a href="">
					
						<div class='sec-two-image-wrapper'>
						
							<img class='sec-two-image' src='<?php bloginfo('template_directory');?>/images/featurednews-1.jpg' alt=''/>
						
						</div><!-- sec-two-image-wrapper -->

						<span class='sec-two-slide-cat'>Featured News</span><!-- sec-two-slide-cat -->

						<span class='sec-two-slide-title'>$800 Million Settlement Reached with MGM for Route 91 Las Vegas Shooting Victims</span><!-- sec-two-slide-title -->

						<span class='sec-two-slide-date'>October 3, 2019</span><!-- sec-two-slide-date -->

						</a>
					
					</div><!-- sec-two-slide -->

					<div class='sec-two-slide'>

						<a href="">
					
						<div class='sec-two-image-wrapper'>
						
							<img class='sec-two-image' src='<?php bloginfo('template_directory');?>/images/featurednews-2.jpg' alt=''/>
						
						</div><!-- sec-two-image-wrapper -->

						<span class='sec-two-slide-cat'>Featured News</span><!-- sec-two-slide-cat -->

						<span class='sec-two-slide-title'>Rahul Ravipudi Appointed Public Entity Co-Lead Counsel in JUUL Labs Product Cases</span><!-- sec-two-slide-title -->

						<span class='sec-two-slide-date'>October 3, 2019</span><!-- sec-two-slide-date -->

						</a>
					
					</div><!-- sec-two-slide -->

					<div class='sec-two-slide'>

						<a href="">
					
						<div class='sec-two-image-wrapper'>
						
							<img class='sec-two-image' src='<?php bloginfo('template_directory');?>/images/featurednews-2.jpg' alt=''/>
						
						</div><!-- sec-two-image-wrapper -->

						<span class='sec-two-slide-cat'>Featured News</span><!-- sec-two-slide-cat -->

						<span class='sec-two-slide-title'>Rahul Ravipudi Appointed Public Entity Co-Lead Counsel in JUUL Labs Product Cases</span><!-- sec-two-slide-title -->

						<span class='sec-two-slide-date'>October 3, 2019</span><!-- sec-two-slide-date -->

						</a>
					
					</div><!-- sec-two-slide -->

					<div class='sec-two-slide'>

						<a href="">
					
						<div class='sec-two-image-wrapper'>
						
							<img class='sec-two-image' src='<?php bloginfo('template_directory');?>/images/featurednews-2.jpg' alt=''/>
						
						</div><!-- sec-two-image-wrapper -->

						<span class='sec-two-slide-cat'>Featured News</span><!-- sec-two-slide-cat -->

						<span class='sec-two-slide-title'>Rahul Ravipudi Appointed Public Entity Co-Lead Counsel in JUUL Labs Product Cases</span><!-- sec-two-slide-title -->

						<span class='sec-two-slide-date'>October 3, 2019</span><!-- sec-two-slide-date -->

						</a>
					
					</div><!-- sec-two-slide -->

					<div class='sec-two-slide'>

						<a href="">
					
						<div class='sec-two-image-wrapper'>
						
							<img class='sec-two-image' src='<?php bloginfo('template_directory');?>/images/featurednews-2.jpg' alt=''/>
						
						</div><!-- sec-two-image-wrapper -->

						<span class='sec-two-slide-cat'>Featured News</span><!-- sec-two-slide-cat -->

						<span class='sec-two-slide-title'>Rahul Ravipudi Appointed Public Entity Co-Lead Counsel in JUUL Labs Product Cases</span><!-- sec-two-slide-title -->

						<span class='sec-two-slide-date'>October 3, 2019</span><!-- sec-two-slide-date -->

						</a>
					
					</div><!-- sec-two-slide -->

					
				</div><!-- sec-two-slider -->

				<div class='sec-two-arrow sec-two-arrow-left'>
				
					<?php echo file_get_contents( get_template_directory() . '/images/arrow-left.svg' ); ?>
				
				</div><!-- sec-two-arrow sec-two-arrow-left -->

				<div class='sec-two-arrow sec-two-arrow-right'>
				
					<?php echo file_get_contents( get_template_directory() . '/images/arrow-right.svg' ); ?>
				
				</div><!-- sec-two-arrow sec-two-arrow-right -->

				<div style="clear:both"></div>

			</div><!-- sec-two-slide-wrapper -->

		</div><!-- sec-two-right -->
	
	</div><!-- sec-two-inner -->

</section><!-- section-two -->