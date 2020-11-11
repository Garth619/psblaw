<?php 

get_header(); ?>

<div id="internal-main">

<div class='page-title-wrapper'>

  <h1 class="page-title page-large-content-title">Case Results</h1>

</div><!-- page-title-wrapper -->

<?php //if(get_field('faqs_page_description')) { ?>

  <div id='page-descrip-wrapper'>

    <p>View our Landmark Cases or Filter by Practice Area</p>

    <?php // the_field( 'faqs_page_description' ); ?>

  </div><!-- page-descrip-wrapper -->

  
<?php  //} ?>


	<div id="page-container">
   
  <div id='case-results-filter'>
  
  <div id='case-results-select'>

    <span>Select Practice Areas</span>

    <div id='case-results-arrow'></div><!-- case-results-arrow -->

  </div><!-- case-results-select -->

  <div id='case-results-dropdown'>

   <ul>
      <li><a>Car Accidents</a></li>
      <li><a>Test</a></li>
      <li><a>Test Test</a></li>
      <li><a>Test Test Test</a></li>
      <li><a>Test TestTestTest</a></li>
    </ul>

  </div><!-- case-results-dropdown -->

</div><!-- case-results-filter -->
			
	<div id='case-results-wrapper'>

  <?php 

// Need to strip out the $ and the commas in the acf value so they will order properly ih the wp_query below
$posts = get_posts(array(
	'post_type'			=> 'case_results',
	'posts_per_page'	=> -1,
));

if( $posts ): 

	foreach( $posts as $post ): 
		
    setup_postdata( $post );

      // removes the $ and commas from the acf amount
      $amount = str_replace(['$', ',', ], '', get_field('case_result_amount'));

      // build an associative array 
      $amount_int[$post->ID] = $amount;

    endforeach; 
	
    wp_reset_postdata();

    // sort the associative array in descending order, according to the value(acf amount)

    arsort($amount_int);

    // pull the post ids out according to the amount into an array (this will be used below as the orderby postid array)

    $amount_order = array_keys($amount_int);

  endif; 

  $args = array(
    'post_type' => 'case_results',
    'post__in' => $amount_order,
    'orderby' => 'post__in',
    'posts_per_page' => 12,
    'paged' => $paged
  );
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query($args); // can prolly put args in here and drop the last line below


  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>

  <div class='single-cr'>
    
    <ul>
    <li><a href="">Landmark Case</a></li>
    <li><a href="">Catastrophic Injury</a></li>
    </ul>

    <span class='single-cr-amount'><?php the_field( 'case_result_amount' ); ?></span><!-- single-cr-amount -->

    <span class='single-cr-title'><?php the_title();?></span><!-- single-cr-amount -->

    <a class='button-two case-results-read-more' href='<?php the_permalink();?>'>Read More</a><!-- button-two case-results-read-more -->

  </div><!-- single-cr -->


<?php endwhile; ?>

<div id="case-results-nav">
<?php wpbeginner_numeric_posts_nav(); ?>
</div><!-- case-results-nav -->

<?php 
  $wp_query = null; 
  $wp_query = $temp;  // Reset
?>


	</div><!-- case-results-wrapper -->

	</div><!-- page-container -->
	
</div><!-- internal-main -->
		
<?php get_footer(); ?>
