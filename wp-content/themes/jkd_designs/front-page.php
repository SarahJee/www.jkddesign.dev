<?php get_header(); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
	      
	    <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
	      
	      	<img src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/jkd_logo.png" alt="JKD Design logo" id="logo">
	      	<h3>A creative thinking studio<br /> for branding, graphic & web design<h3>
			<?php the_content(); ?>
			
			<a href="#welcome"><img src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/down-arrow.png" alt="downwards arrow" id="down-arrow" class="animated bounce">
			</a>
			
						
        <?php endwhile; endif;?>
      </div>
    </div>
<div class="dotted-border"></div>

	<div id="bg-dots">
	    <div class="container">
		    
<!-- Welcome
================================================== -->
	<div id="welcome"></div>
			<div class="row welcome">
				
		      
		      <h1>Welcome</h1>
		      <h2>Welcome to JKD Design: a Fremantle-based design studio that is built on creative thinking and strategic solutions for branding, graphic and web design.</h2> 
	        
		        <div class="col-md-6">
			        <p>Since 2009, JKD Design has worked with clients from a diverse range of industries on creatively-driven projects including branding design, website design, infographic design, packaging design and signage design. JKD Design believes that each project is entirely unique and that’s exactly where we specialise; delivering a personal and bespoke solution that is tailor-made to your design needs.<br />
			You’re in good hands here.</p>
		        </div>
		        
		        <div class="col-md-6">
					<p>JKD Design brings the creativity and strategy to the table that is an essential asset to any business. By working closely with all of our clients, the design we create carefully articulates and communicates the personality of each business we work with. In other words, we strive to make you look the best you can be and give your business that distinctive edge.
			If you’re interested in working together, or perhaps just saying hello to chat about your project, get in touch.</p>
		        </div>
		    
		    </div><!--End row welcome -->    
		    
		    <div class="row welcome-lead-in">
			     
			    <div class="col-md-3 col-sm-6 col-xs-12">
		        <img src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/home-project1.png" alt="project image" alt="JKD Design Project Image 1">
			    </div><!--End row col md 3 --> 
			    
			    <div class="col-md-3 col-sm-6 col-xs-12">
		        <img src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/home-project2.png" alt="project image" alt="JKD Design Project Image 2">
			    </div><!--End row col md 3 --> 
			    
			    <div class="col-md-3 col-sm-6 col-xs-12">
		        <img src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/home-project3.png" alt="project image" alt="JKD Design Project Image 3">
			    </div><!--End row col md 3 --> 
			    
			    <div class="col-md-3 col-sm-6 col-xs-12">
		        <img src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/home-project4.png" alt="project image" alt="JKD Design Project Image 4">
			    </div><!--End row col md 3 --> 
			    
			   </div><!--End row Lead In -->  
			   
			<div class="row" id="project-link">
				<h4><a href="<?php bloginfo( 'url' ); ?>/projects">View All Projects<span class="glyphicon glyphicon-circle-arrow-right"></span></a></h4>
			</div>
			    

		        
	        
    	</div><!--End container -->
	</div><!--End bg-dots -->
	
	
<!-- Services
================================================== -->
    <div id="services"></div>
    <div id="bg-grunge">  
    <div class="container">
       <div class="row services">
	    <h1>Services</h1> 
  
      <!-- Three columns of text below the carousel -->
      <div class="row">
	     <!-- /.col-lg-4 -->
        <div class="col-sm-4">
          <img class="img-circle" src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/icon-1.png" alt="Branding & Identity Design" width="165" height="165">
          <h2>Branding & Identity Design</h2>
          <p>Your brand is your greatest asset; from a brand refinement to designing a new brand from scratch, you’re in the right place. We establish brands that not only make an impact, but that also effectively communicate a business’s values.</p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4">
          <img class="img-circle" src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/icon-2.png" alt="Website Design" width="165" height="165">
          <h2>Website Design</h2>
          <p>Creative solutions that unite businesses and consumers with good design and experiences is what it’s all about: this is central to JKD Design’s philosophy. A good website starts with personalised design that is user-friendly with carefully considered functionality.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4">
          <img class="img-circle" src="<?php  echo get_site_url(); ?>/wp-content/themes/jkd_designs/img/icon-3.png" alt="Graphic & Print Design" width="165" height="165">
          <h2>Graphic & Print Design</h2>
          <p>The best and most effective ideas are simple ones; simplicity is the key! From vectors to PMS colours we’ve got the industry know-how and creative skills to get your project off the ground.</p>
 
        </div></div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
       </div>
     

       
<!-- Carousel
================================================== -->

	<div id="testimonials"></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol><h1>Testimonials</h1>
      <div class="carousel-inner" role="listbox">
	      
	      <?php // check if the repeater field has rows of data
		      
		    $count = 0;
		    
			if( have_rows('testimonials') ){
				//loop through
			    while ( have_rows('testimonials') ){
				//define the row
			    the_row();
				   ?> 
				<div class="item 
					<?php if ($count==0) {echo "active";} ?>"
				>
                    <div class="container">
	                     <div class="carousel-caption">
						 <p><?php the_sub_field('testimony') ?></p>
						 <p><?php the_sub_field('name') ?></p>

            		</div>
          		</div>
        </div>
        <?php
	        $count=$count+1;
			}
			}
			?>         

        
        </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<!-- About
================================================== -->
	<div id="about"></div>
	<div id="bg-grey">
	    <div class="container">
		    
	        <div class="row about">
		      <h1>About</h1>
		    
		    <div class="col-md-6">
	        <p>JKD Design believes that each brand has an entirely unique personality. Design that is effective and memorable involves much more than the visual aesthetic. At its core, it is about creative and strategic solutions that are as unique as the brand personality itself.
At the beginning, we like to have a one-on-one chat over coffee to begin the research process and to develop a comprehensive understanding of your business, brand and marketplace. The ability to deliver a message that is both clear and effective is paramount in reaching a target market in any industry. Only then do the creative ideas start flowing; ideas that are researched, relevant and distinct.</div>
	        
	        <div class="col-md-6">
			<p>We believe that with every project collaboration is key; working closely with a client develops a solid relationship and in turn a thorough understanding of the brand in order to achieve a final outcome that surpasses objectives and simply gets results.</p>
<p>We work with a community of professional experts, from web developers to printers, and we identify the right expertise to bring your project to fruition - great people are the key to great work.</p>
	        </div>
	
	       </div>
    </div>  
	</div> 

 
   
    <!-- Footer -->   
    
 
    <div id="contact"></div>
    <div class="dotted-border-bottom"></div>
    <div id="bg-footer">

	<div class="container">
		
		
		<?php get_footer(); ?>
		
	</div>