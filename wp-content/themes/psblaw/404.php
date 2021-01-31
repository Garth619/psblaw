<?php get_header();?>

<div id="internal-main">

  <div id='page-descrip-wrapper'>

    <h1 class="page-title page-large-content-title"><?php the_field('not_found_title', 'option');?></h1>

  </div>

  <div id="page-container" class="two-col no-banner-layout">

    <div class="page-content">

      <div class='page-content-inner content'>

        <?php the_field('not_found_content', 'option');?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar();

}?>

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>