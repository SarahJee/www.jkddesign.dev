<?php
/*
	Template Name: Thank You Page Template
*/
?>

<?php get_header( 'sml' ); ?>

<div class="thank-you">
	<img src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/bg-home.jpg" id="bg" alt="">
    <div class="container">
	    <div class="row">
		   
		   <div class="col-md-12">
			    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			    

				    	 	<img src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/jkd_logo.png" alt="JKD Design logo" id="logo">

				    <div class="connect-icons">
					    
					    <h3>Thanks for saying hello, <br />I'll be right back to you!</h3>
					    
						<a href="mailto:hello@jkddesign.com"><img class="mail-icon" src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/mail-icon.png" alt="Branding & Identity Design" width="40" height="40"></a>
						<a href="tel:0450085021"><img class="phone-icon" src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/phone-icon.png" alt="Branding & Identity Design" width="40" height="40"></a>
						<a href="https://www.facebook.com/jkddesign"><img class="fb-icon" src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/fb-icon.png" alt="Branding & Identity Design" width="40" height="40"></a>
						<a href="https://www.linkedin.com/in/josie-dickinson-70711247"><img class="in-icon" src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/in-icon.png" alt="Branding & Identity Design" width="40" height="40"></a>
							
						
			    	</div>
			    
					<?php the_content(); ?>
					
			    <?php endwhile; else: ?>
			    	
			    	<div class="page-header">
						<h1>Oh no!</h1>
			    	</div>
			    	
			    	<p>This message displays because there is no content on this page</p>
			    	
			    <?php endif; ?>
			   
		    </div>
	   
		</div>
    </div>	
</div>
<div class="dotted-border-bottom"></div>






