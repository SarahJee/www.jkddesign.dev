<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
    <?php wp_title('|', true, 'right' ); ?>
    <?php bloginfo('name'); ?>
    </title>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
<!-- Add class .second-header for header-sml.php -->
    <nav class="navbar navbar-inverse second-header">
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
<a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/header-logo.png" alt="jkd design logo" width="188px" height="59px" class="center-block"></a>
      </div>        
    </nav>
    <div class="dotted-border"></div>