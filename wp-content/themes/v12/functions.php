<?php
define('V12_VERSION', '1.1.0');
function v12_theme_support(){
  /* Feed link support */
  add_theme_support('automatic-feed-links');

  /* Post Thumbnails */
  add_theme_support('post-thumbnails');

  add_theme_support( 'title-tag' );

  // set languages directory
  load_theme_textdomain( 'v12', get_template_directory() . '/languages' );

  // Custom logo
  add_theme_support( 'custom-logo', array(
   'height'      => 50,
   'width'       => 110,
   'flex-width' => true,
  ));
}
add_action( 'after_setup_theme', 'v12_theme_support' );

add_image_size('v12_848', 848, 9999, false);


/* Main menu */
add_action( 'init', 'v12_register_menu' );
function v12_register_menu() {
  register_nav_menu( 'primary', __('Primary Menu', 'v12') );
}
require(get_template_directory() .'/functions/custom-menu-walker.php');

/* Sidebars */
function v12_register_sidebars(){
	register_sidebar(array(
		'name' => __('Sidebar', 'v12'),
		'id' => 'sidebar',
		'description' => __('This is a regular widgetized sidebar', 'v12'),
		'before_widget' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
}
add_action( 'widgets_init', 'v12_register_sidebars' );

/* Adding styles */
function v12_load_scripts(){
	wp_enqueue_style('v12_google_font', 'https://fonts.googleapis.com/css?family=Raleway:400,700', false, V12_VERSION, 'screen');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/lib/bootstrap/css/bootstrap.min.css', array('v12_google_font'), V12_VERSION, 'screen');
	wp_enqueue_style('v12_style', get_stylesheet_uri(), array('bootstrap'), V12_VERSION, 'screen');
	wp_enqueue_style('v12_style_single', get_template_directory_uri().'/css/single.css', array('v12_style'), V12_VERSION, 'screen');
	wp_enqueue_style('v12_style_page', get_template_directory_uri().'/css/page.css', array('v12_style'), V12_VERSION, 'screen');
  wp_enqueue_script( 'htmlshiv', get_template_directory_uri().'/lib/html5shiv/html5shiv.min.js', false, V12_VERSION, false );
  wp_script_add_data( 'htmlshiv', 'conditional', 'lt IE 9' );
  wp_enqueue_script( 'respondjs', get_template_directory_uri().'/lib/respond/respond.min.js', array('htmlshiv'), V12_VERSION, false );
  wp_script_add_data( 'respondjs', 'conditional', 'lt IE 9' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/lib/bootstrap/js/bootstrap.min.js', array('jquery', 'respondjs'), V12_VERSION, true );
}
add_action('wp_enqueue_scripts', 'v12_load_scripts');

/* Content width */
global $content_width;
if ( ! isset( $content_width ) ) {
	$content_width = 848;
}

/* Adding comment form js */
function v12_enqueue_comments_reply() {
	if( get_option( 'thread_comments' ) )  {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'comment_form_before', 'v12_enqueue_comments_reply' );
?>
