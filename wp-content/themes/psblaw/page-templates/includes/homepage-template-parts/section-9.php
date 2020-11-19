<section id='section-nine'>

  <div id='sec-nine-inner'>

    <div id='sec-nine-top'>

      <?php $section_nine_image = get_field('section_nine_image');?>

      <?php if ($section_nine_image) {?>

      <div id='sec-nine-img-wrapper'>

        <img class="lazyload" data-src="<?php echo $section_nine_image['url']; ?>"
          alt="<?php echo $section_nine_image['alt']; ?>" />

      </div><!-- sec-nine-img-wrapper -->

      <?php }?>

      <?php if (get_field('section_nine_quote')) {?>

      <div id='sec-nine-quote-wrapper'>

        <span id='sec-nine-quote'><?php the_field('section_nine_quote');?></span><!-- sec-nine-quote -->

        <span id='sec-nine-name'><?php the_field('section_nine_name');?></span><!-- sec-nine-name -->

        <span id='sec-nine-firm'><?php the_field('section_nine_company');?></span><!-- sec-nine-name -->

      </div><!-- sec-nine-quote-wrapper -->

      <?php }?>

    </div><!-- sec-nine-top -->

    <div id='sec-nine-bottom'>

      <div id='sec-nine-content' class="content">

        <span id='sec-nine-title'><?php the_field('section_nine_title');?></span><!-- sec-nine-title -->

        <div id='sec-nine-content-inner'>

          <?php the_field('section_nine_content');?>

        </div><!-- sec-nine-content-inner -->

      </div><!-- sec-nine-content -->

      <?php if (have_rows('section_nine_amounts')): ?>

      <div id='sec-nine-amount-wrapper'>

        <span id='sec-nine-amounts-title'><?php the_field('section_nine_amounts_title');?></span>
        <!-- sec-nine-amounts-title -->

        <div id='sec-nine-amounts'>

          <?php while (have_rows('section_nine_amounts')): the_row();?>

          <span class='sec-nine-amount'><?php the_sub_field('amount');?></span><!-- sec-nine-amount -->

          <?php endwhile;?>

        </div><!-- sec-nine-amounts -->

      </div><!-- sec-nine-amounts -->

      <a class='button sec-nine-button'
        href='<?php the_field('section_nine_button_link');?>'><?php the_field('section_nine_button_verbiage');?></a>
      <!-- button sec-nine-button -->

    </div><!-- sec-nine-amount-wrapper -->

    <?php endif;?>

  </div><!-- sec-nine-bottom -->

  </div><!-- sec-nine-inner -->

</section><!-- section-nine -->