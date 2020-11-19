<?php

/* Template Name: FAQs */

get_header();?>

<div id="internal-main">

  <div class='page-title-wrapper'>

    <h1 class="page-title page-large-content-title"><?php the_title();?></h1>

  </div><!-- page-title-wrapper -->

  <?php if (get_field('faqs_page_description')) {?>

  <div id='page-descrip-wrapper'>

    <?php the_field('faqs_page_description');?>

  </div><!-- page-descrip-wrapper -->

  <?php }?>

  <div id="page-container">

    <div id='faq-wrapper' class="content">

      <?php if (have_rows('faqs')): ?>
      <?php while (have_rows('faqs')): the_row();?>

      <div class='single-faq'>

        <span class='question'><?php the_sub_field('question');?></span><!-- question -->

        <div class='answer'>

          <?php the_sub_field('answer');?>

        </div><!-- answer -->

      </div><!-- single-faq -->

      <?php endwhile;?>

      <?php endif;?>

    </div><!-- faq-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>