<div class='att-profile-wrapper'>

  <div class='att-profile-img'>

    <?php $attorney_profile = get_field('attorney_profile');?>

    <?php if ($attorney_profile) {?>

    <img src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />

    <?php } else {?>

    <img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="Bio Placeholder" />

    <div class='placeholder-wrapper'></div><!-- placeholder-wrapper -->

    <?php }?>

  </div><!-- att-profile-img -->

  <?php if (get_field('attorney_email')) {?>

  <div class='att-email-wrapper'>

    <span>Email</span><a class='att-email'
      href="mailto:<?php the_field('attorney_email');?>"><?php the_field('attorney_email');?></a>

  </div><!-- att-email -->

  <?php }?>

  <?php if (get_field('download_vcard')) {?>
  <a class='button vcard' href='<?php the_field('download_vcard');?>'><?php the_field('download_vcard_verbiage');?></a>
  <!-- button vcard -->
  <?php }?>



</div><!-- att-profile-wrapper -->