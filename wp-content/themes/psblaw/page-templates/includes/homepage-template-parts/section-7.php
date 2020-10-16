<section id='section_seven'>

<div id='sec_seven_inner'>

  <div id='sec_seven_left'>
  
    <span id='sec_seven_title'><?php the_field( 'section_seven_title' ); ?></span><!-- sec_seven_title -->

    <span class='double_line'></span><!-- double_line -->

    <a class='button_two' href='<?php the_field( 'section_seven_button_page_link' ); ?>'><?php the_field( 'section_seven_button_verbiage' ); ?></a><!-- button_two -->
  
  </div><!-- sec_seven_left -->

  <div id='sec_seven_right'>

    <?php if ( have_rows( 'section_seven_practice_areas' ) ) : ?>
	    
      <ul>

      <?php while ( have_rows( 'section_seven_practice_areas' ) ) : the_row(); ?>

        <li><a href="<?php the_sub_field( 'pa_page_link' ); ?>"><?php the_sub_field( 'pa_title' ); ?></a></li>

	    <?php endwhile; ?>

      </ul>
    
    <?php endif; ?>

    <a class='button_two' href='<?php the_field( 'section_seven_button_page_link' ); ?>'><?php the_field( 'section_seven_button_verbiage' ); ?></a><!-- button_two -->
  
  </div><!-- sec_seven_right -->

</div><!-- sec_seven_inner -->

</section><!-- section_seven -->