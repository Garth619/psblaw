<section id='section-seven'>

  <div id='sec-seven-inner'>

    <div id='sec-seven-top'>

      <span id='sec-seven-title'><?php the_field('section_seven_title');?></span><!-- sec-seven-title -->

      <div id='sec-seven-content' class="content">

        <?php the_field('section_seven_intro');?>

      </div><!-- sec-seven-content -->

    </div><!-- sec-seven-top -->

    <div id='sec-seven-bottom'>

      <div class='sec-seven-faq-col'>

        <?php if (have_rows('section_seven_faqs_column_one')): ?>
        <?php while (have_rows('section_seven_faqs_column_one')): the_row();?>

        <div class='sec-seven-faq'>

          <span class='sec-seven-question'><?php the_sub_field('question');?></span><!-- sec-seven-question -->

          <div class='sec-seven-answer content'>

            <?php the_sub_field('answer');?>

          </div><!-- sec-seven-answer -->

        </div><!-- sec-seven-faq -->

        <?php endwhile;?>
        <?php endif;?>

      </div><!-- sec-seven-faq-col -->

      <div class='sec-seven-faq-col'>

        <?php if (have_rows('section_seven_faqs_column_two')): ?>
        <?php while (have_rows('section_seven_faqs_column_two')): the_row();?>

        <div class='sec-seven-faq'>

          <span class='sec-seven-question'><?php the_sub_field('question');?></span><!-- sec-seven-question -->

          <div class='sec-seven-answer content'>

            <?php the_sub_field('answer');?>

          </div><!-- sec-seven-answer -->

        </div><!-- sec-seven-faq -->

        <?php endwhile;?>
        <?php endif;?>

      </div><!-- sec-seven-faq-col -->

      <a class='button sec-seven-button' href=''>View all FAQs</a><!-- button sec-seven-button -->

    </div><!-- sec-seven-bottom -->

  </div><!-- sec-seven-inner -->

</section><!-- section-seven -->