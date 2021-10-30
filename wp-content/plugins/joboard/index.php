<?php
 
/*
Plugin Name: Jobs
Author: Asma
Description: Custom post type.
 Version: 1.0
*/

// Our custom post type function
function create_posttypes() {
 
  register_post_type( 'joboard',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Joboard' ),
              'singular_name' => __( 'Joboard' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'joboard'),
          'show_in_rest' => true,

      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttypes' );
/*
* Creating a function to create our CPT
*/
 
function custom_post_types() {
 
  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Joborad', 'Post Type General Name', 'divi' ),
          'singular_name'       => _x( 'Joboard', 'Post Type Singular Name', 'divi' ),
          'menu_name'           => __( 'Joborad', 'divi' ),
          'parent_item_colon'   => __( 'Parent Joboard', 'divi' ),
          'all_items'           => __( 'All Joborad', 'divi' ),
          'view_item'           => __( 'View Joboard', 'divi' ),
          'add_new_item'        => __( 'Add New Joboard', 'divi' ),
          'add_new'             => __( 'Add New', 'divi' ),
          'edit_item'           => __( 'Edit Joboard', 'divi' ),
          'update_item'         => __( 'Update Joboard', 'divi' ),
          'search_items'        => __( 'Search Joboard', 'divi' ),
          'not_found'           => __( 'Not Found', 'divi' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'divi' ),
      );
       
  // Set other options for Custom Post Type
       
      $args = array(
          'label'               => __( 'Joborad', 'divi' ),
          'description'         => __( 'Joboard news and reviews', 'divi' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy. 
          'taxonomies'          => array( 'jobs' ),
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
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
          'show_in_rest' => true,
   
      );
       
      // Registering your Custom Post Type
      register_post_type( 'joboard', $args );
   
  }
  /* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_types', 0 );
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
 
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'joboard' ) );
    return $query;
}

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_jobs_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it jobs for your posts
 
function create_jobs_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'jobs', 'taxonomy general name' ),
    'singular_name' => _x( 'jobs', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search jobs' ),
    'all_items' => __( 'All jobs' ),
    'parent_item' => __( 'Parent jobs' ),
    'parent_item_colon' => __( 'Parent jobs:' ),
    'edit_item' => __( 'Edit jobs' ), 
    'update_item' => __( 'Update jobs' ),
    'add_new_item' => __( 'Add New jobs' ),
    'new_item_name' => __( 'New jobs Name' ),
    'menu_name' => __( 'Jobs' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('jobs',array('joboard'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'jobs' ),
  ));
 
}
// >> Create Shortcode to Display Jobs Post Types
function diwp_create_shortcode_jobs_post_type(){
 
  $args = array(
                  'post_type'      => 'joboard',
                  'posts_per_page' => '-1',
                  'publish_status' => 'published',
                  
               );

  $query = new WP_Query($args);
 $result = '';
  if($query->have_posts()) :
    $result .= '<div class="job-row">';
    while($query->have_posts()) :$query->the_post() ;
                   
		$result .= '<div class="job-item">';
      $result .= '<div class="job-img job-image">' . get_the_post_thumbnail() . '</div>';
      $result .= '<div class="job-btn"><a href="'.get_the_permalink().'">View Jobs</a></div>';
      $result .= '<div class="job-name"><a href="'.get_the_permalink().'">'. 		get_the_title() . '</a></div>';
      $result .= '</div>';
     
     
  	endwhile;
      $result .= '</div>'; 
      wp_reset_postdata();

  endif;    

  return $result;            
}

add_shortcode( 'jobs-list', 'diwp_create_shortcode_jobs_post_type' ); 

// shortcode code ends here