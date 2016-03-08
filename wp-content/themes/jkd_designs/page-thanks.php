<?php
/*
	Template Name: Thank You Page
*/
?>


<?php get_header( 'sml' ); ?>

   <div class="container">
	   <div class="row thankyou">
		   
		   <div class="col-md-12">
			    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			    
			    	<div class="page-header">
						<h1><?php the_title(); ?></h1>
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



