<?php

/* Template Name: Testimonials */

get_header();?>

<div id="internal-main">

  <div class='page-title-wrapper'>

    <h1 class="page-title page-large-content-title"><?php the_title();?></h1>

  </div><!-- page-title-wrapper -->

  <?php if (get_field('testimonials_page_description')) {?>

  <div id='page-descrip-wrapper'>

    <?php the_field('testimonials_page_description');?>

  </div><!-- page-descrip-wrapper -->

  <?php

    // this button needs to be coded further to open a form or something if needed

    if (get_field('testimonials_button_verbiage')) {?>
  <a class='button testi-button' href=''><?php the_field('testimonials_button_verbiage');?></a>
  <!-- button testi-button -->

  <?php }?>

  <?php }?>

  <div id="page-container">

    <div id='testi-slide-wrapper' class="preload-section">

      <div class='testi-arrow testi-arrow-left'>

        <?php echo file_get_contents(get_template_directory() . '/images/arrow-left.svg'); ?>

      </div><!-- testi-arrow testi-arrow-left -->

      <?php if (have_rows('testimonial_videos')): ?>

      <div id='testi-slider' class="preload-slider">

        <?php while (have_rows('testimonial_videos')): the_row();?>

        <div class='testi-slide'>

          <div class='single-video'>

            <div class='video-thumb'>

              <div
                class='mywisita wistia_embed wistia_async_<?php the_sub_field('wistia_id');?> popover=true popoverContent=thumbnail'>
              </div><!-- wistia -->

              <div class='video-overlay'>

                <div class='play-button'></div><!-- play-button -->

              </div><!-- video-overlay -->

            </div><!-- video-thumb -->

            <div class='video-title-wrapper'>

              <img id='video-stars' src='<?php bloginfo('template_directory');?>/images/test-stars-large.svg' alt='' />

              <span class='video-title'><?php the_sub_field('title');?></span><!-- video-title -->

            </div><!-- video-title-wrapper -->

          </div><!-- single-video -->

        </div><!-- testi-slide -->

        <?php endwhile;?>

      </div><!-- testi-slider -->

      <?php endif;?>

      <div class='testi-arrow testi-arrow-right'>

        <?php echo file_get_contents(get_template_directory() . '/images/arrow-right.svg'); ?>

      </div><!-- testi-arrow testi-arrow-right -->

    </div><!-- testi-slide-wrapper -->

    <?php if (have_rows('testi_page')): ?>

    <div id='testi-wrapper'>

      <?php while (have_rows('testi_page')): the_row();?>

      <div class='single-testi'>

        <img src='<?php bloginfo('template_directory');?>/images/test-stars-large.svg' alt='' />

        <span class='single-testi-title'><?php the_sub_field('title');?></span><!-- single-testi-title -->

        <div class='single-test-descrip content'>

          <?php the_sub_field('description');?>

        </div><!-- single-test-descrip  -->

        <span class='single-testi-name'><?php the_sub_field('name');?></span><!-- class -->

        <?php if (get_sub_field('description_two')) {?>

        <div class='single-testi-descrip-two content'>

          <?php the_sub_field('description_two');?>

        </div><!-- single-testi-descrip-two -->

        <?php }?>

      </div><!-- single-testi -->

      <?php endwhile;?>

    </div><!-- testi-wrapper -->

    <?php endif;?>

  </div><!-- page-container -->

</div><!-- internal-main -->

<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

<?php get_footer();?>