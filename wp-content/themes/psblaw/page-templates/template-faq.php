<?php 

/* Template Name: FAQs */

get_header(); ?>

<div id="internal-main">

<h1 class="page-title page-large-content-title"><?php the_title();?></h1>

<?php // if(get_field('practice_area_description')) { ?>

<div id='page-descrip-wrapper'>

  <p>Below are some of the most asked questions about personal injury cases in Los Angeles and throughout California. Our team at Panish Shea & Boyle, LLP have included answers for each of them.</p>
	
</div><!-- page-descrip-wrapper -->

<?php // } ?>

	<div id="page-container">
			
		<div id='faq-directory' class="content">

    <?php if ( have_rows( 'faqs' ) ) : $count = 0;?>
	    <?php while ( have_rows( 'faqs' ) ) : the_row(); ?>

        <div class='single-faq'>
      
          <span class='question <?php //if (!$count) {echo ' open';};?>'><?php the_sub_field( 'question' ); ?></span><!-- question -->
      
          <div class='answer'>
      
           <?php the_sub_field( 'answer' ); ?>
      
        </div><!-- answer -->

      </div><!-- single-faq -->
		
	    <?php  $count++; endwhile; ?>

    <?php endif; ?>

		</div><!-- pa-directory -->

	</div><!-- page-container -->
	
</div><!-- internal-main -->
		
<?php get_footer(); ?>
