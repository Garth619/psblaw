<div class='page-title-wrapper'>

  <h1 class="page-title page-large-content-title">
    <?php if (is_post_type_archive('case_results')) {
    echo "Case Results";
}
;?><?php if (is_tax('case_results_category')) {
    echo single_term_title();
}
;?>
  </h1>

</div><!-- page-title-wrapper -->

<?php if (get_field('case_results_archive_and_taxonomy_description', 'option')) {?>

<div id='page-descrip-wrapper'>

  <?php the_field('case_results_archive_and_taxonomy_description', 'option');?>

</div><!-- page-descrip-wrapper -->

<?php }?>


<div id="page-container">

  <div id='case-results-filter'>

    <div id='case-results-select'>

      <span>
        <?php if (is_post_type_archive('case_results')) {?>
        Select Practice Areas
        <?php }?>
        <?php if (is_tax('case_results_category')) {?>
        <?php single_term_title();?>
        <?php }?>
      </span>

      <div id='case-results-arrow'></div><!-- case-results-arrow -->

    </div><!-- case-results-select -->

    <div id='case-results-dropdown'>

      <?php

$landmarkcat = 62;

echo "<ul>";

$landmarkterm = get_term($landmarkcat, $taxonomy);
$landmarktermlink = get_term_link($landmarkcat);

echo "<li><a href='" . esc_url($landmarktermlink) . "'>" . $landmarkterm->name . "</a></li>";

$args = array(
    'taxonomy' => array('case_results_category'),
    'order' => 'ASC',
    'orderby' => 'name',
    'hide_empty' => false,
    'exclude' => array($landmarkcat),
);

$term_query = new WP_Term_Query($args);

if (!empty($term_query) && !is_wp_error($term_query)) {
    foreach ($term_query->terms as $term) {
        $term_link = get_term_link($term);

        if (is_wp_error($term_link)) {
            continue;
        }

        echo '<li><a href="' . esc_url($term_link) . '">' . $term->name . '</a></li>';
    }
}

if (is_tax('case_results_category')) {
    echo "<li><a href='" . get_post_type_archive_link('case_results') . "'>View All+</a></li>";
}

echo "<ul>";

?>



    </div><!-- case-results-dropdown -->

  </div><!-- case-results-filter -->

  <div id='case-results-wrapper'>

    <?php

// Need to strip out the $ and the commas in the acf value so they will order properly in the wp_query below

// Archive page
if (is_post_type_archive('case_results')) {
    $posts = get_posts(array(
        'post_type' => 'case_results',
        'posts_per_page' => -1,
    ));
}

if (is_tax('case_results_category')) {
    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

    $posts = get_posts(array(
        'post_type' => 'case_results',
        'posts_per_page' => '-1',
        'tax_query' => array(
            array(
                'taxonomy' => 'case_results_category',
                'field' => 'slug',
                'terms' => $term->slug,
            ),
        ),
    ));
}

if ($posts):

    foreach ($posts as $post):

        setup_postdata($post);

        // removes the $ and commas from the acf amount
        $amount = str_replace(['$', ','], '', get_field('case_result_amount'));

        // build an associative array
        $amount_int[$post->ID] = $amount;

    endforeach;

    wp_reset_postdata();

    // sort the associative array in descending order, according to the value(acf amount)

    arsort($amount_int);

    // pull the post ids out (according to the amount) into an array (this will be used below as the orderby postid array)

    $amount_order = array_keys($amount_int);

endif;

if (is_tax('case_results_category')) {
    // setups pagination on taxonomy - not sure why but this prevents 404s (whereas the archive template doesn't need it)
    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
}

$args = array(
    'post_type' => 'case_results',
    'post__in' => $amount_order,
    'orderby' => 'post__in',
    'posts_per_page' => 12,
    'paged' => $paged,
);
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query($args);

while ($wp_query->have_posts()): $wp_query->the_post();?>

    <div class='single-cr'>

      <span class='single-cr-title'><?php the_title();?></span><!-- single-cr-amount -->

      <span class='single-cr-amount'><?php the_field('case_result_amount');?></span><!-- single-cr-amount -->

      <?php $terms = get_the_terms($post->ID, 'case_results_category');

    if (!empty($terms)) {
        echo "<ul>";
        foreach ($terms as $term) {
            $url = get_term_link($term->slug, 'case_results_category');
            echo "<li>{$term->name}</li>";
        }
        echo "</ul>";
    }?>

      <a class='button-two case-results-read-more' href='<?php the_permalink();?>'>Read More</a><!-- button-two -->

    </div><!-- single-cr -->

    <?php endwhile;?>

    <div id="case-results-nav">

      <?php my_numeric_posts_nav();?>

    </div><!-- case-results-nav -->

    <?php
$wp_query = null;
$wp_query = $temp; // Reset
?>


  </div><!-- case-results-wrapper -->

</div><!-- page-container -->