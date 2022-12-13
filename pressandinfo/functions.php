<?php 

	// theme support
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	add_theme_support( 'html5' );
	add_theme_support( 'widgets' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'custom-background' );

	// pick the version of theme

	function css_and_js_links(){
		wp_enqueue_style('font-family1','https://fonts.googleapis.com',array(),'1.0');
		wp_enqueue_style('font-family2','https://fonts.gstatic.com',array(),'1.0');
		wp_enqueue_style('font-family3','https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',array(),'1.0');
		wp_enqueue_style('bootstrap5','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css',array(),'1.0');
		wp_enqueue_style('theme-main',get_template_directory_uri().'/style.css',array(),wp_get_theme()->get('Version'));
		wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), true);
	}
	add_action( 'wp_enqueue_scripts', 'css_and_js_links' );

	// register nav menus
	if ( ! function_exists( 'theme_menus' ) ) {

		function theme_menus(){
			register_nav_menus( array(
		    	'primary_menu' => __( 'Header Menu', 'pressandinfo' ),
		    	'footer_menu'  => __( 'Footer Menu', 'pressandinfo' ),
		    	'sidebar_menu'  => __( 'Sidebar Menu', 'pressandinfo' ),
			) );
		}
		add_action( 'after_setup_theme', 'theme_menus', 0 );
	}

	// register sidebar

	function pressandinfo_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Sidebar', 'theme_name' ),
			'id'            => 'sidebar',
			'before_widget' => '<aside id="%1$s" class="sidebar widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		register_sidebar( array(
			'name'          => __( 'Footer', 'theme_name' ),
			'id'            => 'footer',
			'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li></ul>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	add_action( 'widgets_init', 'pressandinfo_widgets_init' );



?>