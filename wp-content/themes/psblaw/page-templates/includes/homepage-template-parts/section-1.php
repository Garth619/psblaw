<section id='section-one'>

  <div id='sec-one-content'>

    <div id='sec-one-content-inner'>
  
      <span id='sec-one-subtitle'><?php the_field( 'section_one_subtitle' ); ?></span><!-- sec-one-subtitle -->

      <span id='sec-one-title'><?php the_field( 'section_one_title' ); ?></span><!-- sec-one-title -->

      <span id='sec-one-descrip'><?php the_field( 'section_one_description' ); ?></span><!-- sec-one-descrip -->

      <a class='button free-consult-button'><?php the_field( 'free_consultation_verbiage' ); ?></a><!-- button -->
  
  </div><!-- sec-one-content-inner -->

  <div id='hero-slider'>
  
    <div class='hero-slide'>

      <div class='hero-slide-inner'>
      
        <picture>

          <!-- <source media='(min-width: 1170px)' data-srcset='' type='image/webp'> -->

          <source media='(min-width: 1380px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-image-la-1920.jpg'>

          <source media='(min-width: 1170px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-image-la-1400.jpg'>

          <source media='(min-width: 768px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-image-la-tablet.jpg'>

          <img class='hero' src='<?php bloginfo('template_directory'); ?>/images/hero-image-la-mobile.jpg' alt='' />

        </picture>

      </div><!-- hero-slide-inner -->

    </div><!-- hero-slide -->

    <div class='hero-slide'>

      <div class='hero-slide-inner'>
    
        <picture>

          <!-- <source media='(min-width: 1170px)' data-srcset='' type='image/webp'> -->

          <source media='(min-width: 1380px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-image-oc-1920.jpg'>

          <source media='(min-width: 1170px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-image-oc-1400.jpg'>

          <source media='(min-width: 768px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-image-oc-tablet.jpg'>

          <img class='hero' src='<?php bloginfo('template_directory'); ?>/images/hero-image-oc-mobile.jpg' alt='' />

        </picture>

      </div><!-- hero-slide-inner -->

    </div><!-- hero-slide -->

    <div class='hero-slide'>

      <div class='hero-slide-inner'>
      
        <picture>

          <!-- <source media='(min-width: 1170px)' data-srcset='' type='image/webp'> -->

          <source media='(min-width: 1380px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-image-sd-1920.jpg'>

          <source media='(min-width: 1170px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-image-sd-1400.jpg'>

          <source media='(min-width: 768px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-image-sd-tablet.jpg'>

          <img class='hero' src='<?php bloginfo('template_directory'); ?>/images/hero-image-sd-mobile.jpg' alt='' />

        </picture>

      </div><!-- hero-slide-inner -->

    </div><!-- hero-slide -->

    <div class='hero-slide'>

      <div class='hero-slide-inner'>
      
        <picture>

          <!-- <source media='(min-width: 1170px)' data-srcset='' type='image/webp'> -->

          <source media='(min-width: 1380px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-image-sf-1920.jpg'>

          <source media='(min-width: 1170px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-image-sf-1400.jpg'>

          <source media='(min-width: 768px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-image-sf-tablet.jpg'>

          <img class='hero' src='<?php bloginfo('template_directory'); ?>/images/hero-image-sf-mobile.jpg' alt='' />

        </picture>

      </div><!-- hero-slide-inner -->

    </div><!-- hero-slide -->

  </div><!-- hero-slider -->

</div><!-- sec-one-content -->

<div id='sec-one-cr-wrapper' class="preload-section">

  <div id='sec-one-slider-wrapper'>
  
    <div id='sec-one-slider' class="preload-slider">

    <?php if ( have_rows( 'section_one_case_results_slider' ) ) : ?>
	    
      <?php while ( have_rows( 'section_one_case_results_slider' ) ) : the_row(); ?>

        <div class='sec-one-slide'>

          <a href="<?php the_sub_field( 'link' ); ?>">

            <div class='sec-one-slide-inner'>
 
              <span class='sec-one-subtitle'><?php the_sub_field( 'title' ); ?></span><!-- sec-one-subtitle -->

              <span class='sec-one-title'><?php the_sub_field( 'amount' ); ?></span><!-- sec-one-title -->

              <span class='sec-one-descrip'><?php the_sub_field( 'description' ); ?></span><!-- sec-one-descrip -->

            </div><!-- sec-one-slide-inner -->

          </a>

        </div><!-- sec-one-slide -->
		
	    <?php endwhile; ?>

    <?php endif; ?>
    
    </div><!-- sec-one-slider -->

  </div><!-- sec-one-slider-wrapper -->

  <div class='sec-one-arrow sec-one-arrow-left'>
  
    <?php echo file_get_contents( get_template_directory() . '/images/arrow-left.svg' ); ?>
  
  </div><!-- sec-one-arrow sec-one-arrow-left -->

  <div class='sec-one-arrow sec-one-arrow-right'>
  
    <?php echo file_get_contents( get_template_directory() . '/images/arrow-right.svg' ); ?>
  
  </div><!-- sec-one-arrow sec-one-arrow-right -->
  

</div><!-- sec-one-cr-wrapper -->

<div style="clear:both"></div>

</section><!-- section-one -->