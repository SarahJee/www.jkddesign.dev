<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
	      
	    <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
	      
	      	<img src="http://www.jkddesign.dev/wp-content/themes/jkd_designs/img/jkd_logo.png" alt="JKD Design logo" id="logo">
	      	<h3>A creative thinking studio<br /> for branding, graphic & web design<h3>
			<?php the_content(); ?>
        
        <?php endwhile; endif;?>
      </div>
    </div>
    
	
	<div id="bg-dots">
	    <div class="container">
		    
	    <!-- Welcome Section -->
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
	
	       </div>
    </div>  
	</div> 
    <!-- Services Section --> 
    <div id="bg-grunge">  
    <div class="container">
       <div class="row services">
	    <h1>Services</h1> 
	   
      <!-- Three columns of text below the carousel -->
      <div class="row">
	     <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="http://www.jkddesign.dev/wp-content/themes/jkd_designs/img/icon-1.png" alt="Branding & Identity Design" width="165" height="165">
          <h2>Branding & Identity Design</h2>
          <p>Your brand is your greatest asset; from a brand refinement to designing a new brand from scratch, you’re in the right place. We establish brands that not only make an impact, but that also effectively communicate a business’s values.</p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="http://www.jkddesign.dev/wp-content/themes/jkd_designs/img/icon-2.png" alt="Website Design" width="165" height="165">
          <h2>Website Design</h2>
          <p>Creative solutions that unite businesses and consumers with good design and experiences is what it’s all about: this is central to JKD Design’s philosophy. A good website starts with personalised design that is user-friendly with carefully considered functionality.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="http://www.jkddesign.dev/wp-content/themes/jkd_designs/img/icon-3.png" alt="Graphic & Print Design" width="165" height="165">
          <h2>Graphic & Print Design</h2>
          <p>The best and most effective ideas are simple ones; simplicity is the key! From vectors to PMS colours we’ve got the industry know-how and creative skills to get your project off the ground.</p>
 
        </div></div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
       </div>
       
       
     <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
                    <div class="container">
            <div class="carousel-caption">

              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>

            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">

              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

            </div>
          </div>
        </div>
        <div class="item">

          <div class="container">
            <div class="carousel-caption">

              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

            </div>
          </div>
        </div>
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

   
    <!-- Footer -->    
	<div class="container">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<?php get_footer(); ?>
	</div>