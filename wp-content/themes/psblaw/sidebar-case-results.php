<div id="sidebar-wrapper">

  <div id='sidebar-form'>

    <h3 id='sidebar-form-title'><?php the_field('sidebar_form_title', 'option');?></h3><!-- sidebar-form-title -->

    <div id='sidebar-form-descrip'>

      <?php the_field('sidebar_form_description', 'option');?>

    </div><!-- sidebar-form-descrip -->

    <?php $myform = get_field('sidebar_form', 'option');?>

    <?php gravity_form($myform, false, false, false, '', true, 1233);?>

    <span id='sidebar-required'><?php the_field('sidebar_required_verbiage', 'option');?></span>
    <!-- sidebar-required -->

  </div><!-- sidebar-form -->

  <div class="sidebar-box sidebar-pa sidebar-case-results">

    <div class='widget'>

      <h3>Categories</h3>

      <?php $terms = get_terms('case_results_category');

echo '<ul class="menu">';

foreach ($terms as $term) {

    $term_link = get_term_link($term);

    // If there was an error, continue to the next term.
    if (is_wp_error($term_link)) {
        continue;
    }

    echo '<li><a href="' . esc_url($term_link) . '">' . $term->name . '</a></li>';

}

if (is_tax('case_results_category')) {

    echo "<li><a href='" . get_post_type_archive_link('case_results') . "'>View All+</a></li>";

}

echo '</ul>';?>

    </div><!-- widget -->

  </div><!-- sidebar-box -->

</div><!-- sidebar_wrapper -->