<?php get_header();?>

<div id="internal-main">

  <?php get_template_part('page-templates/includes/template', 'default-page-banner');?>

  <div id="page-container" class="two-col default-banner-layout">

    <div class="page-content">

      <div class='page-content-inner'>

        <?php get_template_part('loop', 'index');?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar('blog');

}?>

  </div><!-- page-container -->


</div><!-- internal-main -->


<?php get_footer();?>