<section id='section-six'>

  <div id='sec-six-slider-wrapper' class="preload-section">

    <div class='sec-six-arrow sec-six-arrow-left'>

      <?php echo file_get_contents(get_template_directory() . '/images/arrow-left.svg'); ?>

    </div><!-- sec-six-arrow sec-six-arrow-left -->

    <div id='sec-six-slider-outer'>

      <span id='sec-six-slide-title'><?php the_field('section_six_title');?></span><!-- sec-six-slide-title -->

      <img id='stars' class="lazyload" data-src='<?php bloginfo('template_directory');?>/images/test-stars-large.svg'
        alt='' />

      <div id='sec-six-slider' class="preload-slider">

        <?php if (have_rows('section_six_slider')): ?>

        <?php while (have_rows('section_six_slider')): the_row();?>

        <div class='sec-six-slide'>

          <span class='sec-six-slide-intro'><?php the_sub_field('intro');?></span><!-- sec-six-slide-intro -->

          <span class='sec-six-slide-title'><?php the_sub_field('case_name');?></span><!-- sec-six-slide-title -->

          <span class='sec-six-slide-descrip'><?php the_sub_field('description');?></span><!-- sec-six-slide-descrip -->

        </div><!-- sec-six-slide -->

        <?php endwhile;?>

        <?php endif;?>

      </div><!-- sec-six-slider -->

    </div><!-- sec-six-slider-outer -->

    <div class='sec-six-arrow sec-six-arrow-right'>

      <?php echo file_get_contents(get_template_directory() . '/images/arrow-right.svg'); ?>

    </div><!-- sec-six-arrow sec-six-arrow-right -->

  </div><!-- sec-six-slider-wrapper -->

  <img id='sec-six-hero' class="lazyload" data-src='<?php bloginfo('template_directory');?>/images/test-bg.jpg'
    alt='' />

</section><!-- section-six -->