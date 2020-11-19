<section id='section-four'>

  <div id='sec-four-inner'>

    <span id='sec-four-subtitle'><?php the_field('section_four_subtitle');?></span><!-- sec-four-subtitle -->

    <span id='sec-four-title'><?php the_field('section_four_title');?></span><!-- sec-four-title -->

    <div id='sec-four-descrip' class="content">

      <?php the_field('section_four_description');?>

    </div><!-- sec-four-descrip -->

    <div id='sec-four-slider-wrapper' class="preload-section">

      <div class='sec-four-arrow sec-four-arrow-left'>

        <?php echo file_get_contents(get_template_directory() . '/images/arrow-left.svg'); ?>

      </div><!-- sec-four-arrow -->

      <div id='sec-four-slider' class="preload-slider">

        <?php if (have_rows('section_four_selling_points')): $i = 0;?>

        <?php while (have_rows('section_four_selling_points')): the_row();
        $i++;?>

        <div class='sec-four-slide'>

          <div class='sec-four-slide-reg'>

            <span class='sec-four-slide-number'><?php if ($i < 10) {echo "0" . $i;} else {echo $i;}?></span>
            <!-- sec-four-slide-number -->

            <div class='sec-four-slide-title-wrapper'>

              <span class='sec-four-slide-title'><?php the_sub_field('title');?></span><!-- sec-four-slide-title -->

            </div><!-- sec-four-slide-title-wrapper -->

            <?php $image = get_sub_field('image');?>

            <?php if ($image) {?>

            <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php }?>

          </div><!-- sec-four-slide-reg -->

          <div class='sec-four-hover-data'>

            <div class='sec-four-hover-data-inner'>

              <span class='sec-four-hover-subtitle'><?php the_sub_field('title');?></span><!-- sec-four-hover-title -->

              <span class='sec-four-hover-title'><?php the_sub_field('overlay_title');?></span>
              <!-- sec-four-hover-title -->

              <div class='sec-four-content'>

                <?php the_sub_field('overlay_description');?>

              </div><!-- sec-four-content -->

            </div><!-- sec-four-data-inner -->

          </div><!-- sec-four-hover-data -->

        </div><!-- sec-four-slide -->

        <?php endwhile;?>

        <?php endif;?>

      </div><!-- sec-four-slider -->

      <div class='sec-four-arrow sec-four-arrow-right'>

        <?php echo file_get_contents(get_template_directory() . '/images/arrow-right.svg'); ?>

      </div><!-- sec-four-arrow -->

    </div><!-- sec-four-slider-wrapper -->

    <div id='sec-four-tablet-arrows-wrapper'>

      <div class='sec-four-tablet-arrow sec-four-tablet-arrow-left'>

        <?php echo file_get_contents(get_template_directory() . '/images/arrow-left.svg'); ?>

        <span>See More</span>

      </div><!-- sec-four-tablet-arrow-left -->

      <span class="sec-four-arrow-divider"></span>

      <div class='sec-four-tablet-arrow sec-four-tablet-arrow-right'>

        <span>See More</span>

        <?php echo file_get_contents(get_template_directory() . '/images/arrow-right.svg'); ?>

      </div><!-- sec-four-tablet-arrow-right -->

    </div><!-- sec-four-tablet-arrows-wrapper -->

    <div class='sec-four-hover-overlay'>

      <div class='sec-four-hover-overlay-inner'>

        <div class='sec-four-overlay-close'>X</div><!-- sec-four-overlay-close -->

        <div class='sec-four-hover-clone'></div><!-- sec-four-hover-clone -->

      </div><!-- sec-four-hover-overlay-inner -->

    </div><!-- sec-four-hover-overlay -->

  </div><!-- sec-four-inner -->

</section><!-- section-four -->