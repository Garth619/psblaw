<?php

/* Template Name: Att Bio */

get_header();?>

<div id="internal-main">

  <div id="page-container" class="two-col">

    <div class="page-content">

      <div class='page-title-wrapper'>

        <h1 class="page-title bio-title"><?php the_title();?></h1>

      </div><!-- bio-title-wrapper -->

      <div class='page-content-inner content'>

        <div id='att-top'>

          <div id='bio-mobile'>

            <?php get_template_part('page-templates/includes/template', 'att-profile-box');?>

          </div><!-- bio-mobile -->

          <div id='att-intro-wrapper'>

            <?php if (get_field('attorney_wistia_id')) {?>

            <div class='single-video'>

              <div class='video-thumb'>

                <div
                  class='mywisita wistia_embed wistia_async_<?php the_field('attorney_wistia_id');?> popover=true popoverContent=thumbnail'>
                </div><!-- wistia -->

                <div class='video-overlay'>

                  <div class='play-button'></div><!-- play-button -->

                </div><!-- video-overlay -->

              </div><!-- video-thumb -->

            </div><!-- single-video -->

            <?php }?>

            <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

            <?php if (get_field('attorney_intro')) {?>

            <div id='att-intro'>

              <?php the_field('attorney_intro');?>

            </div><!-- att-intro -->

            <?php }?>

          </div><!-- att-intro-wrapper -->

        </div><!-- att-top -->

        <?php get_template_part('loop', 'page');?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar('bio');

}?>

  </div><!-- page-container -->

  <?php get_template_part('page-templates/includes/template', 'morenews-slider');?>

</div><!-- internal-main -->


<?php get_footer();?>