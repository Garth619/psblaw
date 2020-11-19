<?php get_header();?>

<div id="internal-main">

  <div class='page-title-wrapper'>

    <h1 class="page-title page-large-content-title"><?php the_title();?></h1>

  </div><!-- page-title-wrapper -->

  <div id="page-container" class="two-col no-banner-layout">

    <div class="page-content">

      <div class='page-content-inner content'>

        <?php get_template_part('loop', 'single');?>

        <?php $related_news_list = get_field('related_news_list');?>

        <?php if ($related_news_list): ?>

        <div id='related-news'>

          <h3 id='related-news-title'><?php the_field('related_news_title');?></h3><!-- related-news-title -->

          <ul>
            <?php foreach ($related_news_list as $post): ?>
            <?php setup_postdata($post);?>

            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>

            <?php endforeach;?>
            <?php wp_reset_postdata();?>
          </ul>

        </div><!-- related-news -->

        <?php endif;?>

      </div><!-- page-content-inner -->

    </div><!-- page-content -->

    <?php if (!get_field('disable_sidebar')) {

    get_sidebar('blog');

}?>

  </div><!-- page-container -->

  <?php get_template_part('page-templates/includes/template', 'morenews-slider');?>

</div><!-- internal-main -->


<?php get_footer();?>