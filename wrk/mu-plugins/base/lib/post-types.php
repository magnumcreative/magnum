<?php
/**
 * Custom post types & taxonomies
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/**
 * Work custom post type
 */
function register_cpt_work() {
  $labels = array(
    'name'               => 'Project Work',
    'singular_name'      => 'Work',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Work',
    'edit_item'          => 'Edit Work',
    'new_item'           => 'New Work',
    'all_items'          => __( 'All Work' ),
    'view_item'          => 'View Work',
    'search_items'       => 'Search Work',
    'not_found'          => 'No items found',
    'not_found_in_trash' => 'Nothing found in trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Work'
  );

  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'exclude_from_search' => false, // setting this to true will disable taxonomies from having archive abilities
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'query_var'           => true,
    'rewrite'             => array('slug' => 'work'),
    'capability_type'     => 'post',
    'has_archive'         => true,
    'hierarchical'        => false, // set this to true to disable post sorting
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-feedback',
    'supports'            => array('title', 'thumbnail', 'excerpt', 'editor', 'comments')
  );

  register_post_type('work', $args);
  // flush_rewrite_rules();
}
add_action('init', 'register_cpt_work');


/**
 * Industry taxonomy for work
 */
function register_work_industry_taxonomy() {
  $labels = array(
    'name'              => 'Industry',
    'singular_name'     => 'Industry',
    'search_items'      => 'Search Industries',
    'all_items'         => 'All Industries',
    'parent_item'       => 'Parent Industry',
    'parent_item_colon' => 'Parent Industry:',
    'edit_item'         => 'Edit Industry',
    'update_item'       => 'Update Industry',
    'add_new_item'      => 'Add New Industry',
    'new_item_name'     => 'New Industry Name',
    'menu_name'         => 'Industry'
  );

  $args = array(
    'labels' => $labels,
    'hierarchical'       => false,
    'show_ui'            => true,
    'query_var'          => true,
    'show_admin_column'  => true,
    'show_in_nav_menus'  => true,
    'sort'               => true,
    'rewrite'            => array('slug' => 'industry'),
  );
  register_taxonomy('industry', 'work', $args);
}
add_action('init', 'register_work_industry_taxonomy', 0 );

/**
 * Service taxonomy for work
 */
function register_service_taxonomy() {
  $labels = array(
    'name'              => 'Service',
    'singular_name'     => 'Service',
    'search_items'      => 'Search Industries',
    'all_items'         => 'All Industries',
    'parent_item'       => 'Parent Service',
    'parent_item_colon' => 'Parent Service:',
    'edit_item'         => 'Edit Service',
    'update_item'       => 'Update Service',
    'add_new_item'      => 'Add New Service',
    'new_item_name'     => 'New Service Name',
    'menu_name'         => 'Service'
  );

  $args = array(
    'labels' => $labels,
    'hierarchical'       => false,
    'show_ui'            => true,
    'query_var'          => true,
    'show_admin_column'  => true,
    'show_in_nav_menus'  => true,
    'sort'               => true,
    'rewrite'            => array('slug' => 'service'),
  );
  register_taxonomy('service', 'work', $args);
}
add_action('init', 'register_service_taxonomy', 0 );

/**
 * Technolody taxonomy for work
 */
function register_tech_taxonomy() {
  $labels = array(
    'name'              => 'Technology',
    'singular_name'     => 'Technology',
    'search_items'      => 'Search Industries',
    'all_items'         => 'All Industries',
    'parent_item'       => 'Parent Technology',
    'parent_item_colon' => 'Parent Technology:',
    'edit_item'         => 'Edit Technology',
    'update_item'       => 'Update Technology',
    'add_new_item'      => 'Add New Technology',
    'new_item_name'     => 'New Technology Name',
    'menu_name'         => 'Technology'
  );

  $args = array(
    'labels' => $labels,
    'hierarchical'       => false,
    'show_ui'            => true,
    'query_var'          => true,
    'show_admin_column'  => true,
    'show_in_nav_menus'  => true,
    'sort'               => true,
    'rewrite'            => array('slug' => 'tech'),
  );
  register_taxonomy('tech', 'work', $args);
}
add_action('init', 'register_tech_taxonomy', 0 );


/**
 * We hide the taxonomy meta box LANGUAGES in the admin
 * this keeps groups all the fields in a single area instead
 * of separating it out to the right side where departments sit
 */
function remove_taxonomies_metaboxes() {
    remove_meta_box( 'industrydiv', 'work', 'side' );
    remove_meta_box( 'servicediv', 'work', 'side' );
}
add_action( 'admin_menu' , 'remove_taxonomies_metaboxes' );