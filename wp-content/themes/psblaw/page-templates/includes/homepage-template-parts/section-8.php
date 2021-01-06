<section id='section-eight'>

  <div id='sec-eight-inner'>

    <span id='sec-eight-title'><?php the_field('section_eight_title');?></span><!-- sec-eight-title -->

    <div id='sec-eight-descrip' class="content">

      <?php the_field('section_eight_description');?>

    </div><!-- sec-eight-descrip -->

    <div id='sec-eight-slide-wrapper' class="preload-section">

      <div class='sec-eight-arrow sec-eight-arrow-left'>

        <?php echo file_get_contents(get_template_directory() . '/images/arrow-left.svg'); ?>

      </div><!-- sec-eight-arrow sec-eight-arrow-left -->

      <div id='sec-eight-slider' class="preload-slider">
          
           <?php $autho = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic " . base64_encode("ilawyer:ilawyer")),
)
);?>

        <?php if (have_rows('practice_areas_slider')): ?>

        <?php while (have_rows('practice_areas_slider')): the_row();?>

        <div class='sec-eight-slide'>

          <div class='sec-eight-slide-title'>

            <span><?php the_sub_field('title');?></span>

          </div><!-- sec-eight-slide-title -->

          <div class='sec-eight-slide-inner'>

            <?php if (have_rows('practice_area')): ?>

            <?php while (have_rows('practice_area')): the_row();?>

            <div class='sec-eight-slide-item'>

              <a href="<?php the_sub_field('link');?>">

                <?php $svg = get_sub_field('svg');?>

                <?php echo file_get_contents($svg, false, $autho); ?>

                <span><?php the_sub_field('title');?></span>

              </a>

            </div><!-- sec-eight-slide-item -->

            <?php endwhile;?>

            <?php endif;?>

          </div><!-- sec-eight-slide-inner -->

        </div><!-- sec-eight-slide -->

        <?php endwhile;?>

        <?php endif;?>

      </div><!-- sec-eight-slider -->

      <div class='sec-eight-arrow sec-eight-arrow-right'>

        <?php echo file_get_contents(get_template_directory() . '/images/arrow-right.svg'); ?>

      </div><!-- sec-eight-arrow sec-eight-arrow-right -->

    </div><!-- sec-eight-slide-wrapper -->

    <?php if (get_field('section_nine_title')) {?>

    <a class='button sec-eight-button'
      href='<?php the_field('section_eight_button_link');?>'><?php the_field('section_eight_button_verbiage');?></a>
    <!-- button sec-eight-button -->

    <?php }?>

  </div><!-- sec-eight-inner -->

</section><!-- section-eight -->