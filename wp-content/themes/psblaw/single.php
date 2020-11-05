<?php get_header(); ?>

<div id="internal-main">
	
	<h1 class="page-title page-large-content-title"><?php the_title();?></h1>
	
	<div id="page-container" class="two-col no-banner-layout">
		
		<div class="page-content">

			<div class='page-content-inner content'>

				<?php get_template_part( 'loop', 'single' ); ?>

				<div id='related-news'>
				
					<h3 id='related-news-title'>Related News</h3><!-- related-news-title -->

					<ul>
						<li><a href="">Orange Unified School District Sued for Wrongful Death of Student Killed in Campus Golf Cart Crash</a></li>
						<li><a href="">Mother of Manny Perez Seeks Justice for Son Following Death at El Modena H.S.</a></li>
					</ul>
				
				</div><!-- related-news -->
			
			</div><!-- page-content-inner -->
			
		</div><!-- page-content -->

		<?php if(!get_field('disable_sidebar')) {

			get_sidebar('blog');

		} ?>
		
	</div><!-- page-container -->
	
	<div id='more-news-wrapper'>
	
		<span id='more-news-title'>More News or Articles</span><!-- more-news-title -->

		<div id='more-news-slider-wrapper'>
		
			<div class='more-news-arrow more-news-left-arrow'>
			
				<?php echo file_get_contents( get_template_directory() . '/images/arrow-left.svg' ); ?>
			
			</div><!-- more-news-arrow more-news-left-arrow -->

			<div id='more-news-slider'>
			
				<div class='more-news-slide'>
				
					<ul>

						<li><a href="">2010</a></li>
						<li><a href="">Category</a></li>
						<li><a href="">Category Two</a></li>
					
					</ul>

					<div class='more-news-content-wrapper'>

						<a href="">
						
							<div class='more-news-img'>
							
								<img src='<?php bloginfo('template_directory');?>/images/news-image-5.jpg' alt=''/>
							
							</div><!-- more-news-img -->

							<div class='more-news-content'>
							
								<span class='more-news-title'>Orange Unified School District Sued for Wrongful Death of Student Killed in Campus Golf Cart Crash</span><!-- more-news-title -->

								<span class='button-two more-news-read-more' href=''>Read Articles</span><!-- button-two -->
							
							</div><!-- more-news-content -->

							</a>
					
					</div><!-- more-news-content-wrapper -->
				
				</div><!-- more-news-slide -->

				<div class='more-news-slide'>
				
					<ul>

						<li><a href="">2010</a></li>
						<li><a href="">Category</a></li>
						<li><a href="">Category Two</a></li>
					
					</ul>

					<div class='more-news-content-wrapper'>

						<a href="">
						
							<div class='more-news-img'>
							
								<img src='<?php bloginfo('template_directory');?>/images/news-image-5.jpg' alt=''/>
							
							</div><!-- more-news-img -->

							<div class='more-news-content'>
							
								<span class='more-news-title'>Orange Unified School District Sued for Wrongful Death of Student Killed in Campus Golf Cart Crash</span><!-- more-news-title -->

								<span class='button-two more-news-read-more' href=''>Read Articles</span><!-- button-two -->
							
							</div><!-- more-news-content -->

							</a>
					
					</div><!-- more-news-content-wrapper -->
				
				</div><!-- more-news-slide -->

				<div class='more-news-slide'>
				
					<ul>

						<li><a href="">2010</a></li>
						<li><a href="">Category</a></li>
						<li><a href="">Category Two</a></li>
					
					</ul>

					<div class='more-news-content-wrapper'>

						<a href="">
						
							<div class='more-news-img'>
							
								<img src='<?php bloginfo('template_directory');?>/images/news-image-5.jpg' alt=''/>
							
							</div><!-- more-news-img -->

							<div class='more-news-content'>
							
								<span class='more-news-title'>Orange Unified School District Sued for Wrongful Death of Student Killed in Campus Golf Cart Crash</span><!-- more-news-title -->

								<span class='button-two more-news-read-more' href=''>Read Articles</span><!-- button-two -->
							
							</div><!-- more-news-content -->

							</a>
					
					</div><!-- more-news-content-wrapper -->
				
				</div><!-- more-news-slide -->

				<div class='more-news-slide'>
				
					<ul>

						<li><a href="">2010</a></li>
						<li><a href="">Category</a></li>
						<li><a href="">Category Two</a></li>
					
					</ul>

					<div class='more-news-content-wrapper'>

						<a href="">
						
							<div class='more-news-img'>
							
								<img src='<?php bloginfo('template_directory');?>/images/news-image-5.jpg' alt=''/>
							
							</div><!-- more-news-img -->

							<div class='more-news-content'>
							
								<span class='more-news-title'>Orange Unified School District Sued for Wrongful Death of Student Killed in Campus Golf Cart Crash</span><!-- more-news-title -->

								<span class='button-two more-news-read-more' href=''>Read Articles</span><!-- button-two -->
							
							</div><!-- more-news-content -->

							</a>
					
					</div><!-- more-news-content-wrapper -->
				
				</div><!-- more-news-slide -->

				<div class='more-news-slide'>
				
					<ul>

						<li><a href="">2010</a></li>
						<li><a href="">Category</a></li>
						<li><a href="">Category Two</a></li>
					
					</ul>

					<div class='more-news-content-wrapper'>

						<a href="">
						
							<div class='more-news-img'>
							
								<img src='<?php bloginfo('template_directory');?>/images/news-image-5.jpg' alt=''/>
							
							</div><!-- more-news-img -->

							<div class='more-news-content'>
							
								<span class='more-news-title'>Orange Unified School District Sued for Wrongful Death of Student Killed in Campus Golf Cart Crash</span><!-- more-news-title -->

								<span class='button-two more-news-read-more' href=''>Read Articles</span><!-- button-two -->
							
							</div><!-- more-news-content -->

							</a>
					
					</div><!-- more-news-content-wrapper -->
				
				</div><!-- more-news-slide -->

				<div class='more-news-slide'>
				
					<ul>

						<li><a href="">2010</a></li>
						<li><a href="">Category</a></li>
						<li><a href="">Category Two</a></li>
					
					</ul>

					<div class='more-news-content-wrapper'>

						<a href="">
						
							<div class='more-news-img'>
							
								<img src='<?php bloginfo('template_directory');?>/images/news-image-5.jpg' alt=''/>
							
							</div><!-- more-news-img -->

							<div class='more-news-content'>
							
								<span class='more-news-title'>Orange Unified School District Sued for Wrongful Death of Student Killed in Campus Golf Cart Crash</span><!-- more-news-title -->

								<span class='button-two more-news-read-more' href=''>Read Articles</span><!-- button-two -->
							
							</div><!-- more-news-content -->

							</a>
					
					</div><!-- more-news-content-wrapper -->
				
				</div><!-- more-news-slide -->

				<div class='more-news-slide'>
				
					<ul>

						<li><a href="">2010</a></li>
						<li><a href="">Category</a></li>
						<li><a href="">Category Two</a></li>
					
					</ul>

					<div class='more-news-content-wrapper'>

						<a href="">
						
							<div class='more-news-img'>
							
								<img src='<?php bloginfo('template_directory');?>/images/news-image-5.jpg' alt=''/>
							
							</div><!-- more-news-img -->

							<div class='more-news-content'>
							
								<span class='more-news-title'>Orange Unified School District Sued for Wrongful Death of Student Killed in Campus Golf Cart Crash</span><!-- more-news-title -->

								<span class='button-two more-news-read-more' href=''>Read Articles</span><!-- button-two -->
							
							</div><!-- more-news-content -->

							</a>
					
					</div><!-- more-news-content-wrapper -->
				
				</div><!-- more-news-slide -->
			
			</div><!-- more-news-slider -->

			<div class='more-news-arrow more-news-right-arrow'>
			
				<?php echo file_get_contents( get_template_directory() . '/images/arrow-left.svg' ); ?>
			
			</div><!-- more-news-arrow more-news-right-arrow -->
		
		</div><!-- more-news-slider-wrapper -->
	
	</div><!-- more-news-wrapper -->

</div><!-- internal-main -->
		

<?php get_footer(); ?>





