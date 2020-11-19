<section id='section-three'>

  <div id='sec-three-inner'>

    <div id='sec-three-header-wrapper'>

      <span id='sec-three-subtitle'><?php the_field('section_three_subtitle');?></span><!-- sec-three-subtitle -->

      <h1 id='sec-three-header'><?php the_field('section_three_title');?></h1><!-- sec-three-header -->

    </div><!-- sec-three-header-wrapper -->

    <div id='sec-three-content'>

      <div class='sec-three-col content'>

        <?php if (get_field('section_three_wistia_id')) {?>

        <div id='sec-three-video-wrapper'>

          <div id='sec-three-video-thumbnail'>

            <?php $section_three_video_image = get_field('section_three_video_image');?>

            <?php if ($section_three_video_image) {?>

            <img class="lazyload" data-src="<?php echo $section_three_video_image['url']; ?>"
              alt="<?php echo $section_three_video_image['alt']; ?>" />

            <?php }?>

            <div id="mywistia"
              class='wistia_embed wistia_async_<?php the_field('section_three_wistia_id');?> popover=true popoverContent=html'>
            </div><!-- mywistia -->

            <div id='sec-three-video-overlay'>

              <div class='play-button'></div><!-- play-button -->

            </div><!-- sec-three-video-overlay -->

          </div><!-- sec-three-video-thumbnail -->

          <span id='sec-three-video-descrip'><?php the_field('section_three_video_description');?></span>
          <!-- sec-three-video-descrip -->

        </div><!-- sec-three-video-wrapper -->

        <?php }?>

        <?php if (get_field('section_three_intro')) {?>

        <div id='sec-three-intro'>

          <?php the_field('section_three_intro');?>

        </div><!-- sec-three-intro -->

        <?php }?>

        <?php the_field('section_three_content');?>

      </div><!-- sec-three-col -->

      <div class='sec-three-col preload-section'>

        <div id='sec-three-slider' class="preload-slider">

          <?php if (have_rows('section_three_awards')): ?>

          <?php while (have_rows('section_three_awards')): the_row();?>

          <div class='sec-three-slide'>

            <img class='sec-three-desktop-img lazyload'
              data-src='<?php bloginfo('template_directory');?>/images/awards-bestlawfirms.jpg' alt='' />

            <span class='sec-three-slide-title'><?php the_sub_field('title');?></span><!-- sec-three-slide-title -->

            <span class='sec-three-descrip'><?php the_sub_field('description');?></span><!-- sec-three-descrip -->

            <div class='sec-three-extended-descrip'>

              <div class="sec-three-mobile-img-wrapper">

                <?php $img = get_sub_field('img');?>

                <?php if ($img) {?>

                <img class='sec-three-mobile-img lazyload' data-src="<?php echo $img['url']; ?>"
                  alt="<?php echo $img['alt']; ?>" />

                <?php }?>

              </div><!-- sec-three-mobile-img-wrapper -->

              <div class='sec-three-extended-content'>

                <?php the_sub_field('content');?>

                <a class='button sec-three-button'
                  href='<?php the_sub_field('learn_more_button_link');?>'><?php the_sub_field('learn_more_button_verbiage');?></a>
                <!-- button sec-three-button -->

              </div><!-- sec-three-extended-content -->

            </div><!-- sec-three-extended-descrip -->

          </div><!-- sec-three-slide -->

          <?php endwhile;?>

          <?php endif;?>

        </div><!-- sec-three-slider -->

        <div id='sec-three-arrow-wrapper'>

          <div class='sec-arrow-three sec-three-arrow-left'>

            <?php echo file_get_contents(get_template_directory() . '/images/arrow-left.svg'); ?>

          </div><!-- sec-arrow-three -->

          <div class='sec-arrow-three sec-three-arrow-right'>

            <?php echo file_get_contents(get_template_directory() . '/images/arrow-right.svg'); ?>

          </div><!-- sec-arrow-three -->

        </div><!-- sec-three-arrow-wrapper -->

      </div><!-- sec-three-col -->

    </div><!-- sec-three-content -->

  </div><!-- sec-three-inner -->

</section><!-- section-three -->