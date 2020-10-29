<footer id="consultaton">

  <div id='footer-inner'>
  
    <div id='footer-top'>
    
      <span id='footer-form-title'>How can we help you?</span><!-- footer-form-title -->

      <span id='footer-form-descrip'>Fill out the form below for a<br/> no-obligation review of your case</span><!-- footer-form-descrip -->

      <?php gravity_form(3, false, false, false, '', true, 1345); ?>

      <span id='required'><span>*</span>Required Fields</span><!-- required -->
    
    </div><!-- footer-top -->

    <div id='footer-bottom'>
    
      <span id='footer-bottom-title'>Panish Shea & Boyle, LLP is here to help - once and for all™</span><!-- footer-bottom-title -->

      <div id='footer-bottom-col-wrapper'>
      
        <div class='footer-bottom-col'>
        
          <span class='footer-bottom-col-title'>Los Angeles</span><!-- footer-bottom-title -->

          <span class='footer-bottom-content'>11111 Santa Monica Blvd #700,<br/> Los Angeles, CA 90025</span><!-- footer-bottom-content -->

          <a class='footer-bottom-content' href="tel:+13104771700">(310) 477-1700</a><!-- footer-bottom-content -->

          <a class='footer-bottom-content get-directions-button' href="https://www.google.com/maps/place/11111+Santa+Monica+Blvd+%23700,+Los+Angeles,+CA+90025/@34.0484137,-118.4476138,17z/data=!3m1!4b1!4m5!3m4!1s0x80c2bb77512ee2f7:0xe3c37c4d687a647a!8m2!3d34.0484137!4d-118.4454251" target="_blank" rel="noopener">Directions</a><!-- get-directions-button -->
        
        </div><!-- footer-bottom-col -->

        <div class='footer-bottom-col'>
        
          <span class='footer-bottom-col-title'>Newport Beach</span><!-- footer-bottom-title -->

          <span class='footer-bottom-content'>5160 Birch St #210,<br/> Newport Beach, CA 92660</span><!-- footer-bottom-content -->

          <a class='footer-bottom-content' href="tel:+9494685777">(949) 468-5777</a><!-- footer-bottom-content -->

          <a class='footer-bottom-content get-directions-button' href="https://www.google.com/maps/place/5160+Birch+St+%23210,+Newport+Beach,+CA+92660/@33.6646878,-117.8593905,17z/data=!3m1!4b1!4m5!3m4!1s0x80dcde5dd5f3fa9d:0xff9dd9da0a4ce9ce!8m2!3d33.6646834!4d-117.8571965" target="_blank" rel="noopener">Directions</a><!-- get-directions-button -->
        
        </div><!-- footer-bottom-col -->

        <div class='footer-bottom-col'>
        
          <div class='footer-bottom-sub-col'>
          
            <span class='footer-bottom-col-title'>Toll Free</span><!-- footer-bottom-title -->

            <a class='footer-bottom-content' href="tel:+8884986487">(888) 498-6487</a><!-- footer-bottom-content -->
          
          </div><!-- footer-bottom-sub-col -->

          <div class='footer-bottom-sub-col'>
          
            <span class='footer-bottom-col-title'>Fax</span><!-- footer-bottom-title -->

            <a class='footer-bottom-content'>(888) 498-6487</a><!-- footer-bottom-content -->
          
          </div><!-- footer-bottom-sub-col -->

          <div class='footer-bottom-sub-col'>
          
            <div id='social-media-wrapper'>
            
              <a href="" target="_blank" rel="noopener">

                <?php echo file_get_contents( get_template_directory() . '/images/social-ig.svg' ); ?>
              
              </a>

              <a href="" target="_blank" rel="noopener">

              <?php echo file_get_contents( get_template_directory() . '/images/social-twitter.svg' ); ?>
            
            </a>

            <a href="" target="_blank" rel="noopener">

              <?php echo file_get_contents( get_template_directory() . '/images/social-fb.svg' ); ?>
            
            </a>
            
            </div><!-- social-media-wrapper -->
          
          </div><!-- footer-bottom-sub-col -->
        
        </div><!-- footer-bottom-col -->
      
      </div><!-- footer-bottom-col-wrapper -->
      
    </div><!-- footer-bottom -->

    <div id='copyright'>
    
      <div id='copyright-inner'>
      
        <ul>
          <li>Copyright &copy; <?php echo date("Y"); ?> Panish Shea & Boyle</li>
          <li>All rights reserved.</li>
          <li><a href="">DISCLAIMER</a></li>
          <li><a href="" target="_blank" rel="noopener">SITEMAP</a></li>
          <li><a href="" target="_blank" rel="noopener">Google Maps</a></li>
        </ul>

        <a id="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
    
          <img src='<?php bloginfo('template_directory');?>/images/ilawyerlogo.svg' alt=''/>
    
        </a>
      
      </div><!-- copyright-inner -->
    
    </div><!-- copyright -->

  </div><!-- footer-inner -->

</footer>

<?php wp_footer();?>

<?php the_field('footer_scripts','option');?>

<?php if(is_front_page()) { ?>

<script type="text/javascript">

jQuery(document).ready(function ($) {

  // above the fold home functions

  $("body").addClass("ready");
  

});

// load all other scripts

function delayScript(src, timeout, attributes) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const scriptElem = document.createElement("script");
      scriptElem.src = src;
      for (const key in attributes) {
        const attribute = key;
        const value = attributes[key];
        scriptElem.setAttribute(attribute, value ? value : "");
      }
      scriptElem.addEventListener("readystatechange", () => {
        resolve();
      });
      document.head.appendChild(scriptElem);
    }, timeout);
  });
}

delayScript("<?php bloginfo('template_directory');?>/js/custom-min.js", 2000); 

<?php if(get_field('live_chat','option')) { ?>

delayScript("<?php the_field('live_chat','option');?>", 2000); 

<?php } ?>

</script>

<?php } ?>

</body>
</html>



