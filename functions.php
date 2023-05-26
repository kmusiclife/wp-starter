<?php

if( file_exists(__DIR__.'/config.php') ){
	include(__DIR__.'/config.php');
}

set_post_thumbnail_size(1280, 720, true); // youtube=1280×720, facebook=1200×630
add_theme_support('post-thumbnails'); // enable eye-catch
add_image_size( 'square', 500, 500, true); // square
add_image_size( 'normal', 1200, 800, true); // 3:2
add_image_size( 'normal-sm', 600, 400, true); // 3:2
$theme_version = wp_get_theme()->get( 'Version' );

add_filter( 'excerpt_length', function( $length ) { return 120;  }, 10 ); // Excerpt
add_filter( 'excerpt_more', function( $more ) { return '...'; } ); // Excerpt more 

add_filter('upload_mimes',function($mimes) { // upload filetype
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'png' => 'image/png',
        'pdf' => 'application/pdf'
    );
    return $mimes;
});
// Upload file to uniqid(). Replaced by (jpg|png|pdf).
add_filter('sanitize_file_name', function($filename) {
  $info = pathinfo($filename);
  if( isset($info['extension']) ){
    $ext = strtolower($info['extension']);
    if( preg_match('/jpg|jpeg|jpe|png|pdf/', $ext) ) {
      return uniqid() . '.' . $ext;
    }
  }
  return $filename;
}, 10);


// Get articles of a specific post type & title
// Access method is: get_custom_content('Page Title', 'content')
function get_custom_content($title, $posttype='content'){
  $_post = get_page_by_title($title, OBJECT, $posttype);
  if(empty($_post)) return '';
  return isset($_post->post_content) ? apply_filters( 'the_content', $_post->post_content ) : '';
}
register_post_type('content', array(
  'label' => 'Page Content',
  'public' => false,
  'publicly_queryable' => false,
  'menu_position' => 2,
  'show_ui' => true,
  'query_var' => true,
  'has_archive' => false,
  'show_in_rest' => true,
  'supports' => array('title', 'editor'),
  'menu_icon' => 'dashicons-index-card',
));

// Display of custom menus
function get_custom_menu($name){
    $nav_menus = wp_get_nav_menu_items($name);
    return $nav_menus ? $nav_menus : array();
}
register_nav_menu('header-menu', 'Unuse menu set');

// Register a custom post on the topic.
// ROUTER: /topics
// SINGLE TEMPLATE: single-topics.php or single.php
// ARCHIVE TEMPLATE: archive-topics.php or archive.php

register_post_type('topics', array(
    'label' => 'Topics',
    'public' => true,
    'publicly_queryable' => true,
    'menu_position' => 5,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'topics'),
    'capability_type' => 'post',
    'has_archive' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'revisions', 'page-attributes', 'excerpt')
));

// Replace all topic slugs with post_IDs.
function custom_post_force_slug( $slug, $post_ID, $post_status, $post_type ) {
    if($post_type == 'topics') return $post_ID;
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'custom_post_force_slug', 10, 4 );


// Delete menu of posts
/*
add_action( 'admin_menu', function(){
    remove_menu_page( 'edit.php' );
});
*/

// Register the topic taxonomy.
// ROUTER: /subject/xxx (xxx is slug when adding taxonomy) 
// TEMPLATE: taxonomy-subject.php or taxonomy.php
/*
register_taxonomy(
  'subject', // Slug for this tag Category name cannot be used (reserved).
  'topics', // Specify slug for register_post_type
  array(
    'label' => 'Topic categories',
    'public' => true,
    'description' => '',
    'hierarchical' => true,
    'show_in_rest' => true 
  )
);
*/