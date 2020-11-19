<?php

/* Template Name: Contact */

get_header();?>

<div id="internal-main">

  <?php get_template_part('page-templates/includes/template', 'default-page-banner');?>

  <div id="page-container" class="">

    <div id="contact-wrapper">

      <div id='contact-top'>

        <div id='contact-phone-wrapper'>

          <div class='contact-top-phone'>

            <span>Phone</span><a
              href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('toll_free_phone', 'option')); ?>"><?php the_field('toll_free_phone', 'option');?></a>

          </div><!-- contact-top-phone -->

          <div class='contact-top-phone'>

            <span>Fax</span><a><?php the_field('fax_number', 'option');?></a>

          </div><!-- contact-top-phone -->

        </div><!-- contact-phone-wrapper -->

        <div id='contact-call-us' class="content">

          <?php the_field('contact_content');?>

        </div><!-- contact-call-us -->

      </div><!-- contact-top -->

      <div id='contact-map-wrapper'>

        <div class='contact-map'>

          <div class='contact-map-left'>

            <span class='contact-map-title'><?php the_field('location_title_one', 'option');?></span>
            <!-- contact-map-title -->

            <span class='contact-map-address'><?php the_field('address_one', 'option');?></span>
            <!-- contact-map-address -->

            <a class='contact-map-phone'
              href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('location_phone_one', 'option')); ?>"><?php the_field('location_phone_one', 'option');?></a>
            <!-- contact-map-phone -->

            <a class='button-three contact-get-directions'
              href="<?php the_field('get_directions_link_one', 'option');?>"
              target="_blank"><?php the_field('get_directions_verbiage_one', 'option');?></a>
            <!-- button-three contact-get-directions -->

          </div><!-- contact-map-left -->

          <div class='contact-map-right'>

            <?php the_field('location_one_google_map_link', 'option');?>

          </div><!-- contact-map-right -->

        </div><!-- contact-map -->

        <div class='contact-map'>

          <div class='contact-map-left'>

            <span class='contact-map-title'><?php the_field('location_title_two', 'option');?></span>
            <!-- contact-map-title -->

            <span class='contact-map-address'><?php the_field('address_two', 'option');?></span>
            <!-- contact-map-address -->

            <a class='contact-map-phone'
              href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('location_phone_two', 'option')); ?>"><?php the_field('location_phone_two', 'option');?></a>
            <!-- contact-map-phone -->

            <a class='button-three contact-get-directions'
              href="<?php the_field('get_directions_link_two', 'option');?>"
              target="_blank"><?php the_field('get_directions_verbiage_two', 'option');?></a>
            <!-- button-three contact-get-directions -->

          </div><!-- contact-map-left -->

          <div class='contact-map-right'>

            <?php the_field('location_two_google_map_link', 'option');?>

          </div><!-- contact-map-right -->

        </div><!-- contact-map -->

      </div><!-- contact-map-wrapper -->

    </div><!-- contact-wrapper -->

  </div><!-- page-container -->

</div><!-- internal-main -->

<?php get_footer();?>