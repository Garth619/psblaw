<?php get_header();?>

<div id="internal-main">

  <div class='page-title-wrapper'>

    <h1 class="page-title page-large-content-title"><?php the_title();?></h1>

    <span class='button-two case-results-read-more return-to-results go-back'>Return to Results</span>

  </div><!-- page-title-wrapper -->

  <div id="page-container" class="two-col no-banner-layout">

    <div class="page-content">

      <div class='page-content-inner content'>

        <?php if (get_field('case_results_featured_video_wistia_id') || get_field('featured_on_info')) {?>

        <div class='featured-on-wrapper'>

          <span class='featured-one'><?php the_field('featured_on_title');?></span><!-- featured-one -->

          <div class='featured-on-inner'>

            <?php if (get_field('case_results_featured_video_wistia_id')) {?>

            <div class='featured-on-video'>

              <div class='single-video'>

                <div class='video-thumb'>

                  <div
                    class='mywisita wistia_embed wistia_async_<?php the_field('case_results_featured_video_wistia_id');?> popover=true popoverContent=thumbnail'>
                  </div><!-- wistia -->

                  <div class='video-overlay'>

                    <div class='play-button'></div><!-- play-button -->

                  </div><!-- video-overlay -->

                </div><!-- video-thumb -->

              </div><!-- single-video -->

              <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

            </div><!-- featured-on-video -->

            <?php }?>

            <?php if (have_rows('featured_on_info')): ?>

            <div class='featured-content'>

              <?php while (have_rows('featured_on_info')): the_row();?>

              <div class='featured-row'>

                <h2 class='featured-row-title'><?php the_sub_field('title');?></h2><!-- featured-row-title -->

                <?php the_sub_field('content');?>

              </div><!-- featured-row -->

              <?php endwhile;?>

            </div><!-- featured-content -->

            <?php endif;?>

          </div><!-- featured-on-inner -->

        </div><!-- featured-on-wrapper -->

        <?php }?>

        <?php if (get_field('case_synopsis') || get_field('case_synopsis_content')) {?>

        <div class='case-synopsis-wrapper'>

          <h2><?php the_field('case_synopsis');?></h2>

          <?php the_field('case_synopsis_content');?>

        </div><!-- case-synopsis-wrapper -->

        <?php }?>

        <?php if (have_rows('case_articles')): ?>

        <div class='case-articles'>

          <h2><?php the_field('case_articles_title');?></h2>



          <?php while (have_rows('case_articles')): the_row();?>

          <div class='case-article-row'>

            <?php $image = get_sub_field('image');?>

            <?php if ($image) {?>

            <img class='case-article-image' src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php }?>

            <?php if (have_rows('article')): ?>

            <?php while (have_rows('article')): the_row();?>

            <a class='case-article-link' href='<?php the_sub_field('link');?>'> <?php the_sub_field('title');?></a>
            <!-- case-article-link -->

            <?php the_sub_field('description');?>

            <?php endwhile;?>

            <?php endif;?>

          </div><!-- case-article-row -->

          <?php endwhile;?>

        </div><!-- case-articles -->

        <?php endif;?>

        <?php if (have_rows('other_publications')): ?>

        <div class='other-publications'>

          <h2><?php the_field('other_publications_title');?></h2>


          <?php while (have_rows('other_publications')): the_row();?>

          <a class='case-article-link' href='<?php the_sub_field('link');?>'><?php the_sub_field('title');?></a>
          <!-- case-article-link -->

          <?php the_sub_field('description');?>

          <?php endwhile;?>

        </div><!-- other-publications -->

        <?php endif;?>

        <?php if (get_the_content()) {

    the_content();

}?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar('case-results');

}?>

  </div><!-- page-container -->

</div><!-- internal-main -->


<?php get_footer();?>