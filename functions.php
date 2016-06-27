<?php 

if ( ! function_exists( 'epw_setup' ) ) :

function epw_setup() {

    // show admin bar
     show_admin_bar( false ); 

    // add theme support
    add_theme_support( 'post-thumbnails' );

    // image sizes

    add_image_size ('portfolio-item-frontpage', 230, 180);
    add_image_size ('portfolio-item-overview', 230, 180);
    add_image_size ('blog-item-frontpage', 350, 9999);


    // enqueue scripts
     function enqueuescripts () {
     	wp_enqueue_script("jquery");
     	
     }

     if (function_exists("enqueuescripts")) {
     	enqueuescripts();
     }
    // register nav bar

     register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'epw' ),
        'footer'  => __('Footer Menu', 'epw'),
      ) );

}
endif;
add_action( 'after_setup_theme', 'epw_setup' );
// include jquery 


// custom post types

add_action( 'init', 'create_portfolio_posttype');
function create_portfolio_posttype() {
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

add_action( 'init', 'create_profiel_posttype' );
function create_profiel_posttype() {
  register_post_type( 'profiel',
    array(
      'labels' => array(
        'name' => __( 'mijn Profiel'),
        'singular_name' => __( 'Profiel' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'mijnprofiel'),
      'supports' => array('thumbnail', 'title', 'editor', 'author', 'comments'),
    )
  );
}

add_action( 'init', 'create_blog_posttype' );
function create_blog_posttype() {
  register_post_type( 'blog',
    array(
      'labels' => array(
        'name' => __( 'mijn Blog'),
        'singular_name' => __( 'Blog' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'mijnblog'),
      'supports' => array('thumbnail', 'title', 'editor', 'author', 'comments'),
    )
  );
}


?>