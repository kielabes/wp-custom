<?php 
// Loading all the css files
function load_stylesheets(){
  // Bootstrap Css
  wp_register_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');
  // Custom Css
  wp_register_style('customstyle', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all');
  wp_enqueue_style('customstyle');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery(){
  
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', '', 1, true);


}
add_action('wp_enqueue_scripts', 'include_jquery');


// Loading all the js files
function load_js(){
  // jQuery first, then Popper.js, then Bootstrap JS
  wp_register_script( 'slim', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', null, null, true );
  wp_enqueue_script('slim');

  wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js', null, null, true );
  wp_enqueue_script('popper');

  // Bootstrap Js
  wp_register_script('bootstrapjs', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', '', 1, true);
  wp_enqueue_script('bootstrapjs');
  
  // Custom Js
  wp_register_script( 'customjs', get_theme_file_uri( '/assets/js/scripts.js' ), array( 'jquery' ), '1.0', true );
  wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_js');

// Adding a menu
add_theme_support('menus');

register_nav_menus( array(
  'main-menu' => __( 'Main Menu', 'CustomTheme' )
) );

// Bootstrap Walker
require get_template_directory() . '/inc/bootstrap-navwalker.php';


// Adding Featured Image
add_theme_support('post-thumbnails');

// Images sizes
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);