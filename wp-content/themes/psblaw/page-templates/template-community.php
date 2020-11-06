<?php 

/* Template Name: Community Sponsorship */

get_header(); ?>

<div id="internal-main">

<h1 class="page-title page-large-content-title"><?php the_title();?></h1>

<?php if(get_field('community_description')) { ?>

<div id='page-descrip-wrapper'>

  <?php if(get_field('community_subtitle')) { ?>

    <span id='page-subtitle'><?php the_field( 'community_subtitle' ); ?></span><!-- page-subtitle -->

  <?php } ?>

  <p>Panish Shea & Boyle LLP is proud to support the following schools and other organizations that make a difference in our community.</p>
	
</div><!-- page-descrip-wrapper -->

<?php } ?>

	<div id="page-container">
			
		<div id='community-wrapper'>

      <div class='single-community'>
      
        <a href="" target="_blank" rel="noopener">
        
          <div class='single-community-box'>
          
            <img src='<?php bloginfo('template_directory');?>/images/comm-childrens.jpg' alt=''/>
          
          </div><!-- single-community-box -->

          <span class='single-community-title'>Children’s Hospital Los Angeles</span><!-- single-community-title -->
        
        </a>
      
      </div><!-- single-community -->

      <div class='single-community'>
      
        <a href="" target="_blank" rel="noopener">
        
          <div class='single-community-box'>
          
            <img src='<?php bloginfo('template_directory');?>/images/comm-childrens.jpg' alt=''/>
          
          </div><!-- single-community-box -->

          <span class='single-community-title'>Children’s Hospital Los Angeles</span><!-- single-community-title -->
        
        </a>
      
      </div><!-- single-community -->

      <div class='single-community'>
      
        <a href="" target="_blank" rel="noopener">
        
          <div class='single-community-box'>
          
            <img src='<?php bloginfo('template_directory');?>/images/comm-childrens.jpg' alt=''/>
          
          </div><!-- single-community-box -->

          <span class='single-community-title'>Children’s Hospital Los Angeles</span><!-- single-community-title -->
        
        </a>
      
      </div><!-- single-community -->

      <div class='single-community'>
      
        <a href="" target="_blank" rel="noopener">
        
          <div class='single-community-box'>
          
            <img src='<?php bloginfo('template_directory');?>/images/comm-childrens.jpg' alt=''/>
          
          </div><!-- single-community-box -->

          <span class='single-community-title'>Children’s Hospital Los Angeles</span><!-- single-community-title -->
        
        </a>
      
      </div><!-- single-community -->

      <div class='single-community'>
      
        <a href="" target="_blank" rel="noopener">
        
          <div class='single-community-box'>
          
            <img src='<?php bloginfo('template_directory');?>/images/comm-childrens.jpg' alt=''/>
          
          </div><!-- single-community-box -->

          <span class='single-community-title'>Children’s Hospital Los Angeles</span><!-- single-community-title -->
        
        </a>
      
      </div><!-- single-community -->

      <div class='single-community'>
      
        <a href="" target="_blank" rel="noopener">
        
          <div class='single-community-box'>
          
            <img src='<?php bloginfo('template_directory');?>/images/comm-childrens.jpg' alt=''/>
          
          </div><!-- single-community-box -->

          <span class='single-community-title'>Children’s Hospital Los Angeles</span><!-- single-community-title -->
        
        </a>
      
      </div><!-- single-community -->

      <div class='single-community'>
      
        <a href="" target="_blank" rel="noopener">
        
          <div class='single-community-box'>
          
            <img src='<?php bloginfo('template_directory');?>/images/comm-childrens.jpg' alt=''/>
          
          </div><!-- single-community-box -->

          <span class='single-community-title'>Children’s Hospital Los Angeles</span><!-- single-community-title -->
        
        </a>
      
      </div><!-- single-community -->

		</div><!-- community-wrapper -->

	</div><!-- page-container -->
	
</div><!-- internal-main -->
		
<?php get_footer(); ?>