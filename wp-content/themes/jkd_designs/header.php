<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="<?php bloginfo('template_directory');?>/img/favicon.png">
    <title>
    <?php wp_title('|', true, 'right' ); ?>
    <?php bloginfo('name'); ?>
    </title>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

 
    
    <?php wp_head(); ?>
    
<head>
	
	<! Change Nav class on scroll -->   
	    
	   <script>
		    jQuery(window).scroll(function() {    
	    var scroll = jQuery(window).scrollTop();
	
	    if (scroll >= 500) {
	
	        jQuery("#navbar").addClass("scrolled navbar-static-top");
	    } else {
		    jQuery("#navbar").removeClass("scrolled");
	    }
	});
		</script>	
	<! -->
	
	<! Prevent content hiding behing sml header -->		
			
	  <script>
	    var shiftWindow = function() { scrollBy(0, -120) };
	    window.addEventListener("hashchange", shiftWindow);
	    function load() { if (window.location.hash) shiftWindow(); }
	  </script>
	</head>
	<body onload="load()">
	
	<! -->
	
</head>

  <body <?php body_class(); ?>>
<div id="top"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
			
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
	        
	        <?php 
		        $args = array(
			        'menu'   => 'header-menu',
			        'menu_class' => 'nav navbar-nav',
			        'container' => 'false'
		        );
		        
		        wp_nav_menu( $args );
		        ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
   