<?php

// Load styles and scripts

function add_theme_scripts(){
    //Styles
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    
    //Scripts
    wp_enqueue_script('jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true);
    wp_enqueue_script('skel.min', get_template_directory_uri() . '/assets/js/skel.min.js', array(), 3.0, true);
    wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js', array(), 3.1, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), 3.5, true);
}

    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'secondary-menu' => __( 'Secondary Menu' )
     )
   );
 }
 add_action( 'init', 'register_theme_menus' );

/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );


// Add support for SVG logo

add_filter( 'upload_mimes', 'generate_svg' );
function generate_svg( $svg_mime ) {
    $svg_mime['svg'] = 'image/svg+xml';
    return $svg_mime;
}


// Add theme support for featured image

add_theme_support( 'post-thumbnails' ); 




/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo' );

/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );


//Theme customizer


function themeslug_customize_register( $wp_customize ) {
  // Do stuff with $wp_customize, the WP_Customize_Manager object.
    
    $wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );
}
add_action( 'customize_register', 'themeslug_customize_register' );



function codekracken_widgets_init(){
    register_sidebar(array(
    'name'          =>  __( 'Footer Widget Social', 'codekracken' ),
    'id'            => 'footer-widget-1',
    'description'   => __( 'This is the footer widget'),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
    
    ));
    
    register_sidebar(array(
    'name'          =>  __( 'Footer Widget 2', 'codekracken' ),
    'id'            => 'footer-widget-2',
    'description'   => __( 'This is the footer widget'),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    
    ));
    
    register_sidebar(array(
    'name'          =>  __( 'Footer Widget 3', 'codekracken' ),
    'id'            => 'footer-widget-3',
    'description'   => __( 'This is the footer widget'),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    
    ));
}
add_action( 'widgets_init', 'codekracken_widgets_init');
?>
