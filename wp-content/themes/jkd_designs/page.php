<!-- Single page with sidebar (auto template for mew pages)-->

<?php get_header( 'sml' ); ?>

   <div class="container">
	   <div class="row">
		   
		   <div class="col-md-9">
			    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			    
			    	<div class="page-header">
						<h1><?php the_title(); ?></h1>
			    	</div>
			    
					<?php the_content(); ?>
					
			    <?php endwhile; else: ?>
			    	
			    	<div class="page-header">
						<h1>Oh no!</h1>
			    	</div>
			    	
			    	<p>You clicked on a link that is broken!</p>
			    	
			    <?php endif; ?>
			   
		   </div>
	   
		   <? get_sidebar(); ?>
		</div>
   </div>


   <!-- Footer -->   
    
    <div id="bg-footer">

	<div class="container">
		
		
		<?php get_footer(); ?>
		
	</div>