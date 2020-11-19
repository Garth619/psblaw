<section id='section-ten'>

  <div id='sec-ten-inner'>

    <div id='sec-ten-top'>

      <span id='sec-ten-title'><?php the_field('section_ten_title');?></span><!-- sec-ten-title -->

      <div id='sec-ten-content' class="content">

        <?php the_field('section_ten_content');?>

      </div><!-- sec-ten-content -->

      <?php if (get_field('section_ten_button_verbiage')) {?>

      <a class='button sec-ten-button desktop'
        href='<?php the_field('section_ten_button_link');?>'><?php the_field('section_ten_button_verbiage');?></a>
      <!-- button sec-ten-button -->

      <?php }?>

    </div><!-- sec-ten-top -->

    <div id='sec-ten-bottom'>

      <div id='sec-ten-slide-wrapper' class="preload-section">

        <div class='sec-ten-arrow sec-ten-arrow-left'>

          <div class='sec-ten-arrow-inner'>

            <?php echo file_get_contents(get_template_directory() . '/images/arrow-left.svg'); ?>

          </div><!-- sec-ten-arrow-inner -->

        </div><!-- sec-ten-arrow sec-ten-arrow-left -->

        <div id='sec-ten-slider' class="preload-slider">

          <?php if (have_rows('section_ten_community_logos')): ?>

          <?php while (have_rows('section_ten_community_logos')): the_row();?>

          <div class='sec-ten-slide'>

            <div class='sec-ten-slide-inner'>

              <a <?php if (get_sub_field('link')) {echo 'href="' . get_sub_field('link') . '" target="_blank" rel="noopener"';}
    ;?>>

                <?php $logo = get_sub_field('logo');?>

                <?php if ($logo) {?>

                <img class="lazyload" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />

                <?php }?>

              </a>

            </div><!-- sec-ten-slide-inner -->

          </div><!-- sec-ten-slide -->

          <?php endwhile;?>

          <?php endif;?>

        </div><!-- sec-ten-slider -->

        <div class='sec-ten-arrow sec-ten-arrow-right'>

          <div class='sec-ten-arrow-inner'>

            <?php echo file_get_contents(get_template_directory() . '/images/arrow-right.svg'); ?>

          </div><!-- sec-ten-arrow-inner -->

        </div><!-- sec-ten-arrow sec-ten-arrow-right -->

      </div><!-- sec-ten-slide-wrapper -->

      <a class='button sec-ten-button mobile' href=''>View All</a><!-- button sec-ten-button -->

    </div><!-- sec-ten-bottom -->

  </div><!-- sec-ten-inner -->

</section><!-- section-ten -->