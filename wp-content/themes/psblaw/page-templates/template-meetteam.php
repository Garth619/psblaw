<?php

/* Template Name: Meet the Team */

get_header();?>

<div id="internal-main">

  <div class='page-title-wrapper'>

    <h1 class="page-title page-large-content-title"><?php the_title();?></h1>

  </div><!-- page-title-wrapper -->

  <div id="page-container">

    <div id='meet-team'>

      <?php $our_team = get_field('our_team');?>

      <?php if ($our_team): ?>

      <?php foreach ($our_team as $post): ?>

      <?php setup_postdata($post);?>

      <div class='single-att'>

        <a href='<?php the_permalink();?>'>

          <?php $attorney_profile = get_field('attorney_profile');?>

          <div class='single-att-profile <?php if (!$attorney_profile) {echo 'placeholder';}
;?> '>

            <?php if ($attorney_profile) {?>

            <img src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />

            <?php } else {?>

            <img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="Bio Placeholder" />

            <div class='placeholder-wrapper'></div><!-- placeholder-wrapper -->

            <?php }?>

          </div><!-- single-att-profile -->

          <span class='single-att-title'><?php the_title();?></span><!-- single-att-title -->

          <span class='single-att-position'><?php the_field('attorney_position');?></span><!-- single-att-title -->

        </a>

      </div><!-- single-att -->

      <?php endforeach;?>

      <?php wp_reset_postdata();?>

      <?php endif;?>

    </div><!-- meet-team -->

  </div><!-- page-container -->


</div><!-- internal-main -->

<?php get_footer();?>