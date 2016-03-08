<?php 
	
	
	function theme_styles() {
		wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	}
	
	add_action( 'wp_enqueue_scripts','theme_styles' );
	
	function theme_js() {
		
		global $wp_scripts;
		
		wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
		wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);

		
		$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9');
		$wp_scripts->add_data( 'respons_js', 'conditional', 'lt IE 9');
		
		
		wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
	}
	
	add_action( 'wp_enqueue_scripts', 'theme_js');
	
	// Hide admin bar
	add_filter( 'show_admin_bar', '__return_false');
	
	
	//add support for menus and feat img)
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' ); 
	
	//register new menu to show in WP 
	function register_theme_menus() {
		register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
	}
	add_action( 'init', 'register_theme_menus' );
	
	
	//Add widget areas
	
	function create_widget( $name, $id, $description ) {
		
		register_sidebar(array(
			'name'			 => __( $name ),
			'id'   			 => $id,
			'description'    => __( $description ),
			'before_widget'	 => '<div class="widget">',
			'after_widget'   => '</div>',
			'before_title'   => '<h2>',
			'after_title'   => '</h2>'
		));
	}
	
	//Home page widgets 1/3 each
	create_widget('Front Page Left', 'front-left', 'displays on left of the homepage');
	create_widget('Front Page Center', 'front-center', 'displays on middle of the homepage');
	create_widget('Front Page Right', 'front-right', 'displays on right of the homepage');
	
	
	//Sidebare widget
	create_widget('Sidebar', 'page', 'Displays on side of pages with a side bar  (page.php)');
	
	
	
	
?>