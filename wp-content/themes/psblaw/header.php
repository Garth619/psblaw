<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <title><?php
/*
 * Print the <title> tag based on what is being viewed.
 */
global $page, $paged;

wp_title('|', true, 'right');

// Add the blog name.
bloginfo('name');

// Add the blog description for the home/front page.
$site_description = get_bloginfo('description', 'display');
if ($site_description && (is_home() || is_front_page())) {
    echo " | $site_description";
}

// Add a page number if necessary:
if (($paged >= 2 || $page >= 2) && !is_404()) {
    echo esc_html(' | ' . sprintf(__('Page %s', 'twentyten'), max($paged, $page)));
}

?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />

  <?php if (get_field('host_google_fonts_locally', 'option') == "Yes"): ?>

  <style>
  <?php if (have_rows('locally_hosted_google_fonts_repeater', 'option')): ?><?php while (have_rows('locally_hosted_google_fonts_repeater', 'option')): the_row();

  ?>@font-face {
    font-family: '<?php the_sub_field('font_family', 'option');?>';
    font-style: <?php the_sub_field('font_style', 'option');
    ?>;
    font-weight: <?php the_sub_field('font_weight', 'option');
    ?>;
    font-display: <?php the_sub_field('font_display', 'option');
    ?>;
    src: local('<?php the_sub_field('src: local', 'option');?>'), local('<?php the_sub_field('local', 'option');?>'),
      url('<?php the_sub_field('font_file_woff2', 'option');?>') format('woff2');
  }

  <?php endwhile;
  ?><?php endif;
  ?><?php the_field('locally_hosted_google_fonts', 'option');
  ?>
  </style>

  <?php else: ?>

  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

  <style>
  <?php if (get_field('fonts', 'option')): ?><?php while (has_sub_field('fonts', 'option')): ?>@import url(<?php the_sub_field('font_url');
  ?>);

  <?php endwhile;
  ?><?php endif;
  ?>
  </style>

  <?php endif;?>



  <style>
  <?php the_field('review_css', 'option');
  ?>
  </style>

  <?php wp_head();?>

  <?php the_field('schema_code', 'option');?>

  <?php the_field('analytics_code', 'option');?>

</head>

<body <?php body_class();?>>

  <?php if (is_front_page()) {
    // homepage/internal header layouts
    $header = 'header-layout-one';
} else {
    $header = 'header-layout-two';
}
// banner/no banner on internal pages
if (basename(get_page_template()) === 'page.php') {
    if (get_field('disable_banner_new') == 'Yes') {
        $banner = ' no-banner-layout';
    } elseif (is_single() || is_tax('case_results_category')) {
        $banner = ' no-banner-layout';
    } else {
        $banner = ' default-banner-layout';
    }
}
if (is_page_template('page-templates/template-contact.php')) {
    $banner = ' default-banner-layout';
}
if (is_post_type_archive('case_results') || is_404()) {
    $banner = ' no-banner-layout';
}
// single blog post
?>

  <header class="<?php echo $header;
echo $banner; ?>">

    <div class='header-inner'>

      <div class='header-desktop-wrapper'>

        <div class='header-left'>

          <a class='logo' href="<?php bloginfo('url');?>">

            <div class="logo-mobile">

              <?php $auth = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic " . base64_encode("ilawyer:ilawyer")),
)
);?>

              <?php $logom = get_field('logo', 'option');?>

              <?php if ($logom) {

    echo file_get_contents($logom, false, $auth);

}?>

            </div><!-- logo-mobile -->

            <div class="logo-desktop">

              <?php $logod = get_field('logo_two', 'option');?>

              <?php if ($logom) {

    echo file_get_contents($logod, false, $auth);

}?>

            </div><!-- logo-desktop -->

            <div class="logo-sticky">

              <?php $logos = get_field('logo_three', 'option');?>

              <?php if ($logos) {

    echo file_get_contents($logos, false, $auth);

}?>

            </div><!-- logo-sticky -->

          </a><!-- logo -->

          <?php if (have_rows('translation', 'option')): ?>

          <div class='translate-wrapper'>

            <?php while (have_rows('translation', 'option')): the_row();?>

            <a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a>

            <?php endwhile;?>

          </div><!-- translate-wrapper -->

          <?php endif;?>

        </div><!-- header-left -->

        <div class='header-right'>

          <div class='free-consult-wrapper'>

            <span><?php the_field('free_consultation_title', 'option');?></span>
            <span><?php the_field('available_247_title', 'option');?></span>

          </div><!-- free-consult-wrapper -->

          <a class="header-phone"
            href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('header_phone', 'option')); ?>"><?php the_field('header_phone', 'option');?></a>
          <!-- header-phone -->

        </div><!-- header-right -->

      </div><!-- header-desktop-wrapper -->

      <div class='menu-wrapper'>

        <span class='menu-bar'></span><!-- menu-bar -->
        <span class='menu-bar'></span><!-- menu-bar -->
        <span class='menu-bar'></span><!-- menu-bar -->

        <span class='menu-title'>Menu</span><!-- menu-title -->

      </div><!-- menu-wrapper -->

      <nav>

        <div class='close'></div><!-- close -->

        <?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'main_menu'));?>

      </nav>

    </div><!-- header-inner -->

  </header>

  <div id='sticky-header'></div><!-- sticky-header -->