<?php 

/* Template Name: Meet the Team */

get_header(); ?>

<div id="internal_main">
	
	<div class="page_container">

		<h1 id='internal_header'><?php the_title();?></h1><!-- internal_header -->

		<div id='meet_team_wrapper' class="internal_wrapper">
		
		<?php $our_team = get_field( 'our_team' ); ?>
				
				<?php if ( $our_team ): ?>
					
					<?php foreach ( $our_team as $post ):  ?>
						<?php setup_postdata ( $post ); ?>
							
							<div class='single_att'>
			
								<a href='<?php the_permalink();?>'>
			
									<div class='single_att_img'>

									<?php $attorney_profile = get_field( 'attorney_profile' ); ?>
		
									<?php if ( $attorney_profile ) : ?>
		
										<img src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />
	
										<?php else: ?>
		
										<div class="placeholder">

											<div class='placeholder_inner'></div><!-- placeholder_inner -->
			
											<img src='<?php bloginfo('template_directory');?>/images/placeholder.jpg' alt="Placeholder Profile Image"/>

										</div><!-- placeholder -->

									<?php endif;?>
									
									<div class='single_att_overlay 	<?php if(!$attorney_profile ){echo "placeholder_overlay";}?>'>
					
										<span class='view_profile'>View Profile</span><!-- view_profile -->
					
									</div><!-- single_att_overlay -->
				
								</div><!-- single_att_img -->

								<div class='single_att_title_wrapper'>
				
									<span class='single_att_name'><?php the_title();?></span><!-- single_att_name -->

									<span class='single_att_position'><?php the_field( 'position' ); ?></span><!-- single_att_position -->
				
								</div><!-- single_att_title_wrapper -->
			
						</a>
		
					</div><!-- single_att -->
							
							
						<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

		</div><!-- video_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->
					 	
<?php get_footer(); ?>
