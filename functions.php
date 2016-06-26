<?php 

// show admin bar
 show_admin_bar( false ); 

// add theme support
add_theme_support( 'post-thumbnails' );

// image sizes

add_image_size ('portfolio-item-frontpage', 230, 180);


// enqueue scripts
 function enqueuescripts () {
 	wp_enqueue_script("jquery");
 	
 }

 if (function_exists("enqueuescripts")) {
 	enqueuescripts();
 }


// include jquery 


// custom post types

add_action( 'init', 'create_posttype' );
function create_posttype() {
  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'Portfolio items' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'portfolio'),
      'supports' => array('thumbnail', 'title', 'editor', 'author', 'comments'),
    )
  );
}

?>