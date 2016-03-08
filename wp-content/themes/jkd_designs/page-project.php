<?php
/*
	Template Name: Project Grid Template 
*/
?>
<?php get_header( 'sml' ); ?>

<div id="project-img-bg">
   <div class="container">
	   <div class="row">
		   
		   <div class="col-md-12">
			    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			    

			    
					<?php the_content(); ?>
					
			    <?php endwhile; else: ?>
			    	
			    	<div class="page-header">
						<h1>Oh no!</h1>
			    	</div>
			    	
			    	<p>You have clicked on a link that is missing.</p>
			    	
			    <?php endif; ?>
			   
		   </div>
	   
		</div>

   </div>

<div class="container">	
    <div class="row"> 
	     
	     <!-- Loop though projects -->
	     <?php 
		     $args = array(
			     'post_type' => 'project'
		     );
		     
		     $the_query = new WP_Query( $args );
 
		  ?>
		
		  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>  
<a href="<?php the_permalink(); ?>">
	
		
	
	
	
		
	<div class="col-sm-6 project-entry">
			 <!--Add thumbnails to potfolio items and resize for responsive-->
			 <?php
				 $thumbnail_id = get_post_thumbnail_id();
				 $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true);
				 ?>
			
			 <!--Link images and titles to individual portfolio page -->  
		  	    <p>
			  	     <img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title();?> project image"></p>
			  	 <div class="project-text">   
			  	<h4><?php the_title(); ?> | <?php the_field('project_type_name_'); ?></h4>
			  	
			  	<p><?php the_field('brief_description_'); ?></p>
			  	
			</div>
	    </div></a>
	    


     <!-- Add line break after 2 portfolio entries -->
     <?php $portfolio_count = $the_query->current_post + 1; ?>
     <?php if ( $portfolio_count %2 == 0 ): ?>
     
    </div>
    
    	<div class="row">
     
		<?php endif; ?>
		<?php endwhile; endif; ?>
     	</div>

</div>

<div class="dotted-border-bottom"></div>
   <!-- Footer -->   
    
    <div id="bg-footer">

	<div class="container">
		
		
		<?php get_footer(); ?>
		
	</div>      
   