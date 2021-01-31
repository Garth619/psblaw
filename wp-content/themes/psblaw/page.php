<?php get_header();?>

<div id="internal-main">

  <?php get_template_part('page-templates/includes/template', 'default-page-banner');?>

  <?php if (get_field('disable_banner_new')) {?>

  <div id='page-descrip-wrapper'>

    <h1 class="page-title page-large-content-title"><?php the_title();?></h1>

  </div>

  <?php }?>

  <?php // banner/no banner on internal pages
if (basename(get_page_template()) === 'page.php') {
    if (get_field('disable_banner_new') == 'Yes') {
        $banner = ' no-banner-layout';
    } else {
        $banner = ' default-banner-layout';
    }
}?>

  <div id="page-container" class="two-col <?php echo $banner; ?>">

    <div class="page-content">

      <div class='page-title-wrapper'>

        <?php if (!get_field('disable_banner_new')): ?>

        <?php if (get_field('banner_h1') == "Yes"): ?>

        <h2 class="page-title"><?php the_title();?></h2>

        <?php else: ?>

        <h1 class="page-title"><?php the_title();?></h1>

        <?php endif;?>

        <?php endif;?>

      </div><!-- page-title-wrapper -->

      <div class='page-content-inner content'>

        <?php get_template_part('loop', 'page');?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar();

}?>

  </div><!-- page-container -->


</div><!-- internal-main -->


<?php get_footer();?>