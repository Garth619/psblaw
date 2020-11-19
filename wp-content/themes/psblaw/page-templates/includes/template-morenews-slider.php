<?php if (have_rows('more_news_slider_new')): ?>

<div id='more-news-wrapper'>

  <div id='more-news-inner'>

    <?php if (is_page_template('page-templates/template-bio.php')) {?>

    <span id='more-news-title'><?php the_title();?> in the News</span><!-- more-news-title -->

    <?php } else {?>

    <span id='more-news-title'>More News or Articles</span><!-- more-news-title -->

    <?php }?>

    <div id='more-news-slider-wrapper' class="preload-section">

      <div class='more-news-arrow more-news-left-arrow'>

        <?php echo file_get_contents(get_template_directory() . '/images/arrow-left.svg'); ?>

      </div><!-- more-news-arrow more-news-left-arrow -->

      <div id='more-news-slider-outer'>

        <div id='more-news-slider' class="preload-slider">

          <?php while (have_rows('more_news_slider_new')): the_row();?>


          <?php if (get_sub_field('internal_site_link_or_link_to_another_site') == "Internal Post") {?>

          <?php $post_object = get_sub_field('related_news_posts');?>

          <?php if ($post_object): ?>

          <?php $post = $post_object;?>

          <?php setup_postdata($post);?>

          <div class='more-news-slide'>

            <?php $morenews_post = get_post_type(get_the_ID()) == 'post';?>

            <?php if ($morenews_post) {?>

            <ul>

              <li><a href="<?php echo get_year_link(''); ?>"><?php $pfx_date = get_the_date('Y');
        echo $pfx_date?></a></li>

              <?php

        $myterms = get_the_terms($post->ID, 'category');

        foreach ($myterms as $myterm) {

            $myterm_link = get_term_link($myterm);

            echo '<li><a href="' . esc_url($myterm_link) . '">' . $myterm->name . '</a></li>';

        }

        ?>

            </ul>

            <?php }?>

            <div class='more-news-content-wrapper <?php if (!$morenews_post) {echo "no-morenews-list";}?>'>

              <a href="<?php the_permalink();?>">

                <?php if (has_post_thumbnail()) {?>

                <div class='more-news-img'>

                  <?php the_post_thumbnail('medium');?>

                </div><!-- more-news-img -->

                <?php }
        ;?>

                <div class='more-news-content <?php if (!has_post_thumbnail()) {echo "no-image";}
        ;?>'>

                  <span class='more-news-title'><?php the_title();?></span><!-- more-news-title -->

                  <span class='button-two more-news-read-more'>Read article</span><!-- button-two -->

                </div><!-- more-news-content -->

              </a>

            </div><!-- more-news-content-wrapper -->

          </div><!-- more-news-slide -->

          <?php wp_reset_postdata();?>

          <?php endif;?>

          <?php }?>

          <?php if (get_sub_field('internal_site_link_or_link_to_another_site') == "Outside Site") {?>

          <div class='more-news-slide'>

            <div class='more-news-content-wrapper no-morenews-list'>

              <a href="<?php the_sub_field('outside_site_ur');?>" target="_blank" rel="noopener">

                <?php $outside_image = get_sub_field('outside_image');?>

                <?php if ($outside_image) {?>

                <div class='more-news-img'>

                  <img src="<?php echo $outside_image['url']; ?>" alt="<?php echo $outside_image['alt']; ?>" />

                </div><!-- more-news-img -->

                <?php }?>

                <div class='more-news-content <?php if (!$outside_image) {echo "no-image";}
    ;?>'>

                  <span class='more-news-title'><?php the_sub_field('outside_site_title');?></span>
                  <!-- more-news-title -->

                  <span class='button-two more-news-read-more'>Read article</span><!-- button-two -->

                </div><!-- more-news-content -->

              </a>

            </div><!-- more-news-content-wrapper -->

          </div><!-- more-news-slide -->


          <?php }?>

          <?php endwhile;?>

        </div><!-- more-news-slider -->

      </div><!-- more-news-slider-outer -->

      <div class='more-news-arrow more-news-right-arrow'>

        <?php echo file_get_contents(get_template_directory() . '/images/arrow-right.svg'); ?>

      </div><!-- more-news-arrow more-news-right-arrow -->

    </div><!-- more-news-slider-wrapper -->

  </div><!-- more-news-inner -->

</div><!-- more-news-wrapper -->

<?php endif;?>