<footer id='consultation'>

  <div id='footer_form_wrapper'>

    <span id='footer_from_title'><?php the_field( 'form_title','option'); ?></span><!-- footer_from_title -->

    <span class='double_line'></span><!-- double_line -->
  
    <?php gravity_form(3, false, false, false, '', true, 1245); ?>

    <span class='required'><?php the_field( 'required_field_verbiage','option'); ?></span><!-- required -->
  
  </div><!-- footer_form_wrapper -->

  <?php if(!is_page_template('page-templates/template-contact.php')) {

    get_template_part('page-templates/includes/template','locations');

  } ?>
  
  <div id='copyright_wrapper'>

    <div id='copyright_inner'>
    
      <ul>
        <li>&copy; COPYRIGHT <?php echo date('Y'); ?> <?php the_field( 'copyright_law_firm_name','option'); ?></li> 

        <?php if(get_field('all_rights_reserved','option')) {?>

          <li><?php the_field( 'all_rights_reserved','option'); ?></li>

        <?php } ?>
        
        <?php if(get_field('disclaimer','option') && get_field('disclaimer_title','option')) { ?>

         <li>
            <a href="<?php the_field( 'disclaimer','option'); ?>"><?php the_field( 'disclaimer_title','option'); ?></a>
        </li>

        <?php } ?>

        <?php if(get_field('privacy_policy','option') && get_field('privacy_policy_title','option')) { ?>

          <li><a href="<?php the_field( 'privacy_policy','option'); ?>"><?php the_field( 'privacy_policy_title','option'); ?></a></li>

        <?php } ?>

      </ul>

      <a id='ilawyer' href="//ilawyermarketing.com" target="_blank" rel="noopener">

      <?php echo file_get_contents( get_template_directory() . '/images/ilawyer.svg' ); ?>
    
    </a><!-- ilawer-->
    
    </div><!-- copyright_inner -->

  </div><!-- copyright_wrapper -->

</footer><!-- consultation -->