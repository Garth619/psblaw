
<div id='att_sidebar_wrapper'>

<div id='att_sidebar_inner'>

<?php get_template_part('page-templates/includes/att_bio_template_parts/template','profile_image'); ?>

	<?php if ( have_rows( 'attorney_accolades' ) ) : ?>

		<div id='att_sidebar_lists'>

		<?php while ( have_rows( 'attorney_accolades' ) ) : the_row(); ?>
		
			<div class='att_sidebar_list'>

				<span class='att_list_title'><?php the_sub_field( 'title' ); ?></span><!-- att_list_title -->

				<span class='double_line'></span><!-- double_line -->

				<ul class="att_list_menu">

				<?php if ( have_rows( 'list_items' ) ) : ?>

					<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>

						<li><?php the_sub_field( 'list_item' ); ?>
				
							<?php if ( have_rows( 'sub_items' ) ) : ?>

								<ul class="att_list_sub_menu">
					
									<?php while ( have_rows( 'sub_items' ) ) : the_row(); ?>
					
										<li><?php the_sub_field( 'sub_item' ); ?></li>

									<?php endwhile; ?>

								</ul>
				
							<?php endif; ?>

						</li>

					<?php endwhile; ?>

				<?php endif; ?>

				</ul><!-- att_list_menu -->

			</div><!-- att_sidebar_list -->

		<?php endwhile; ?>

		</div><!-- att_sidebar_lists -->

	<?php endif; ?>
	
</div><!-- att_sidebar_inner -->

</div><!-- att_sidebar_wrapper -->

