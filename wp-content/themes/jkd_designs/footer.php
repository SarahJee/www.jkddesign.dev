

    
	

		    

<footer>
	   <!-- Contact Form/Footer
================================================== -->

	
		<h1>Say hello!</h1>
		    
		<div class="row contact">
	    <p>If you’re interested in working together, or perhaps just saying hello to chat about your project, get in touch with JKD Design on <a href="tel:0450085021" id="tel">0450 085 021</a> or through the links & contact form below:</p>
	    </div>
	    <div class="connect-icons">
		    <a href="mailto:hello@jkddesign.com"><img class="mail-icon" src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/mail-icon.png" alt="Branding & Identity Design" width="40" height="40"></a>
		    <a href="tel:0450085021"><img class="phone-icon" src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/phone-icon.png" alt="Branding & Identity Design" width="40" height="40"></a>
		    <a href="https://www.facebook.com/jkddesign"><img class="fb-icon" src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/fb-icon.png" alt="Branding & Identity Design" width="40" height="40"></a>
		    <a href="https://www.linkedin.com/in/josie-dickinson-70711247"><img class="in-icon" src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/in-icon.png" alt="Branding & Identity Design" width="40" height="40"></a>
	    </div>
	    
	 <?php   if ( function_exists( 'ccf_output_form' ) ) {
    ccf_output_form( 45 );
	}	
	?>
		<div class="row col-md-12">
			<a href="#top"><img src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/up-arrow.png" alt="upwards arrow" id="up-arrow"></a>  
			</div>
	</div> 


	
<!-- Credits Footer -->	
<div class="container credits">
        <p>&copy; <?php bloginfo( 'name'); ?> <?php echo date ('Y'); ?><br />
        <h5> Jkd Design</h5>

      </footer>
    </div> <!-- /container -->


       <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>


