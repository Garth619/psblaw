<?php

/* Template Name: Community Sponsorship */

get_header();?>

<div id="internal-main">

  <div class='page-title-wrapper'>

    <h1 class="page-title page-large-content-title"><?php the_title();?></h1>

  </div><!-- page-title-wrapper -->

  <?php if (get_field('community_description')) {?>

  <div id='page-descrip-wrapper'>

    <?php if (get_field('community_subtitle')) {?>

    <span id='page-subtitle'><?php the_field('community_subtitle');?></span><!-- page-subtitle -->

    <?php }?>

    <?php the_field('community_description');?>

  </div><!-- page-descrip-wrapper -->

  <?php }?>

  <div id="page-container">

    <div id='community-wrapper'>

      <?php if (have_rows('community_logos')): ?>

      <?php while (have_rows('community_logos')): the_row();?>

      <div class='single-community'>

        <a <?php if (get_sub_field('website_url')) {?>href="<?php the_sub_field('website_url');?>" <?php }
    ;?> target="_blank" rel="noopener">

          <div class='single-community-box'>

            <?php $logo = get_sub_field('logo');?>

            <?php if ($logo) {?>

            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />

            <?php }?>

          </div><!-- single-community-box -->

          <span class='single-community-title'><?php the_sub_field('title');?></span><!-- single-community-title -->

        </a>

      </div><!-- single-community -->

      <?php endwhile;?>

      <?php endif;?>

    </div><!-- community-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>