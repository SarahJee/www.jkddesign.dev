<?php
/*
	Template Name: Single Portfolio Page Template
*/
?>
<?php get_header( 'sml' ); ?>
<div id="project-img-bg"></div>
	<div id="project-bg-grey">
	
   <div class="container">
	   <div class="row">
		   
		   
			    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 
			   
			<div class="col-md-12 project-intro">
			
				<h4><?php the_title(); ?> | <?php the_field('project_type_name'); ?></h4>
				<?php the_field('single_project_page_description'); ?> 	
			</div>
				
	    </div>
   </div>
</div>

<div id="project-img-bg">
	
   <div class="container">
	   <div class="row">
		   
			<div class="col-md-12 project-images">
			
				<?php $image = get_field('main_image_spread');

					if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>
				
			</div>
			
			    <?php endwhile; endif; ?>
	    				    
	   
		</div>
		
	   <div class="row">
		   
		   
		   <div class="col-md-12">
			    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			    
					
			    <?php endwhile; endif; ?>
			    	
					<div class="col-x9-9 prev-next">
					
					<?php next_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>' );?>
					<?php previous_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>' );?>
					<br />
					<a href="<?php bloginfo('url');  ?>/?p=72">View all Projects</a>
					
					</div>  
		   </div> 				    
			   
		</div>
		   

	   
	</div>
</div>


<div class="dotted-border-projects"></div>

   <!-- Footer -->   
    
    <div id="bg-footer">

	<div class="container">
		
		
		<?php get_footer(); ?>
		
	</div>


