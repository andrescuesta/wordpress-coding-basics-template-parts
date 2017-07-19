<?php
	
/**********************************************************************************
tutsplus_register_menus - register menus
**********************************************************************************/
function tutsplus_register_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Primary' ) )
  );
}
add_action( 'init', 'tutsplus_register_menus' );


/**********************************************************************************
tutsplus_widgets_init - register widgets
**********************************************************************************/
function tutsplus_widgets_init() {
	// widget area in header
	register_sidebar (array(
		'name'          => __('Header Widget Area','rm'),
		'id'            => "header-widget-area",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>' )
		);
	// main sidebar
	register_sidebar (array(
		'name'          => __('Sidebar','rm'),
		'id'            => "sidebar-widget-area",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>' )
		);
	// first footer widget area
	register_sidebar (array(
		'name'          => __('First Footer Widget Area','rm'),
		'id'            => "footer-first-widget-area",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>' )
		);
	// second footer widget area
	register_sidebar (array(
		'name'          => __('Second Footer Widget Area','rm'),
		'id'            => "footer-second-widget-area",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>' )
		);
	// third footer widget area
	register_sidebar (array(
		'name'          => __('Third Footer Widget Area','rm'),
		'id'            => "footer-third-widget-area",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>' )
		);
	// fourth footer widget area
	register_sidebar (array(
		'name'          => __('Fourth Footer Widget Area','rm'),
		'id'            => "footer-fourth-widget-area",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>' )
		);
}
add_action( 'init', 'tutsplus_widgets_init');

/**********************************************************************************
tutsplus_theme_support - adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
**********************************************************************************/
function tutsplus_theme_support() {

  /* post formats */
  add_theme_support( 'post-formats', array( 'aside', 'quote' ) );
  
  /* post thumbnails */
  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'project' ) );

  /* HTML5 */
  add_theme_support( 'html5' );

  /* automatic feed links */
  add_theme_support( 'automatic-feed-links' );

}
add_action( 'after_setup_theme', 'tutsplus_theme_support' );

/**********************************************************************************
tutsplus_theme_i18n - registers text domain for i18n
**********************************************************************************/
function tutsplus_theme_i18n() {
	
	load_theme_textdomain( 'tutsplus', get_template_directory() . '/languages');

}
add_action( 'after_setup_theme', 'tutsplus_theme_i18n' );