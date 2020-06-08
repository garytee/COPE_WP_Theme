<?php
/**
 * COPE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package COPE
 */

if ( ! function_exists( 'cope_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function cope_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on COPE, use a find and replace
     * to change 'cope' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'cope', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
      // 'menu-2' => esc_html__( 'Menu', 'cope' ),
      'primary' => esc_html__( 'Primary', 'cope' ),
      'legal' => esc_html__( 'Legal', 'cope' ),
    ) );

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

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'cope_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    ) ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ) );
  }
endif;
add_action( 'after_setup_theme', 'cope_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cope_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'cope_content_width', 640 );
}
add_action( 'after_setup_theme', 'cope_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cope_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'cope' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'cope' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'cope_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cope_scripts() {
   // wp_enqueue_script( 'jquery');
   // wp_enqueue_script( 'jquery-maskinput', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js');
   wp_enqueue_script( 'jquery-maskinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js');
   gravity_form_enqueue_scripts(4, true);
   wp_enqueue_style( 'cope-style', get_stylesheet_uri() );
   // wp_enqueue_style( 'minimal', get_template_directory_uri() . '/css/pace-theme-minimal.css');

   // wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css');

      wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.min.css');


   // wp_enqueue_style( 'video-css', '//vjs.zencdn.net/5.19/video-js.min.css');

         wp_enqueue_style( 'video-css', get_template_directory_uri() . '/css/video-js.min.css');



   // wp_enqueue_style( 'icons-css', 'https://file.myfontastic.com/9gknAkJeLAKhx7EVQKTnJJ/icons.css');

   // wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');

            wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.min.css');


   // wp_enqueue_style( 'fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

            wp_enqueue_script( 'font-awesome-pro', 'https://kit.fontawesome.com/abf875a255.js' );



  // wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/css/font-awesome.min.css');

   // wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js');


wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js');


   // wp_enqueue_script( 'video-js', '//vjs.zencdn.net/5.19/video.min.js');

   wp_enqueue_script( 'video-js', get_template_directory_uri() . '/js/video.min.js');


   // wp_enqueue_script( 'video-js-youtube', 'https://cdnjs.cloudflare.com/ajax/libs/videojs-youtube/2.4.1/Youtube.min.js');
   wp_enqueue_script( 'video-js-youtube', get_template_directory_uri() . '/js/Youtube.min.js');

   // wp_enqueue_script( 'wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js');

      wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js');

   wp_enqueue_script( 'stacktable-js', 'https://cdn.jsdelivr.net/npm/stacktable.js@1.0.3/stacktable.min.js');
   wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAXulXd0GLV7y0soyn1QNAuN_cWEkt-Py8'); 
   wp_enqueue_script( 'tween-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js'); 
   wp_enqueue_script( 'smoothstate-js', get_template_directory_uri() . '/js/jquery.smoothState.js');
   wp_enqueue_script( 'print-js', get_template_directory_uri() . '/js/print.min.js');
   wp_enqueue_style( 'print-css', get_template_directory_uri() . '/css/print.min.css' );
   wp_enqueue_script( 'featherlight-js', get_template_directory_uri() . '/js/featherlight.min.js');
   wp_enqueue_style( 'featherlight-css', get_template_directory_uri() . '/css/featherlight.min.css' );
   wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/script.js', array('jquery'));
   wp_localize_script( 'script-js', 'scriptjs', array( 'latitude' => get_field('latitude') ) );
   wp_localize_script( 'script-js', 'scriptjs', array(
    'latitude' => get_field('latitude'),
    'longitude' => get_field('longitude'),
    'markerimg' => get_field('map_marker', 'option')
  ) );
   wp_enqueue_script( 'cope-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
   wp_enqueue_script( 'cope-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
   wp_enqueue_script( 'handlebars-js', get_template_directory_uri() . '/assets/js/libs/handlebars.min.js');
   wp_enqueue_script( 'storelocator-js', get_template_directory_uri() . '/assets/js/plugins/storeLocator/jquery.storelocator.js');
   wp_localize_script( 'storelocator-js', 'storelocatorjs', array( 'template_url' => get_bloginfo('template_url') ) );
   wp_enqueue_script( 'tweetie-js', get_template_directory_uri() . '/js/tweetie.js');
   wp_localize_script( 'tweetie-js', 'tweetiejs', array( 'template_url' => get_bloginfo('template_url') ) );
   wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/layouts/custom-styles.css' );
   wp_enqueue_script( 'locations-json', get_template_directory_uri() . '/data/locations.json' );
   wp_enqueue_style( 'storelocator-css', get_template_directory_uri() . '/assets/css/storelocator.css' );
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'cope_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
  require get_template_directory() . '/inc/jetpack.php';
}

// ADMIN FUNCTIONS

// Add custom admin styles
function load_custom_admin_styles() {
    wp_register_style( 'custom_dashicons', get_template_directory_uri() . '/css/dashicons_style.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_dashicons' );
    wp_register_script( 'admin_script', get_template_directory_uri() . '/js/admin.js', false, '1.0.0' );
    wp_enqueue_script( 'admin_script' );
}

add_action( 'admin_enqueue_scripts', 'load_custom_admin_styles' );

// function my_enqueue($hook) {
//     // Only add to the edit.php admin page.
//     // See WP docs.
//     if ('edit.php' !== $hook) {
//         return;
//     }
//     wp_enqueue_script('my_custom_script', plugin_dir_url(__FILE__) . '/js/admin.js');
// }

// add_action('admin_enqueue_scripts', 'my_enqueue');

// Remove Admin Bar
function my_filter_head() {
remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'my_filter_head');

// Register Custom Post Types

function custom_post_type_locations() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Locations', 'Post Type General Name', 'cope' ),
    'singular_name'       => _x( 'Location', 'Post Type Singular Name', 'cope' ),
    'menu_name'           => __( 'Locations', 'cope' ),
    'parent_item_colon'   => __( 'Parent Location', 'cope' ),
    'all_items'           => __( 'All Locations', 'cope' ),
    'view_item'           => __( 'View Location', 'cope' ),
    'add_new_item'        => __( 'Add New Location', 'cope' ),
    'add_new'             => __( 'Add New', 'cope' ),
    'edit_item'           => __( 'Edit Location', 'cope' ),
    'update_item'         => __( 'Update Location', 'cope' ),
    'search_items'        => __( 'Search Location', 'cope' ),
    'not_found'           => __( 'Not Found', 'cope' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'cope' ),
  );
  
// Set other options for Custom Post Type
  
  $args = array(
    'label'               => __( 'locations', 'cope' ),
    'description'         => __( 'Location', 'cope' ),
    'labels'              => $labels,
    'rewrite'             => array('slug' => 'locations'),
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    // 'taxonomies'          => array( 'genres' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    // 'public'              => true,
    'public'              => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 20,
    'can_export'          => true,
    'menu_icon'       => 'dashicons-location',
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  //   'capabilities' => array(
  //   // 'create_posts' => 'do_not_allow', // false < WP 4.5, credit @Ewout
  // ),
  // 'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts
  );
  
  // Registering your Custom Post Type
  register_post_type( 'Locations', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_locations', 4 );




function custom_post_type_blogposts() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Blog Posts', 'Post Type General Name', 'cope' ),
    'singular_name'       => _x( 'Blog Post', 'Post Type Singular Name', 'cope' ),
    'menu_name'           => __( 'Blog Posts', 'cope' ),
    'parent_item_colon'   => __( 'Parent Blog Post', 'cope' ),
    'all_items'           => __( 'All Blog Posts', 'cope' ),
    'view_item'           => __( 'View Blog Post', 'cope' ),
    'add_new_item'        => __( 'Add New Blog Post', 'cope' ),
    'add_new'             => __( 'Add New', 'cope' ),
    'edit_item'           => __( 'Edit Blog Post', 'cope' ),
    'update_item'         => __( 'Update Blog Post', 'cope' ),
    'search_items'        => __( 'Search Blog Post', 'cope' ),
    'not_found'           => __( 'Not Found', 'cope' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'cope' ),
  );
  
// Set other options for Custom Post Type
  
  $args = array(
    'label'               => __( 'blogposts', 'cope' ),
    'description'         => __( 'Blog Post', 'cope' ),
    'labels'              => $labels,
    'rewrite'             => array('slug' => 'blogposts'),
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    // 'taxonomies'          => array( 'genres' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => false,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 20,
    'can_export'          => true,
    'has_archive'         => true,
    'menu_icon'       => 'dashicons-theatre-pencil-square-o',
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  //   'capabilities' => array(
  //   // 'create_posts' => 'do_not_allow', // false < WP 4.5, credit @Ewout
  // ),
  // 'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts
  );
  
  // Registering your Custom Post Type
  register_post_type( 'Blog Posts', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_blogposts', 3 );



function custom_post_type_physicians() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Physicians', 'Post Type General Name', 'cope' ),
    'singular_name'       => _x( 'Physician', 'Post Type Singular Name', 'cope' ),
    'menu_name'           => __( 'Physicians', 'cope' ),
    'parent_item_colon'   => __( 'Parent Physician', 'cope' ),
    'all_items'           => __( 'All Physicians', 'cope' ),
    'view_item'           => __( 'View Physician', 'cope' ),
    'add_new_item'        => __( 'Add New Physician', 'cope' ),
    'add_new'             => __( 'Add New', 'cope' ),
    'edit_item'           => __( 'Edit Physician', 'cope' ),
    'update_item'         => __( 'Update Physician', 'cope' ),
    'search_items'        => __( 'Search Physician', 'cope' ),
    'not_found'           => __( 'Not Found', 'cope' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'cope' ),
  );
  
// Set other options for Custom Post Type
  
  $args = array(
    'label'               => __( 'physicians', 'cope' ),
    'description'         => __( 'Physician', 'cope' ),
    'labels'              => $labels,
    'rewrite'             => array('slug' => 'physicians'),
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    // 'taxonomies'          => array( 'genres' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 20,
    'can_export'          => true,
    'menu_icon'       => 'dashicons-theatre-physician',
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  //   'capabilities' => array(
  //   // 'create_posts' => 'do_not_allow', // false < WP 4.5, credit @Ewout
  // ),
  // 'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts
  );
  
  // Registering your Custom Post Type
  register_post_type( 'Physicians', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_physicians', 4 );





function custom_post_type_advisoryboards() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Advisory Boards', 'Post Type General Name', 'cope' ),
    'singular_name'       => _x( 'Advisory Board', 'Post Type Singular Name', 'cope' ),
    'menu_name'           => __( 'Advisory Board', 'cope' ),
    'parent_item_colon'   => __( 'Parent Advisory Board', 'cope' ),
    'all_items'           => __( 'All Advisory Boards', 'cope' ),
    'view_item'           => __( 'View Advisory Board', 'cope' ),
    'add_new_item'        => __( 'Add New Advisory Board', 'cope' ),
    'add_new'             => __( 'Add New', 'cope' ),
    'edit_item'           => __( 'Edit Advisory Board', 'cope' ),
    'update_item'         => __( 'Update Advisory Board', 'cope' ),
    'search_items'        => __( 'Search Advisory Board', 'cope' ),
    'not_found'           => __( 'Not Found', 'cope' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'cope' ),
  );
  
// Set other options for Custom Post Type
  
  $args = array(
    'label'               => __( 'advisoryboards', 'cope' ),
    'description'         => __( 'Advisory Board', 'cope' ),
    'labels'              => $labels,
    'rewrite'             => array('slug' => 'scientific-advisory-board'),
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    // 'taxonomies'          => array( 'genres' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 20,
    'can_export'          => true,
    'has_archive'         => true,
    'menu_icon'           => 'dashicons-businessman',
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  //   'capabilities' => array(
  //   // 'create_posts' => 'do_not_allow', // false < WP 4.5, credit @Ewout
  // ),
  // 'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts
  );
  
  // Registering your Custom Post Type
  register_post_type( 'Advisory Boards', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_advisoryboards', 4 );


function custom_post_type_infographics() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Infographics', 'Post Type General Name', 'cope' ),
    'singular_name'       => _x( 'Infographic', 'Post Type Singular Name', 'cope' ),
    'menu_name'           => __( 'Infographics', 'cope' ),
    'parent_item_colon'   => __( 'Parent Infographic', 'cope' ),
    'all_items'           => __( 'All Infographics', 'cope' ),
    'view_item'           => __( 'View Infographic', 'cope' ),
    'add_new_item'        => __( 'Add New Infographic', 'cope' ),
    'add_new'             => __( 'Add New', 'cope' ),
    'edit_item'           => __( 'Edit Infographic', 'cope' ),
    'update_item'         => __( 'Update Infographic', 'cope' ),
    'search_items'        => __( 'Search Infographic', 'cope' ),
    'not_found'           => __( 'Not Found', 'cope' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'cope' ),
  );
  
// Set other options for Custom Post Type
  
  $args = array(
    'label'               => __( 'infographics', 'cope' ),
    'description'         => __( 'Infographic', 'cope' ),
    'labels'              => $labels,
    'rewrite'             => array('slug' => 'infographics'),
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    // 'taxonomies'          => array( 'genres' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 20,
    'can_export'          => true,
    'menu_icon'           => 'dashicons-layout',
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  //   'capabilities' => array(
  //   // 'create_posts' => 'do_not_allow', // false < WP 4.5, credit @Ewout
  // ),
  // 'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts
  );
  
  // Registering your Custom Post Type
  register_post_type( 'Infographics', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_infographics', 4 );


function custom_post_type_press() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Press', 'Post Type General Name', 'cope' ),
    'singular_name'       => _x( 'Press', 'Post Type Singular Name', 'cope' ),
    'menu_name'           => __( 'Press', 'cope' ),
    'parent_item_colon'   => __( 'Parent Press', 'cope' ),
    'all_items'           => __( 'All Press', 'cope' ),
    'view_item'           => __( 'View Press', 'cope' ),
    'add_new_item'        => __( 'Add New Press', 'cope' ),
    'add_new'             => __( 'Add New', 'cope' ),
    'edit_item'           => __( 'Edit Press', 'cope' ),
    'update_item'         => __( 'Update Press', 'cope' ),
    'search_items'        => __( 'Search Press', 'cope' ),
    'not_found'           => __( 'Not Found', 'cope' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'cope' ),
  );
  
// Set other options for Custom Post Type
  
  $args = array(
    'label'               => __( 'press', 'cope' ),
    'description'         => __( 'Press', 'cope' ),
    'labels'              => $labels,
    'rewrite'             => array('slug' => 'press'),
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    // 'taxonomies'          => array( 'genres' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 20,
    'can_export'          => true,
    'menu_icon'           => 'dashicons-megaphone',
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  //   'capabilities' => array(
  //   // 'create_posts' => 'do_not_allow', // false < WP 4.5, credit @Ewout
  // ),
  // 'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts
  );
  
  // Registering your Custom Post Type
  register_post_type( 'Press', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_press', 4 );



function custom_post_type_leadership() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Leadership', 'Post Type General Name', 'cope' ),
    'singular_name'       => _x( 'Leadership', 'Post Type Singular Name', 'cope' ),
    'menu_name'           => __( 'Leadership', 'cope' ),
    'parent_item_colon'   => __( 'Parent Leadership', 'cope' ),
    'all_items'           => __( 'All Leaderships', 'cope' ),
    'view_item'           => __( 'View Leadership', 'cope' ),
    'add_new_item'        => __( 'Add New Leadership', 'cope' ),
    'add_new'             => __( 'Add New', 'cope' ),
    'edit_item'           => __( 'Edit Leadership', 'cope' ),
    'update_item'         => __( 'Update Leadership', 'cope' ),
    'search_items'        => __( 'Search Leadership', 'cope' ),
    'not_found'           => __( 'Not Found', 'cope' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'cope' ),
  );
  
// Set other options for Custom Post Type
  
  $args = array(
    'label'               => __( 'leadership', 'cope' ),
    'description'         => __( 'Leadership', 'cope' ),
    'labels'              => $labels,
    'rewrite'             => array('slug' => 'leadership'),
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    // 'taxonomies'          => array( 'genres' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 20,
    'can_export'          => true,
    'menu_icon'           => 'dashicons-businessman',
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  //   'capabilities' => array(
  //   // 'create_posts' => 'do_not_allow', // false < WP 4.5, credit @Ewout
  // ),
  // 'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts
  );
  
  // Registering your Custom Post Type
  register_post_type( 'Leaderships', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_leadership', 3 );

// Register Custom Post Types


//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
 
add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );
 
function create_topics_nonhierarchical_taxonomy() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Topics', 'taxonomy general name' ),
    'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Topics' ),
    'popular_items' => __( 'Popular Topics' ),
    'all_items' => __( 'All Topics' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Topic' ), 
    'update_item' => __( 'Update Topic' ),
    'add_new_item' => __( 'Add New Topic' ),
    'new_item_name' => __( 'New Topic Name' ),
    'separate_items_with_commas' => __( 'Separate topics with commas' ),
    'add_or_remove_items' => __( 'Add or remove topics' ),
    'choose_from_most_used' => __( 'Choose from the most used topics' ),
    'menu_name' => __( 'Topics' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  // register_taxonomy('topics','post',array(
  //   'hierarchical' => true,
  //   'labels' => $labels,
  //   'show_ui' => true,
  //   'show_admin_column' => true,
  //   'update_count_callback' => '_update_post_term_count',
  //   'query_var' => true,
  //   'rewrite' => array( 'slug' => 'topic' ),
  // ));
}

// Register Custom Taxonomy
function custom_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Video Categories', 'Video Categories General Name', 'text_domain' ),
    'singular_name'              => _x( 'Video Category', 'Video Category Singular Name', 'text_domain' ),
    'menu_name'                  => __( 'Video Category', 'text_domain' ),
    'all_items'                  => __( 'All Items', 'text_domain' ),
    'parent_item'                => __( 'Parent Item', 'text_domain' ),
    'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
    'new_item_name'              => __( 'New Item Name', 'text_domain' ),
    'add_new_item'               => __( 'Add New Item', 'text_domain' ),
    'edit_item'                  => __( 'Edit Item', 'text_domain' ),
    'update_item'                => __( 'Update Item', 'text_domain' ),
    'view_item'                  => __( 'View Item', 'text_domain' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
    'popular_items'              => __( 'Popular Items', 'text_domain' ),
    'search_items'               => __( 'Search Items', 'text_domain' ),
    'not_found'                  => __( 'Not Found', 'text_domain' ),
    'no_terms'                   => __( 'No items', 'text_domain' ),
    'items_list'                 => __( 'Items list', 'text_domain' ),
    'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'video_categories', array( 'post' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

function custom_post_type_video() {

// Set UI labels for Custom Post Type
  $labels = array(
    'name'                => _x( 'Video', 'Post Type General Name', 'cope' ),
    'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'cope' ),
    'menu_name'           => __( 'Video', 'cope' ),
    'parent_item_colon'   => __( 'Parent Video', 'cope' ),
    'all_items'           => __( 'All Videos', 'cope' ),
    'view_item'           => __( 'View Video', 'cope' ),
    'add_new_item'        => __( 'Add New Video', 'cope' ),
    'add_new'             => __( 'Add New', 'cope' ),
    'edit_item'           => __( 'Edit Video', 'cope' ),
    'update_item'         => __( 'Update Video', 'cope' ),
    'search_items'        => __( 'Search Video', 'cope' ),
    'not_found'           => __( 'Not Found', 'cope' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'cope' ),
  );
  
// Set other options for Custom Post Type
  
  $args = array(
    'label'               => __( 'video', 'cope' ),
    'description'         => __( 'Video', 'cope' ),
    'labels'              => $labels,
    'rewrite'             => array('slug' => 'video'),
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    'taxonomies'          => array( 'video_categories' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */  
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 20,
    'can_export'          => true,
    'menu_icon'           => 'dashicons-video-alt2',
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  //   'capabilities' => array(
  //   // 'create_posts' => 'do_not_allow', // false < WP 4.5, credit @Ewout
  // ),
  // 'map_meta_cap' => true, // Set to `false`, if users are not allowed to edit/delete existing posts
  );
  
  // Registering your Custom Post Type
  register_post_type( 'Videos', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_video', 3 );


// ADMIN FUNCTIONS



/**
* Dequeue jQuery Migrate script in WordPress.
*/
function isa_remove_jquery_migrate( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }
}
add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );



         function gravity_js_to_footer() {
          return true;
         }
         add_filter("gform_init_scripts_footer", "gravity_js_to_footer");



if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Company Info',
    'menu_title'  => 'Company Info',
    'menu_slug'   => 'company info',
    'capability'  => 'edit_posts',
    'redirect'    => false,
    'position' => 4,
    'icon_url' => 'dashicons-theatre-performance',
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Footer',
    'menu_title'  => 'Footer',
    // 'parent_slug'  => 'themes.php',
    'menu_slug'   => 'footer',
    'capability'  => 'edit_posts', 
    // 'icon_url' => 'dashicons-download',
    // 'position' => 3
    'parent_slug' => 'company info',
  ));

  acf_add_options_page(array(
    'page_title'  => 'Header',
    'menu_title'  => 'Header',
    // 'parent_slug'  => 'themes.php',
    'menu_slug'   => 'header',
    'capability'  => 'edit_posts', 
    // 'icon_url' => 'dashicons-upload',
    // 'position' => 2
    'parent_slug' => 'company info',
  ));

  acf_add_options_page(array(
    'page_title'  => 'Appearance',
    'menu_title'  => 'Appearance',
    // 'parent_slug'  => 'themes.php',
    'menu_slug'   => 'appearance',
    'capability'  => 'edit_posts', 
    // 'icon_url' => 'dashicons-upload',
    // 'position' => 2
    'parent_slug' => 'company info',
  ));
  
}


// replace the key with your field or use a different filter
// https://www.advancedcustomfields.com/resources/acfload_field/
add_filter('acf/load_field/key=field_57321568b04bd', function( $field ){
     
    // where our new values will live
    $field['choices'] = array();
     
    // dynamic data we want to popuplate with
    $bundles = get_field('bundles', 'option' );
 
    foreach ( $bundles as $bundle ){
        // $value = $label
        // the bundle_id will be saved to the database 
        // while the bundle_name is shown to the user
        $field['choices'][$bundle[‘bundle_id’]] = $bundle['bundle_name'];
    }
     
    // All done!
    return $field;
     
} );





function acf_load_color_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();


    // if has rows
    if( have_rows('my_select_values', 'option') ) {
        
        // while has rows
        while( have_rows('my_select_values', 'option') ) {
            
            // instantiate row
            the_row();
            
            
            // vars
            $value = get_sub_field('url');
            $label = get_sub_field('icon');

            
            // append to choices
            $field['choices'][ $value ] = $label;
            
        }
        
    }


    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=color', 'acf_load_color_field_choices');


function acf_load_color_field_choices2( $field ) {
    
    // reset choices
    $field['choices'] = array();


    // if has rows
    if( have_rows('my_select_values', 'option') ) {
        
        // while has rows
        while( have_rows('my_select_values', 'option') ) {
            
            // instantiate row
            the_row();
            
            
            // vars
            $value = get_sub_field('url');
            $label = get_sub_field('icon');

            
            // append to choices
            $field['choices'][ $value ] = $label;
            
        }
        
    }


    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=color2', 'acf_load_color_field_choices2');




add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    .acf-checkbox-list label .fa{
    font-size: 25px;
    padding: 0px 0px 15px 10px;
    display: inline-block;
    vertical-align: top;
    }
  </style>';
}


function mce_mod( $init ) {
    $init['block_formats'] = 'Paragraph=p;Heading 1=h1;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;';

    //This allows color styles to be inherited from the editor styelsheet.
    unset($init['preview_styles']);

    $style_formats = array (
        // array( 'title' => 'Bold text', 'inline' => 'b' ),
        // array( 'title' => 'Red text', 'inline' => 'span', 'styles' => array( 'color' => '#ff0000', 'textTransform' => 'uppercase', 'box-shadow' => '0 1px 10px #666 inset', ) ),
        // array( 'title' => 'Blue text', 'inline' => 'span', 'styles' => array( 'color' => '#253c8e', 'fontWeight' => 'bold', 'font-size' => '16px', ) ),
        // array( 'title' => 'Red header', 'block' => 'h1', 'styles' => array( 'color' => '#ff0000' ) ),
        // array( 'title' => 'Example 1', 'inline' => 'span', 'classes' => 'example1' ),
        // array( 'title' => 'Example 2', 'inline' => 'span', 'classes' => 'example2' ),
        // array( 'title' => 'Text with blue top border', 'inline' => 'span', 'classes' => 'bluetopborder', 'styles' => array( 'color' => '#FFFFFF', 'textTransform' => 'uppercase', ) ),
    );

    // $init['style_formats'] = json_encode( $style_formats );

    $init['style_formats_merge'] = false;
    return $init;
}
add_filter('tiny_mce_before_init', 'mce_mod');

function mce_add_buttons( $buttons ){
    array_splice( $buttons, 1, 0, 'styleselect' );
    return $buttons;
}
add_filter( 'mce_buttons_2', 'mce_add_buttons' );






/*Add this code to your functions.php file of current theme OR plugin file if you're making a plugin*/
//add the button to the tinymce editor
add_action('media_buttons_context','add_my_tinymce_media_button');
function add_my_tinymce_media_button($context){

return $context.=__("
<a href=\"#TB_inline?width=480&inlineId=my_shortcode_popup&width=640&height=513\" class=\"button thickbox\" id=\"my_shortcode_popup_button\" title=\"Add My Shortcode\">Add My Shortcode</a>");
}

add_action('admin_footer','my_shortcode_media_button_popup');
//Generate inline content for the popup window when the "my shortcode" button is clicked
function my_shortcode_media_button_popup(){?>
  <div id="my_shortcode_popup" style="display:none;">
    <div class="wrap">
      <div>
        <h2>Insert My Shortcode</h2>
        <div class="my_shortcode_add">
          <input type="text" id="id_of_textbox_user_typed_in"><button class="button-primary" id="id_of_button_clicked">Add Shortcode</button>
        </div>
      </div>
    </div>
  </div>
<?php
}

//javascript code needed to make shortcode appear in TinyMCE edtor
add_action('admin_footer','my_shortcode_add_shortcode_to_editor');
function my_shortcode_add_shortcode_to_editor(){?>
<script>
jQuery('#id_of_button_clicked ').on('click',function(){
  var user_content = jQuery('#id_of_textbox_user_typed_in').val();
  var shortcode = '[my_shortcode attributes="'+user_content+'"/]';
  if( !tinyMCE.activeEditor || tinyMCE.activeEditor.isHidden()) {
    jQuery('textarea#content').val(shortcode);
  } else {
    tinyMCE.execCommand('mceInsertContent', false, shortcode);
  }
  //close the thickbox after adding shortcode to editor
  self.parent.tb_remove();
});
</script>
<?php
}



// Remove dashboard widgets


function remove_dashboard_widgets() {
  global $wp_meta_boxes;

  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
  unset($wp_meta_boxes['dashboard']['normal']['rg_forms_dashboard']);


}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );







// Remove Visit site from dashboard dropdown

function remove_admin_bar_links() {
    global $wp_admin_bar;
    // $wp_admin_bar->remove_menu('view-site');        // Remove the view site link
    // $wp_admin_bar->remove_menu('site-name');        // Remove the site name menu
    $wp_admin_bar->remove_menu('view-store'); // Remove the view store link
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('themes');
    $wp_admin_bar->remove_menu('widgets');
    $wp_admin_bar->remove_menu('menus');
    $wp_admin_bar->remove_menu('customize');
    // $wp_admin_bar->remove_menu('dashboard');
    $wp_admin_bar->remove_menu('simple-history-view-history');
    // $wp_admin_bar->remove_menu('updates');          // Remove the updates link
    $wp_admin_bar->remove_menu('gform-forms');          // Remove the updates link
    $wp_admin_bar->remove_menu('wpseo-menu');          // Remove the updates link
    $wp_admin_bar->remove_menu('gform');          // Remove the updates link
    // $wp_admin_bar->remove_menu_page( 'gf_edit_forms' ); // this is the pages url
    // $wp_admin_bar->add_menu_page('view-site');
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

// Remove Wordpress logo from dashboard
add_action('admin_bar_menu', 'remove_wp_logo', 999);
function remove_wp_logo( $wp_admin_bar ) {
$wp_admin_bar->remove_node('wp-logo');
$wp_admin_bar->remove_node('edit');
$wp_admin_bar->remove_menu('new-content');      // Remove the content link

}





function remove_menus(){

// remove_menu_page( 'index.php' );                  //Dashboard
// remove_menu_page( 'jetpack' );                    //Jetpack* 
// remove_menu_page( 'edit.php' );                   //Posts
// remove_menu_page( 'upload.php' );                 //Media
// remove_menu_page( 'edit.php?post_type=page' );    //Pages
remove_menu_page( 'edit-comments.php' );          //Comments
// remove_menu_page( 'themes.php' );                 //Appearance
// remove_menu_page( 'plugins.php' );                //Plugins
// remove_menu_page( 'users.php' );                  //Users
// remove_menu_page( 'tools.php' );                  //Tools
// remove_menu_page( 'options-general.php' );        //Settings
// remove_menu_page( 'wpfastestcacheoptions' ); //Cache
// remove_menu_page( 'woocommerce' );        //Woocommerce
// remove_menu_page( 'wpseo_dashboard' );        //SEO Yoast
// remove_menu_page( 'edit.php?post_type=acf-field-group' );        //ACF
// remove_submenu_page( 'edit.php', 'edit-tags.php' ); //hide tags
// global $submenu;
// Appearance Menu
// unset($submenu['themes.php'][6]); // Customize
}
add_action( 'admin_menu', 'remove_menus', 999 );


// remove toolbar items (alt technique)
// https://digwp.com/2016/06/remove-toolbar-items/
function shapeSpace_remove_toolbar_menu() {
  
  global $wp_admin_bar;
  
  // replace 'updraft_admin_node' with your node id
  // $wp_admin_bar->remove_menu('updraft_admin_node');
  $wp_admin_bar->remove_menu('gform-forms');
  // $wp_admin_bar->remove_menu('view-site');
  
}
add_action('wp_before_admin_bar_render', 'shapeSpace_remove_toolbar_menu', 999); 


add_filter('show_admin_bar', '__return_false');


// Change login image

function custom_loginlogo() {
echo '<style type="text/css">
h1 a {background-image: url('.get_bloginfo('template_directory').'/images/cope_favicon_transparent.png) !important;
}
.login h1 a{
      -webkit-background-size: cover !important;
    background-size: cover !important;
        height: 200px !important;
    width: 200px !important;
}
body.login {
  background-color: #FFFFFF;
}

.login label {
  font-size: 12px;
  color: #555555;
}

.login input[type="text"]{
  background-color: #ffffff;
  border-color:#dddddd;
  -webkit-border-radius: 4px;
}

.login input[type="password"]{
  background-color: #ffffff;
  border-color:#dddddd;
  -webkit-border-radius: 4px;
}

.login .button-primary {
  width: 120px;
  float:right;
  background-color:#17a8e3 !important;
  background: -webkit-gradient(linear, left top, left bottom, from(#17a8e3), to(#17a8e3));
  background: -webkit-linear-gradient(top, #17a8e3, #17a8e3);
  background: -moz-linear-gradient(top, #17a8e3, #17a8e3);
  background: -ms-linear-gradient(top, #17a8e3, #17a8e3);
  background: -o-linear-gradient(top, #17a8e3, #17a8e3);
  background-image: -ms-linear-gradient(top, #17a8e3 0%, #17a8e3 100%);
  color: #ffffff;
  -webkit-border-radius: 4px;
  border: 1px solid #0d9ed9;
}

.login .button-primary:hover {
  background-color:#17a8e3 !important;
  background: -webkit-gradient(linear, left top, left bottom, from(#17a8e3), to(#0d9ed9 ));
  background: -webkit-linear-gradient(top, #17a8e3, #0d9ed9 );
  background: -moz-linear-gradient(top, #17a8e3, #0d9ed9 );
  background: -ms-linear-gradient(top, #17a8e3, #0d9ed9 );
  background: -o-linear-gradient(top, #17a8e3, #0d9ed9 );
  background-image: -ms-linear-gradient(top, #0b436e 0%, #0d9ed9 100%);
  color: #fff;
  -webkit-border-radius: 4px;
  border: 1px solid #0d9ed9;
}

.login .button-primary:active {
  background-color:#17a8e3 !important;
  background: -webkit-gradient(linear, left top, left bottom, from(#0d9ed9), to(#17a8e3));
  background: -webkit-linear-gradient(top, #0d9ed9, #17a8e3);
  background: -moz-linear-gradient(top, #0d9ed9, #17a8e3);
  background: -ms-linear-gradient(top, #0d9ed9, #17a8e3);
  background: -o-linear-gradient(top, #0d9ed9, #17a8e3);
  background-image: -ms-linear-gradient(top, #0d9ed9 0%, #17a8e3 100%);
  color: #fff;
  -webkit-border-radius: 4px;
  border: 1px solid #0d9ed9;
}


p#backtoblog {
  display: none;
}
</style>';
}
add_action('login_head', 'custom_loginlogo');




/**
 * Adds the necessary CSS to the admin head to replace the GF menu icon with a dashicon.
 */
function gfd_css() {
  ?>

  <style>
    .toplevel_page_gf_edit_forms img { display: none; }
    .toplevel_page_gf_edit_forms > .dashicons-before:before { content: '\f175'; }
  </style>

  <?php
}
add_action( 'admin_head', 'gfd_css' );


/**
* Enqueue typekit fonts into WordPress using wp_enqueue_scripts.
*
* @author    Robert Neu
* @author    Eric Fernandez
* @copyright Copyright (c) 2014, Robert Neu
* @license   GPL-2.0+
* @link      http://typekit.com
*/
add_action( 'wp_enqueue_scripts', 'prefix_enqueue_scripts' );
/**
 * Loads the main typekit Javascript. Replace your-id-here with the script name
 * provided in your Kit Editor.
 *
 * @todo Replace prefix with your theme or plugin prefix
 */
function prefix_enqueue_scripts() {
  wp_enqueue_script( 'typekit', '//use.typekit.net/tel6uaz.js', array(), '1.0.0' );
}
add_action( 'wp_head', 'prefix_typekit_inline' );
/**
 * Check to make sure the main script has been enqueued and then load the typekit
 * inline script.
 *
 * @todo Replace prefix with your theme or plugin prefix
 */
function prefix_typekit_inline() {
  if ( wp_script_is( 'typekit', 'enqueued' ) ) {
    echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>';
  }
}


function generate_options_css() {
    $ss_dir = get_template_directory();
    ob_start(); // Capture all output into buffer
    require($ss_dir . '/inc/custom-styles.php'); // Grab the custom-style.php file
    $css = ob_get_clean(); // Store output in a variable, then flush the buffer
    file_put_contents($ss_dir . '/layouts/custom-styles.css', $css, LOCK_EX); // Save it as a css file
}
add_action( 'acf/save_post', 'generate_options_css', 20 ); //Parse the output and write the CSS file on post save (thanks Esmail Ebrahimi)


// Custom json
function generate_options_json() {
    $json_dir = get_template_directory();
    ob_start(); // Capture all output into buffer
    // $query->set( 'posts_per_page', '-1' );
    require($json_dir . '/inc/custom-json.php'); // Grab the custom-style.php file

        $args = array(
        // 'post_type' => 'posts_pg',
        'posts_per_page' => '-1',
        // 'order' => 'desc',
        // 'suppress_filters' => 0,
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); 
         // my loop code, which returns title, thumbnail, etc -- see image below
             endwhile;
         wp_reset_postdata();

    $json = ob_get_clean(); // Store output in a variable, then flush the buffer
    file_put_contents($json_dir . '/data/locations.json', $json, LOCK_EX); // Save it as a json file
 endif;
}
add_action( 'acf/save_post', 'generate_options_json' ); //Parse the output and write the CSS file on post save


// Add featured image sizes
add_image_size( 'physician', 200, 200, true ); // width, height, crop
add_image_size( 'wordpress-thumbnail', 300, 300, FALSE );


function add_custom_sizes() {
    add_image_size( 'portfolio-thumb', 300, 350, true );
    add_image_size( 'blog-image', 275, 175, true );
    add_image_size( 'single-blog', 640, 300, true );
    add_image_size( 'advisory-board', 175, 175, true );
    add_image_size( 'physician-image', 225, 225, true );
    add_image_size( 'press-image', 225, 225, false );
    add_image_size( 'press-image2', 225, 225, true );
    add_image_size( 'cope-logo', 200, 64, true );
    add_image_size( 'cope-logo2', 200, 64, false );
    add_image_size( 'banner-image', 960, 325, true );
    add_image_size( 'single-post-thumbnail', 600, 280, true);
    add_image_size( 'wordpress-thumbnail-topcenter', 175, 175, array( 'center', 'top' ) );
}
add_action('after_setup_theme','add_custom_sizes');



//Expand Shortcode

// Add Shortcode
function expand_shortcode( $atts , $content = null ) {

  // Attributes
  $atts = shortcode_atts(
    array(
    'content' => '',
    ),
    $atts,
    'expand'
  );

  // Return image HTML code
  return '<div class="expander-container">
          <div class="expand-item">
            <div class="expand-show">
              ' . $atts['content'] . '
            </div>
            <div class="expand-hide">
              <p>
                ' . $content . '
              </p>
            </div>
        </div>
      </div>';
}

add_shortcode( 'expand', 'expand_shortcode' );




//Map Shortcode

// Add Shortcode
function map_shortcode( $atts , $content = null ) {

  // Attributes
  $atts = shortcode_atts(
    array(
    'content' => '',
    ),
    $atts,
    'map'
  );

    return '<div class="bh-sl-container">
                <div id="bh-sl-single-map-container" class="bh-sl-single-map-container">
                  <div id="bh-sl-map" class="bh-sl-map"></div>
                  <div class="bh-sl-loc-list">
                    <ul class="list"></ul>
                  </div>
                </div>
              </div>';


}

add_shortcode( 'map', 'map_shortcode' );




// Connect the WordPress post editor to your custom stylesheet
function my_theme_add_editor_styles() {
  add_editor_style( 'custom-editor-style.css' );
}

add_action( 'admin_init', 'my_theme_add_editor_styles' );


function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}


// function get_all_location_posts( $query ) {
//     if( ( $post_types = 'locations' ) ) {
//         $query->set( 'posts_per_page', '-1' );
//     }
// }
// add_action( 'pre_get_posts', 'get_all_location_posts' );

function get_all_leadership_posts( $query ) {
    if( !is_admin() && $query->is_main_query() && is_post_type_archive( $post_types = 'leaderships' ) ) {
        $query->set( 'posts_per_page', '-1' );
    }
}
add_action( 'pre_get_posts', 'get_all_leadership_posts' );

function get_all_advisoryboard_posts( $query ) {
    if( !is_admin() && $query->is_main_query() && is_post_type_archive( $post_types = 'advisoryboards' ) ) {
        $query->set( 'posts_per_page', '-1' );
    }
}
add_action( 'pre_get_posts', 'get_all_advisoryboard_posts' );

function get_all_physician_posts( $query ) {
    if( !is_admin() && $query->is_main_query() && is_post_type_archive( $post_types = 'physicians' ) ) {
        $query->set( 'posts_per_page', '-1' );
    }
}
add_action( 'pre_get_posts', 'get_all_physician_posts' );

function get_all_infographic_posts( $query ) {
    if( !is_admin() && $query->is_main_query() && is_post_type_archive( $post_types = 'infographics' ) ) {
        $query->set( 'posts_per_page', '-1' );
    }
}
add_action( 'pre_get_posts', 'get_all_infographic_posts' );


function get_all_press_posts( $query ) {
    if( !is_admin() && $query->is_main_query() && is_post_type_archive( $post_types = 'press' ) ) {
        $query->set( 'posts_per_page', '5' );
    }
}
add_action( 'pre_get_posts', 'get_all_press_posts' );



function get_all_locations_posts( $query ) {
    if( !is_admin() && $query->is_main_query() && is_post_type_archive( $post_types = 'locations' ) ) {
        $query->set( 'posts_per_page', '-1' );
    }
}
add_action( 'pre_get_posts', 'get_all_locations_posts' );








// is_home() is actually posts page - wordpress is confusing :\
// function get_all_posts( $query ) {
//     if( !is_admin() && $query->is_main_query() && is_home() ) {
//         $query->set( 'posts_per_page', '5' );
//     }
// }
// add_action( 'pre_get_posts', 'get_all_posts' );



add_filter( 'wp_image_editors', 'change_graphic_lib' );

function change_graphic_lib($array) {
  return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}




// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );



/*
 * Change the order of the endpoints that appear in My Account Page - WooCommerce 2.6
 * The first item in the array is the custom endpoint URL - ie http://mydomain.com/my-account/my-custom-endpoint
 * Alongside it are the names of the list item Menu name that corresponds to the URL, change these to suit
 */
function wpb_woo_my_account_order() {
  $myorder = array(
    // 'my-custom-endpoint' => __( 'My Stuff', 'woocommerce' ),
    'orders'             => __( 'Make a Payment', 'woocommerce' ),
    'edit-account'       => __( 'Change My Details', 'woocommerce' ),
    // 'dashboard'          => __( 'Dashboard', 'woocommerce' ),
    // 'downloads'          => __( 'Download MP4s', 'woocommerce' ),
    'edit-address'       => __( 'Addresses', 'woocommerce' ),
    // 'payment-methods'    => __( 'Payment Methods', 'woocommerce' ),
    'customer-logout'    => __( 'Logout', 'woocommerce' ),
  );
  return $myorder;
}
add_filter ( 'woocommerce_account_menu_items', 'wpb_woo_my_account_order' );


// Remove View from Locations
add_filter( 'post_row_actions', 'remove_row_actions', 10, 1 );

function remove_row_actions( $actions )
{
    if( get_post_type() === 'locations' )
        unset( $actions['view'] );
    return $actions;
}




add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );





//Removes the "Edit" menu for users who are not Super Admins of a multisite network
if ( !is_super_admin() ) {
  add_action( 'admin_init', 'my_remove_edit_menu' );
}
function my_remove_edit_menu() {
  remove_menu_page('edit.php');
  // $wp_admin_bar->remove_menu('updraft_admin_node');
}

function as3cf_local_domains( $domains ) {
    $domains[] = 'www.copepsychiatry.com';
    $domains[] = 'www.copepsychiatry.com/location-charlotte/';
    $domains[] = 'www.copepsychiatry.com/location-newyork/';
    $domains[] = 'www.copepsychiatry.com/location-stlouis/';

    return $domains;
}
add_filter( 'as3cf_local_domains', 'as3cf_local_domains', 10, 1 );


//Redirect Author page to homepage -- keeps bots out!
function author_page_redirect() {
    if ( is_author() ) {
        wp_redirect( home_url() );
    }
}
add_action( 'template_redirect', 'author_page_redirect' );


// remove related products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// Remove product category from product pages
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// disable woocommerce styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

//* http://gasolicious.com/remove-tabs-keep-product-description-woocommerce/
//  Location: add to functions.php
//  Output: removes woocommerce tabs

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

//* http://gasolicious.com/remove-tabs-keep-product-description-woocommerce/
//  Location: add to functions.php
//  Output: adds full description to below price

function woocommerce_template_product_description() {
  woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );


// Move WooCommerce price
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );


// Add Woocommerce theme support

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


// Removes Description headline in product page
add_filter('woocommerce_product_description_heading', '__return_empty_string');



// Removes submit button from my account location login form
add_filter( 'gform_submit_button_5', '__return_false' );




// remove default sorting dropdown
 
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );






add_action( 'woocommerce_before_customer_login_form', 'jk_login_message' );
function jk_login_message() {
    if ( get_option( 'woocommerce_enable_myaccount_registration' ) == 'yes' ) {
  ?>
    <div class="woocommerce-info">
      <!-- <p><?php _e( 'Returning customers login. New users register for next time so you can:' ); ?></p> -->
<!--       <ul>
        <li><?php _e( 'View your order history' ); ?></li>
        <li><?php _e( 'Check on your orders' ); ?></li>
        <li><?php _e( 'Edit your addresses' ); ?></li>
        <li><?php _e( 'Change your password' ); ?></li>
      </ul> -->
      <!-- <a class="" href="#" data-featherlight="#fl1">New User Sign In</a> -->
    </div>
  <?php
  }
}





add_action( 'woocommerce_edit_account_form', 'my_woocommerce_edit_account_form' );
add_action( 'woocommerce_save_account_details', 'my_woocommerce_save_account_details' );

function my_woocommerce_edit_account_form() {

$user_id = get_current_user_id();
$user = get_userdata( $user_id );

if ( !$user )
  return;

$twitter = get_user_meta( $user_id, 'twitter', true );
$url = $user->user_url;

?>


<?php
}

function my_woocommerce_save_account_details( $user_id ) {

update_user_meta( $user_id, 'twitter', htmlentities( $_POST[ 'twitter' ] ) );

$user = wp_update_user( array( 'ID' => $user_id, 'user_url' => esc_url( $_POST[ 'url' ] ) ) );

}






/**
 * Redirect users to custom URL based on their role after login
 *
 * @param string $redirect
 * @param object $user
 * @return string
 */
function wc_custom_user_redirect( $redirect, $user ) {
  // Get the first of all the roles assigned to the user
  $role = $user->roles[0];
  $dashboard = admin_url();
  $myaccount = get_permalink( wc_get_page_id( 'myaccount' ) );
  $orders = get_permalink( wc_get_page_id( 'orders' ) );
  if( $role == 'administrator' ) {
    //Redirect administrators to the dashboard
    // $redirect = $dashboard;
    $redirect = $orders;
  } elseif ( $role == 'shop-manager' ) {
    //Redirect shop managers to the dashboard
    $redirect = $dashboard;
  } elseif ( $role == 'editor' ) {
    //Redirect editors to the dashboard
    $redirect = $dashboard;
  } elseif ( $role == 'author' ) {
    //Redirect authors to the dashboard
    $redirect = $dashboard;
  } elseif ( $role == 'customer' || $role == 'subscriber' ) {
    //Redirect customers and subscribers to the "My Account" page
    $redirect = $myaccount;
  } else {
    //Redirect any other role to the previous visited page or, if not available, to the home
    $redirect = wp_get_referer() ? wp_get_referer() : home_url();
  }
  return $redirect;
}
add_filter( 'woocommerce_login_redirect', 'wc_custom_user_redirect', 10, 2 );

//Redirect Woocommerce login to orders page
add_filter('woocommerce_login_redirect', 'pro_login_redirect');
function pro_login_redirect( $redirect_to ) {
$url = site_url( 'shop', 'https' );
$redirect_to = $url;
return $redirect_to;
}




// WOOCOMMERCE FIRST TIME REGISTRATION REDIRECT
// After registration, logout the user and redirect to home page
function custom_registration_redirect() {
    // wp_logout();
  // $redirecturl = site_url( '/my-account/orders/', 'https' );
    // return home_url($redirecturl);


          // $urlredirect = site_url( '/my-account/orders/', 'https' );
          //   wp_redirect( $urlredirect );


  $url = site_url( '/shop', 'https' );
$redirect_to = $url;
return $redirect_to;

}
add_action('woocommerce_registration_redirect', 'custom_registration_redirect', 2);








add_action("init", function () {
    // removing the woocommerce hook
    // remove_action('woocommerce_shop_loop_item_title', 'change_product_title');
    remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
});

// add a new fonction to the hook
add_action("woocommerce_shop_loop_item_title", function () {

    echo '<h4>' . get_the_title() . '</h4>';

});






add_action( 'init', 'custom_fix_thumbnail' );
 
function custom_fix_thumbnail() {
  add_filter('woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src');
   
  function custom_woocommerce_placeholder_img_src( $src ) {
  $upload_dir = wp_upload_dir();
  $uploads = untrailingslashit( $upload_dir['baseurl'] );
  // $src = $uploads . '/2012/07/thumb1.jpg';
  $src = 'https://cdn.copepsychiatry.com/wp-content/uploads/2018/02/COPE001-Logo_FINAL_OL_TM-1024x372.png';
   
  return $src;
  }
}





function so_38878702_remove_hook(){
   remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
}
add_action( 'woocommerce_before_shop_loop', 'so_38878702_remove_hook', 1 );




// ADD wordpress wysiwyg to acf fields
add_action('acf/input/admin_head', 'my_acf_admin_head');

function my_acf_admin_head() {
    
    ?>
    <script type="text/javascript">
    (function($) {
        
        $(document).ready(function(){
            
            $('.acf-field-5ad7a3a6501a5 .acf-input').append( $('#postdivrich') );
            $('.acf-field-5b3e968c9a5a7 .acf-input').append( $('#postdivrich') );
            $('.acf-field-5cf13323231fe .acf-input').append( $('#postdivrich') );

            
        });
        
    })(jQuery);    
    </script>
    <style type="text/css">
        .acf-field #wp-content-editor-tools {
            background: transparent;
            padding-top: 0;
        }
    </style>
    <?php    
    
}




/* 
 * Change upload directory for PDF files 
 * Only works in WordPress 3.3+
 */

// add_filter('wp_handle_upload_prefilter', 'wpse47415_pre_upload');
// add_filter('wp_handle_upload', 'wpse47415_post_upload');

// function wpse47415_pre_upload($file){
//     add_filter('upload_dir', 'wpse47415_custom_upload_dir');
//     return $file;
// }

// function wpse47415_post_upload($fileinfo){
//     remove_filter('upload_dir', 'wpse47415_custom_upload_dir');
//     return $fileinfo;
// }

// function wpse47415_custom_upload_dir($path){    
//     $extension = substr(strrchr($_POST['name'],'.'),1);
//     if(!empty($path['error']) ||  $extension != 'pdf') { return $path; } //error or other filetype; do nothing. 
//     $customdir = '/files';
//     $path['path']    = str_replace($path['subdir'], '', $path['path']); //remove default subdir (year/month)
//     $path['url']     = str_replace($path['subdir'], '', $path['url']);      
//     $path['subdir']  = $customdir;
//     $path['path']   .= $customdir; 
//     $path['url']    .= $customdir;  
//     return $path;
// }



// add_filter( 'posts_where', 'devplus_wpquery_where' );
// function devplus_wpquery_where( $where ){
//     global $current_user;

//     if( is_user_logged_in() ){
//          // logged in user, but are we viewing the library?
//          if( isset( $_POST['action'] ) && ( $_POST['action'] == 'query-attachments' ) ){
//             // here you can add some extra logic if you'd want to.
//             $where .= ' AND post_author='.$current_user->data->ID;
//         }
//     }

//     return $where;
// }







add_action( 'wp_enqueue_scripts', 'gallery_scripts', 20 );

function gallery_scripts() {
    if ( !is_product()) {
        if ( current_theme_supports( 'wc-product-gallery-zoom' ) ) { 
            wp_enqueue_script( 'zoom' );
        }
        if ( current_theme_supports( 'wc-product-gallery-slider' ) ) {
            wp_enqueue_script( 'flexslider' );
            // wp_enqueue_script( 'tm-final-price-js', plugins_url() . '/woocommerce-tm-final-price/js/tm-final-price.js', array('jquery') );
            // wp_enqueue_script( 'tm-final-price' );
        }
        if ( current_theme_supports( 'wc-product-gallery-lightbox' ) ) {
            wp_enqueue_script( 'photoswipe-ui-default' );
            wp_enqueue_style( 'photoswipe-default-skin' );
            add_action( 'wp_footer', 'woocommerce_photoswipe' );
        }
        wp_enqueue_script( 'wc-single-product' );
        // add_action( 'wp_footer', 'tm-woo-final-price' );
           add_action('wp_footer', 'wp_enqueue_scripts', 5);

        // wp_enqueue_script( 'tm-final-price' );
        // wp_enqueue_script( 'tm-final-price', $this->plugin_url. '/js/tm-final-price.js', array( 'jquery', 'accounting' ), $this->version, true );
    }

}



add_action( 'template_redirect', 'wpse_128636_redirect_post' );

function wpse_128636_redirect_post() {
  $queried_post_type = get_query_var('post_type');
  if ( is_single() && 'locations' ==  $queried_post_type ) {
    wp_redirect( site_url( '/locations', 'https' ), 301 );
    exit;
  }
}




/**
 * Theme Template Usage Report
 *
 * Displays a data dump to show you the pages in your WordPress
 * site that are using custom theme templates.
 */
function theme_template_usage_report( $file = false ) {
    if ( ! isset( $_GET['template_report'] ) ) return;

    $templates = wp_get_theme()->get_page_templates();
    $report = array();

    echo '<h1>Page Template Usage Report</h1>';
    echo "<p>This report will show you any pages in your WordPress site that are using one of your theme's custom templates.</p>";

    foreach ( $templates as $file => $name ) {
        $q = new WP_Query( array(
            'post_type' => 'page',
            'posts_per_page' => -1,
            'meta_query' => array( array(
                'key' => '_wp_page_template',
                'value' => $file
            ) )
        ) );

        $page_count = sizeof( $q->posts );

        if ( $page_count > 0 ) {
            echo '<p style="color:green">' . $file . ': <strong>' . sizeof( $q->posts ) . '</strong> pages are using this template:</p>';
            echo "<ul>";
            foreach ( $q->posts as $p ) {
                echo '<li><a href="' . get_permalink( $p, false ) . '">' . $p->post_title . '</a></li>';
            }
            echo "</ul>";
        } else {
            echo '<p style="color:red">' . $file . ': <strong>0</strong> pages are using this template, you should be able to safely delete it from your theme.</p>';
        }

        foreach ( $q->posts as $p ) {
            $report[$file][$p->ID] = $p->post_title;
        }
    }

    exit;
}
add_action( 'wp', 'theme_template_usage_report' );




// Disable autoptimize on pages with the word "test" in the URL
add_filter('autoptimize_filter_noptimize','my_ao_noptimize',10,0);
function my_ao_noptimize() {
if (strpos($_SERVER['REQUEST_URI'],'blog')!==false) {
return true;
} else {
return false;
}
}




add_action( 'plugins_loaded', function(){
    remove_filter( 'query', array( 'GFForms', 'filter_query' ) );
} );