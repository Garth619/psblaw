<section id='section-five'>

  <div id='sec-five-inner'>

    <div class='sec-five-col'>

      <span id='sec-five-subtitle'><?php the_field('section_five_subtitle');?></span><!-- sec-five-subtitle -->

      <span id='sec-five-title'><?php the_field('section_five_title');?></span><!-- sec-five-title -->

      <div class='sec-five-col-inner content'>

        <div id='sec-five-intro'>

          <?php the_field('section_five_intro');?>

        </div><!-- sec-five-intro -->

        <?php the_field('section_five_content_column_one');?>

      </div><!-- sec-five-col-inner -->

    </div><!-- sec-five-col -->

    <div class='sec-five-col'>

      <div class='sec-five-col-inner content'>

        <div class='sec-five-col-inner-two'>

          <?php the_field('section_five_content_columns_two');?>

        </div><!-- sec-five-col-inner-two -->

        <?php $section_five_image = get_field('section_five_image');?>

        <?php if ($section_five_image) {?>

        <div class='sec-five-image-wrapper'>

          <span class='sec-five-image-title'><?php the_field('section_five_image_description');?></span>
          <!-- sec-five-image-title -->

          <div class='sec-five-image'>

            <img class="lazyload" data-src="<?php echo $section_five_image['url']; ?>"
              alt="<?php echo $section_five_image['alt']; ?>" />

          </div><!-- sec-five-image -->

          <a class='button sec-five-img-button'
            href='<?php the_field('section_five_button_link');?>'><?php the_field('section_five_button_verbiage');?></a>
          <!-- button sec-five-img-button -->

        </div><!-- sec-five-image-wrapper -->

        <?php }?>

      </div><!-- sec-five-col-inner -->

    </div><!-- sec-five-col -->

  </div><!-- sec-five-inner -->

</section><!-- section-five -->