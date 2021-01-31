<?php

/* Template Name: About */

get_header();?>

<div id="internal-main">

  <div class='page-title-wrapper'>

    <h1 class="page-title page-large-content-title page-about-title"><?php the_field('top_title');?></h1>

  </div><!-- page-title-wrapper -->

  <div id='about-top'>


    <?php if (get_field('top_description')) {?>

    <div id='page-descrip-wrapper'>

      <span id='page-subtitle'><?php the_field('top_subtitle');?></span><!-- about-top-subtitle -->

      <?php if (get_field('top_description')) {?>

      <div id='page-descrip'>

        <?php the_field('top_description');?>

      </div><!-- page-descrip -->

      <?php }?>

    </div><!-- page-descrip-wrapper -->

    <?php }?>

    <div id='about-content' class="content">

      <div class='about-col'>

        <?php the_field('top_content');?>

      </div><!-- about-col -->

      <div class='about-col'>

        <?php $top_image = get_field('top_image');?>

        <?php if ($top_image) {?>

        <div id='about-img-wrapper'>

          <div id='about-img'>

            <img src="<?php echo $top_image['url']; ?>" alt="<?php echo $top_image['alt']; ?>" />

          </div><!-- about-img -->

        </div><!-- about-img-wrapper -->

        <?php }?>

        <?php the_field('top_content_two');?>

      </div><!-- about-col -->

    </div><!-- about-content -->

  </div><!-- about-top -->

  <div id='about-middle'>

    <span id='about-middle-title'><?php the_field('middle_title');?></span><!-- about-middle-title -->

    <div id='about-middle-col-wrapper'>

      <div class='about-middle-col'>

        <?php if (have_rows('about_attorneys')): ?>

        <?php while (have_rows('about_attorneys')): the_row();?>

        <?php $post_object = get_sub_field('about_attorney');?>

        <?php if ($post_object): ?>

        <?php $post = $post_object;?>
        <?php setup_postdata($post);?>

        <div class='about-middle-att'>

          <?php $attorney_profile = get_field('attorney_profile');?>

          <?php if ($attorney_profile) {?>

          <img src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />

          <?php }?>

          <span class='about-middle-att-title'><?php the_title();?></span><!-- about-middle-att-title -->

          <div class='about-middle-att-content content'>

            <?php the_sub_field('excerpt');?>

            <div class='additional-content'>

              <?php the_sub_field('content');?>

            </div><!-- additional-content -->

          </div><!-- about-middle-att-content -->

          <a class='button-three about-read-more'>Read More</a><!-- button-two -->

        </div><!-- about-middle-att -->

        <?php wp_reset_postdata();?>

        <?php endif;?>

        <?php endwhile;?>

        <?php endif;?>

      </div><!-- about-middle-col -->

      <div class='about-middle-col'>

        <?php if (have_rows('about_attorneys_two')): ?>

        <?php while (have_rows('about_attorneys_two')): the_row();?>

        <?php $post_object = get_sub_field('about_attorney');?>

        <?php if ($post_object): ?>

        <?php $post = $post_object;?>
        <?php setup_postdata($post);?>

        <div class='about-middle-att'>

          <?php $attorney_profile = get_field('attorney_profile');?>

          <?php if ($attorney_profile) {?>

          <img src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />

          <?php }?>

          <span class='about-middle-att-title'><?php the_title();?></span><!-- about-middle-att-title -->

          <div class='about-middle-att-content content'>

            <?php the_sub_field('excerpt');?>

            <div class='additional-content'>

              <?php the_sub_field('content');?>

            </div><!-- additional-content -->

          </div><!-- about-middle-att-content -->

          <a class='button-three about-read-more'>Read More</a><!-- button-two -->

        </div><!-- about-middle-att -->

        <?php wp_reset_postdata();?>

        <?php endif;?>

        <?php endwhile;?>

        <?php endif;?>

      </div><!-- about-middle-col -->

    </div><!-- about-middle-col-wrapper -->

  </div><!-- about-middle -->

  <div id='about-bottom'>

    <div class='page-title-wrapper'>

      <span class="page-title page-large-content-title page-about-title"><?php the_field('bottom_title');?></span>

    </div>

    <?php if (get_field('bottom_description')) {?>

    <div id='page-descrip-wrapper'>

      <div id='page-descrip'>

        <?php the_field('bottom_description');?>

      </div><!-- page-descrip -->

    </div><!-- page-descrip-wrapper -->

    <?php }?>

    <div id='about-bottom-content' class="content">

      <?php the_field('bottom_content');?>

    </div><!-- about-bottom-content  class="content"-->

  </div><!-- about-bottom -->

</div><!-- internal-main -->

<?php get_footer();?>