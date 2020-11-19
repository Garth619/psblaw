<?php

/* Template Name: Video Center */

get_header();?>

<div id="internal-main">

  <div class='page-title-wrapper'>

    <h1 class="page-title page-large-content-title"><?php the_title();?></h1>

  </div><!-- page-title-wrapper -->

  <div id="page-container">

    <div id='video-center-wrapper'>

      <?php if (have_rows('video_center')): ?>

      <?php while (have_rows('video_center')): the_row();?>

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

          <span class='video-title'><?php the_sub_field('video_title');?></span><!-- video-title -->

        </div><!-- video-title-wrapper -->

      </div><!-- single-video -->

      <?php endwhile;?>

      <?php endif;?>


    </div><!-- video-center-wrapper -->

    <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>