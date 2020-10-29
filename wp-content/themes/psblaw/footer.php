<footer id="consultaton">

  <div id='footer-top'>
  
    <span id='footer-form-title'>How can we help you?</span><!-- footer-form-title -->

    <span id='footer-form-descrip'>Fill out the form below for a<br/> no-obligation review of your case</span><!-- footer-form-descrip -->

    <?php gravity_form(3, false, false, false, '', true, 1345); ?>

    <span id='required'><span>*</span>Required Fields</span><!-- required -->
  
  </div><!-- footer-top -->

  <div id='footer-bottom'>
  
    
  
  </div><!-- footer-bottom -->

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



