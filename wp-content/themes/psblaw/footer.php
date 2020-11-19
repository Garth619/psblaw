<footer id="consultation">

  <div id='footer-inner'>

    <div id='footer-top'>

      <span id='footer-form-title'><?php the_field('form_title', 'option');?></span><!-- footer-form-title -->

      <span id='footer-form-descrip'><?php the_field('form_title_description', 'option');?></span>
      <!-- footer-form-descrip -->

      <?php gravity_form(3, false, false, false, '', true, 1345);?>

      <span id='required'><span>*</span><?php the_field('required_field_verbiage', 'option');?></span><!-- required -->

    </div><!-- footer-top -->

    <div id='footer-bottom'>

      <span id='footer-bottom-title'><?php the_field('footer_description', 'option');?></span>
      <!-- footer-bottom-title -->

      <div id='footer-bottom-col-wrapper'>

        <div class='footer-bottom-col'>

          <span class='footer-bottom-col-title'><?php the_field('location_title_one', 'option');?></span>
          <!-- footer-bottom-title -->

          <span class='footer-bottom-content'><?php the_field('address_one', 'option');?></span>
          <!-- footer-bottom-content -->

          <a class='footer-bottom-content footer-phone'
            href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('location_phone_one', 'option')); ?>"><?php the_field('location_phone_one', 'option');?></a>
          <!-- footer-bottom-content -->

          <a class='footer-bottom-content get-directions-button'
            href="<?php the_field('get_directions_link_one', 'option');?>" target="_blank"
            rel="noopener"><?php the_field('get_directions_verbiage_one', 'option');?></a>
          <!-- get-directions-button -->

        </div><!-- footer-bottom-col -->

        <div class='footer-bottom-col'>

          <span class='footer-bottom-col-title'><?php the_field('location_title_two', 'option');?></span>
          <!-- footer-bottom-title -->

          <span class='footer-bottom-content'><?php the_field('address_two', 'option');?></span>
          <!-- footer-bottom-content -->

          <a class='footer-bottom-content footer-phone'
            href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('location_phone_two', 'option')); ?>"><?php the_field('location_phone_two', 'option');?></a>
          <!-- footer-bottom-content -->

          <a class='footer-bottom-content get-directions-button'
            href="<?php the_field('get_directions_link_two', 'option');?>" target="_blank"
            rel="noopener"><?php the_field('get_directions_verbiage_two', 'option');?></a>
          <!-- get-directions-button -->

        </div><!-- footer-bottom-col -->

        <div class='footer-bottom-col'>

          <div class='footer-bottom-sub-col'>

            <span class='footer-bottom-col-title'><?php the_field('toll_free_title', 'option');?></span>
            <!-- footer-bottom-title -->

            <a class='footer-bottom-content footer-phone'
              href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('toll_free_phone', 'option')); ?>"><?php the_field('toll_free_phone', 'option');?></a>
            <!-- footer-bottom-content -->

          </div><!-- footer-bottom-sub-col -->

          <div class='footer-bottom-sub-col'>

            <span class='footer-bottom-col-title'><?php the_field('fax_title', 'option');?></span>
            <!-- footer-bottom-title -->

            <a class='footer-bottom-content footer-phone'><?php the_field('fax_number', 'option');?></a>
            <!-- footer-bottom-content -->

          </div><!-- footer-bottom-sub-col -->

          <div class='footer-bottom-sub-col'>

            <?php if (!is_page_template('page-templates/template-contact.php')) {?>

            <?php if (have_rows('social_media', 'option')): ?>

            <div id='social-media-wrapper'>

              <?php while (have_rows('social_media', 'option')): the_row();?>

              <a href="<?php the_sub_field('link');?>" target="_blank" rel="noopener">

                <?php if (get_sub_field('icon') == "Instagram") {?>

                <?php echo file_get_contents(get_template_directory() . '/images/social-ig.svg'); ?>

                <?php }?>

                <?php if (get_sub_field('icon') == "Facebook") {?>

                <?php echo file_get_contents(get_template_directory() . '/images/social-fb.svg'); ?>

                <?php }?>

                <?php if (get_sub_field('icon') == "Twitter") {?>

                <?php echo file_get_contents(get_template_directory() . '/images/social-twitter.svg'); ?>

                <?php }?>

              </a>

              <?php endwhile;?>

            </div><!-- social-media-wrapper -->

            <?php endif;?>

            <?php }?>

          </div><!-- footer-bottom-sub-col -->

        </div><!-- footer-bottom-col -->

      </div><!-- footer-bottom-col-wrapper -->

    </div><!-- footer-bottom -->

    <div id='copyright'>

      <div id='copyright-inner'>

        <ul>
          <li>Copyright &copy; <?php echo date("Y"); ?> <?php the_field('copyright_law_firm_name', 'option');?></li>

          <li><?php the_field('all_rights_reserved', 'option');?></li>

          <?php if (get_field('disclaimer', 'option')) {?>

          <li><a href="<?php the_field('disclaimer', 'option');?>"><?php the_field('disclaimer_title', 'option');?></a>
          </li>

          <?php }?>

          <?php if (get_field('privacy_policy', 'option')) {?>

          <li><a
              href="<?php the_field('privacy_policy', 'option');?>"><?php the_field('privacy_policy_title', 'option');?></a>
          </li>

          <?php }?>

          <?php if (get_field('site_map', 'option')) {?>

          <li><a href="<?php the_field('site_map', 'option');?>" target="_blank"
              rel="noopener"><?php the_field('site_map_title', 'option');?></a></li>

          <?php }?>

          <?php if (get_field('google_maps_link', 'option')) {?>

          <li><a href="<?php the_field('google_maps_link', 'option');?>" target="_blank"
              rel="noopener"><?php the_field('google_maps_title', 'option');?></a></li>

          <?php }?>
        </ul>

        <a id="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">

          <img src='<?php bloginfo('template_directory');?>/images/ilawyerlogo.svg' alt='' />

        </a>

      </div><!-- copyright-inner -->

    </div><!-- copyright -->

  </div><!-- footer-inner -->

</footer>

<div id='form-overlay'>

  <div id='form-overlay-inner'>

    <div id='form-overlay-close'></div><!-- form-overlay-close -->

    <h3 id='overlay-form-title'><?php the_field('sidebar_form_title', 'option');?></h3><!-- overlay-form-title -->

    <div id='overlay-form-descrip'>

      <?php the_field('sidebar_form_description', 'option');?>

    </div><!-- overlay-form-descrip -->

    <?php $myform = get_field('sidebar_form', 'option');?>

    <?php gravity_form($myform, false, false, false, '', true, 1233);?>

    <span id='overlay-required'><?php the_field('sidebar_required_verbiage', 'option');?></span>
    <!-- sidebar-required -->

  </div><!-- form-overlay-inner -->

</div><!-- form-overlay -->

<?php wp_footer();?>

<?php the_field('footer_scripts', 'option');?>

<?php if (is_front_page()) {?>

<script type="text/javascript">
jQuery(document).ready(function($) {

  // above the fold home functions

  $("body").addClass("ready");


});

// load all other scripts

function delayScript(src, timeout, attributes) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const scriptElem = document.createElement("script");
      scriptElem.src = src;
      for (const key in attributes) {
        const attribute = key;
        const value = attributes[key];
        scriptElem.setAttribute(attribute, value ? value : "");
      }
      scriptElem.addEventListener("readystatechange", () => {
        resolve();
      });
      document.head.appendChild(scriptElem);
    }, timeout);
  });
}

delayScript("<?php bloginfo('template_directory');?>/js/custom-min.js", 2000);

<?php if (get_field('live_chat', 'option')) {?>

delayScript("<?php the_field('live_chat', 'option');?>", 2000);

<?php }?>
</script>

<?php }?>

</body>

</html>