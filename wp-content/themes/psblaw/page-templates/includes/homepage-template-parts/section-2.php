<section id='section-two'>

  <div id='sec-two-inner' class="preload-section">

    <div id='sec-two-left'>

      <div id='psb-playbook-wrapper'>

        <?php $section_two_info_image = get_field('section_two_info_image');?>

        <?php if ($section_two_info_image) {?>

        <img id='psb-playbook' class="lazyload" data-src="<?php echo $section_two_info_image['url']; ?>"
          alt="<?php echo $section_two_info_image['alt']; ?>" />

        <?php }?>

        <?php if (get_field('section_two_info_title')) {?>

        <span id='sec-two-left-title'><?php the_field('section_two_info_title');?></span><!-- sec-two-left-title -->

        <?php }?>

        <?php if (get_field('section_two_info_description')) {?>

        <span id='sec-two-descrip'><?php the_field('section_two_info_description');?></span><!-- sec-two-descrip -->

        <?php }?>

        <?php if (get_field('section_two_info_button_link')) {?>

        <a class='button sec-two-button'
          href='<?php the_field('section_two_info_button_link');?>'><?php the_field('section_two_info_button_verbiage');?></a>
        <!-- class -->

        <?php }?>

      </div><!-- psb-playbook-wrapper -->

    </div><!-- sec-two-left -->

    <div id='sec-two-right'>

      <span id='sec-two-title'><?php the_field('section_two_featured_news_title');?></span><!-- sec-two-title -->

      <div id='sec-two-slide-wrapper' class="preload-section">

        <div id='sec-two-slider' class="preload-slider">

          <?php if (have_rows('section_two_featured_news_slider_new')): ?>

          <?php while (have_rows('section_two_featured_news_slider_new')): the_row();?>

          <?php $post_object = get_sub_field('section_two_featured_news_slider');?>

          <?php if ($post_object): ?>

          <?php $post = $post_object;?>

          <?php setup_postdata($post);?>

          <div class='sec-two-slide'>

            <a href="<?php the_permalink();?>">

              <div class='sec-two-image-wrapper'>

                <?php $image = get_sub_field('image');?>

                <?php if ($image): ?>

                <img class="lazyload" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php else: ?>

                <?php if (has_post_thumbnail()) {?>

                <?php the_post_thumbnail('large');?>

                <?php }?>

                <?php endif;?>

              </div><!-- sec-two-image-wrapper -->

              <?php if (get_sub_field('page_category')): ?>

              <span class='sec-two-slide-cat'><?php the_sub_field('page_category');?></span><!-- sec-two-slide-cat -->

              <?php else: ?>

              <?php

$myposts = 'post' == get_post_type();

$mycaseresults = 'case_results' == get_post_type();

if ($myposts || $mycaseresults): ?>

              <div class='post-categories'>

                <?php if ($myposts) {

    $terms = get_the_terms($post->ID, 'category');}

if ($mycaseresults) {

    $terms = get_the_terms($post->ID, 'case_results_category');

}

if (!empty($terms)) {

    echo "<ul>";

    foreach ($terms as $term) {

        echo "<li>{$term->name}</li>";

    }

    echo "</ul>";

}?>

              </div><!-- post-categories -->

              <?php endif;?>

              <?php endif;?>

              <span class='sec-two-slide-title'><?php the_title();?></span><!-- sec-two-slide-title -->

              <span class='sec-two-slide-date'><?php $pfx_date = get_the_date();
echo $pfx_date?></span><!-- sec-two-slide-date -->

            </a>

          </div><!-- sec-two-slide -->

          <?php wp_reset_postdata();?>
          <?php endif;?>
          <?php endwhile;?>
          <?php endif;?>

        </div><!-- sec-two-slider -->

        <div class='sec-two-arrow sec-two-arrow-left'>

          <?php echo file_get_contents(get_template_directory() . '/images/arrow-left.svg'); ?>

        </div><!-- sec-two-arrow sec-two-arrow-left -->

        <div class='sec-two-arrow sec-two-arrow-right'>

          <?php echo file_get_contents(get_template_directory() . '/images/arrow-right.svg'); ?>

        </div><!-- sec-two-arrow sec-two-arrow-right -->

        <div style="clear:both"></div>

      </div><!-- sec-two-slide-wrapper -->

    </div><!-- sec-two-right -->

  </div><!-- sec-two-inner -->

</section><!-- section-two -->