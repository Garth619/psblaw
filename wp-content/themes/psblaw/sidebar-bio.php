<div id="sidebar-wrapper">

  <div id='bio-desktop'>

    <?php get_template_part('page-templates/includes/template', 'att-profile-box');?>

  </div><!-- bio-mobile -->

  <?php if (get_field('attorney_accolades')) {?>

  <div class="sidebar-box sidebar-bio">

    <div class='widget'>

      <h3><?php the_field('verdicts_and_settlements_title');?></h3>

      <div id='bio-list'>

        <?php if (get_field('sidebar_list_intro')) {?>

        <span id='bio-list-decrip'><?php the_field('sidebar_list_intro');?></span><!-- bio-list-decrip -->

        <?php }?>

        <?php if (have_rows('attorney_accolades')): ?>
        <ul>
          <?php while (have_rows('attorney_accolades')): the_row();?>
          <li><a><?php the_sub_field('list_item');?></a></li>
          <?php endwhile;?>
        </ul>
        <?php endif;?>


      </div><!-- bio-list -->


    </div><!-- widget -->

    <?php }?>

    <?php if (get_field('attorney_accolades_slider')) {?>

    <div class='widget articles'>

      <h3><?php the_field('articles_by');?> <?php the_title();?></h3>

      <div id='bio-slider-wrapper'>

        <?php if (have_rows('attorney_accolades_slider')): ?>
        <div id='bio-slider'>
          <?php while (have_rows('attorney_accolades_slider')): the_row();?>

          <div class='bio-slide'>

            <span class='bio-slide-title'><?php the_sub_field('title');?></span><!-- bio-slide-title -->

            <div class='bio-slide-content content'>

              <?php the_sub_field('content');?>

            </div><!-- bio-slide-content content -->

          </div><!-- bio-slide -->

          <?php endwhile;?>
        </div><!-- bio-slider -->
        <?php endif;?>

        <div class='bio-slider-arrow-wrapper'>

          <div class='bio-arrow bio-arrow-left'>

            <?php echo file_get_contents(get_template_directory() . '/images/arrow-left.svg'); ?>

          </div><!-- bio-arrow bio-arrow-left -->

          <div class='bio-arrow bio-arrow-right'>

            <?php echo file_get_contents(get_template_directory() . '/images/arrow-right.svg'); ?>

          </div><!-- bio-arrow bio-arrow-right -->

        </div><!-- bio-slider-arrow -->

      </div><!-- bio-slider-wrapper -->

    </div><!-- widget -->

    <?php }?>

  </div><!-- sidebar-box -->

</div><!-- sidebar_wrapper -->