<section id='section-one'>

  <div id='sec-one-content'>

    <div id='sec-one-content-inner'>

      <span id='sec-one-subtitle'><?php the_field('section_one_subtitle');?></span><!-- sec-one-subtitle -->

      <span id='sec-one-title'><?php the_field('section_one_title');?></span><!-- sec-one-title -->

      <span id='sec-one-descrip'><?php the_field('section_one_description');?></span><!-- sec-one-descrip -->

      <a class='button free-consult-button'><?php the_field('free_consultation_verbiage');?></a><!-- button -->

    </div><!-- sec-one-content-inner -->

    <?php if (have_rows('section_one_hero_slider')): ?>

    <div id='hero-slider' class="preload-slider">

      <?php while (have_rows('section_one_hero_slider')): the_row();?>

      <div class='hero-slide'>

        <div class='hero-slide-inner'>

          <picture>

            <?php $small_monitor_image = get_sub_field('small_monitor_image');?>
            <?php if ($small_monitor_image) {?>
            <source media='(min-width: 1380px)' data-srcset='<?php echo $small_monitor_image['url']; ?>'>
            <?php }?>

            <?php $laptop_image = get_sub_field('laptop_image');?>
            <?php if ($laptop_image) {?>
            <source media='(min-width: 1170px)' data-srcset='<?php echo $laptop_image['url']; ?>'>
            <?php }?>

            <?php $tablet_image = get_sub_field('tablet_image');?>
            <?php if ($tablet_image) {?>
            <source media='(min-width: 768px)' data-srcset='<?php echo $tablet_image['url']; ?>'>
            <?php }?>

            <source media='(min-width: 768px)' data-srcset='<?php echo $tablet_image['url']; ?>'>

            <?php $mobile_image = get_sub_field('mobile_image');?>

            <img class="hero lazyload" data-src="<?php echo $mobile_image['url']; ?>"
              alt="<?php echo $mobile_image['alt']; ?>" />

          </picture>


        </div><!-- hero-slide-inner -->

      </div><!-- hero-slide -->

      <?php endwhile;?>

    </div><!-- hero-slider -->

    <?php endif;?>

  </div><!-- sec-one-content -->

  <div id='sec-one-cr-wrapper' class="preload-section">

    <div id='sec-one-slider-wrapper'>

      <div id='sec-one-slider' class="preload-slider">

        <?php if (have_rows('section_one_case_results_slider')): ?>

        <?php while (have_rows('section_one_case_results_slider')): the_row();?>

        <div class='sec-one-slide'>

          <a href="<?php the_sub_field('link');?>">

            <div class='sec-one-slide-inner'>

              <span class='sec-one-subtitle'><?php the_sub_field('title');?></span><!-- sec-one-subtitle -->

              <span class='sec-one-title'><?php the_sub_field('amount');?></span><!-- sec-one-title -->

              <span class='sec-one-descrip'><?php echo wp_trim_words(get_sub_field('description'), 20, '...'); ?></span>
              <!-- sec-one-descrip -->



            </div><!-- sec-one-slide-inner -->

          </a>

        </div><!-- sec-one-slide -->

        <?php endwhile;?>

        <?php endif;?>

      </div><!-- sec-one-slider -->

    </div><!-- sec-one-slider-wrapper -->

    <div class='sec-one-arrow sec-one-arrow-left'>

      <?php echo file_get_contents(get_template_directory() . '/images/arrow-left.svg'); ?>

    </div><!-- sec-one-arrow sec-one-arrow-left -->

    <div class='sec-one-arrow sec-one-arrow-right'>

      <?php echo file_get_contents(get_template_directory() . '/images/arrow-right.svg'); ?>

    </div><!-- sec-one-arrow sec-one-arrow-right -->

  </div><!-- sec-one-cr-wrapper -->

  <div style="clear:both"></div>

</section><!-- section-one -->