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
			
	<div id='case-results-wrapper' class="content">

    

		</div><!-- case-results-wrapper -->

	</div><!-- page-container -->
	
</div><!-- internal-main -->
		
<?php get_footer(); ?>
