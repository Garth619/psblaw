<div id="sidebar-wrapper">

  <div id='sidebar-form'>

    <h3 id='sidebar-form-title'><?php the_field('sidebar_form_title', 'option');?></h3><!-- sidebar-form-title -->

    <div id='sidebar-form-descrip'>

      <?php the_field('sidebar_form_description', 'option');?>

    </div><!-- sidebar-form-descrip -->

    <?php $myform = get_field('sidebar_form', 'option');?>

    <?php gravity_form($myform, false, false, false, '', true, 1233);?>

    <span id='sidebar-required'><?php the_field('sidebar_required_verbiage', 'option');?></span>
    <!-- sidebar-required -->

  </div><!-- sidebar-form -->

  <div class="sidebar-box sidebar-pa">

    <?php bulk_sidebar();?>

  </div><!-- sidebar-box -->

</div><!-- sidebar_wrapper -->