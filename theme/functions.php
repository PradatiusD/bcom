<?php
if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
  // For Debugging on Localhost
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  
  // For live reloading
  function local_livereload(){
    wp_register_script('livereload', 'http://localhost:35729/livereload.js', null, false, true);
    wp_enqueue_script('livereload');    
  }
  add_action( 'wp_enqueue_scripts', 'local_livereload');
}
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Register our menus 

function register_menus() {
  register_nav_menu('left-menu', 'Left Menu');
  register_nav_menu('right-menu', 'Right Menu');
}
add_action( 'init', 'register_menus' );


// Register our sidebars and widgetized areas.
function add_widgets() {
  register_sidebar( array(
    'name' => 'Right Sidebar',
    'id' => 'right_sidebar',
    'before_widget' => '<article>',
    'after_widget' =>  '</article>',
    'before_title' =>  '<h3>',
    'after_title' =>   '</h3>',
  ) );
  register_sidebar( array(
    'name' => 'Footer Area',
    'id' => 'footer_widgets',
    'before_widget' => '<article class="col-md-3">',
    'after_widget' =>  '</article>',
    'before_title' =>  '<h3>',
    'after_title' =>   '</h3>',
  ) );
}
add_action( 'widgets_init', 'add_widgets' );

// Header Scripts
function header_scripts () {
  wp_enqueue_script('jquery');
  wp_enqueue_script('masonry');
  wp_enqueue_style('theme-style', get_stylesheet_uri());
  wp_enqueue_style('custom_fonts', '//fonts.googleapis.com/css?family=Lato:400,700,400italic|Comfortaa:400,700', array(), '1.0');
  wp_enqueue_style('fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array(), '4.0.3');
}
add_action('wp_enqueue_scripts','header_scripts');

// Footer Scripts
function footer_scripts() {
  wp_enqueue_script('imagesLoaded','//cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.0.4/jquery.imagesloaded.min.js', array('masonry','jquery'),'3.0.4',true);
  wp_enqueue_script('bootstrapJS','https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js',array('jquery'), '3.2.0', true);
}
add_action( 'wp_enqueue_scripts', 'footer_scripts');

// Homepage Scripts
function homepage_scripts () {
  if (is_front_page()) {
    wp_enqueue_script('homepageJS', get_stylesheet_directory_uri().'/js/home.js',array('masonry','jquery','imagesLoaded'), '1.0.0', true);
  }
}
add_action('wp_enqueue_scripts','homepage_scripts');

// Instagram feed
function instagram_feed () {
  wp_enqueue_script('instafeedLibrary',get_stylesheet_directory_uri().'/js/instafeed.min.js', array(),'3.0.4',true);
  wp_enqueue_script('instagram', get_stylesheet_directory_uri().'/js/instagram.js',array('instafeedLibrary','imagesLoaded'), '1.0.0', true);
}
add_action('wp_enqueue_scripts','instagram_feed');

function instadiv(){
  ob_start();
  ?>
    <hr>
    <h3>Photos of Brown <small class="text-muted">from <a href="http://instagram.com/brownu" target="_blank">brownu</a>'s instagram</small></h3>
    <div id="instafeed"></div>  

  <?php
    $output = ob_get_clean();
    echo $output;
}



add_action('after_loop', 'instadiv');

include('facebook.php');