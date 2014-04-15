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

  register_post_type('cpt-work', $args);
   flush_rewrite_rules();
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
    'rewrite'      => array(
        'slug' => 'industry', 'with_front' => true, 'rewrite' => false
    ),
  );
  register_taxonomy('work-industry', 'cpt-work', $args);
   flush_rewrite_rules();
}
add_action('init', 'register_work_industry_taxonomy');

/**
 * Feature taxonomy for Work
 */
function register_work_feature_taxonomy() {
  $labels = array(
    'name'              => 'Feature',
    'singular_name'     => 'Feature',
    'search_items'      => 'Search Features',
    'all_items'         => 'All Features',
    'parent_item'       => 'Parent Feature',
    'parent_item_colon' => 'Parent Feature:',
    'edit_item'         => 'Edit Feature',
    'update_item'       => 'Update Feature',
    'add_new_item'      => 'Add New Feature',
    'new_item_name'     => 'New Feature Name',
    'menu_name'         => 'Feature'
  );

  $args = array(
    'labels' => $labels,
    'hierarchical'       => false,
    'show_ui'            => true,
    'query_var'          => true,
    'show_admin_column'  => true,
    'show_in_nav_menus'  => true,
    'sort'               => true,
    'rewrite'      => array('slug' => 'features'),
  );
  register_taxonomy('work-feature', 'cpt-work', $args);
  // flush_rewrite_rules();
}
add_action('init', 'register_work_feature_taxonomy');


/**
 * Services custom post type
 */
function register_cpt_service() {
  $labels = array(
    'name'               => 'Services',
    'singular_name'      => 'Service',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Service',
    'edit_item'          => 'Edit Service',
    'new_item'           => 'New Service',
    'view_item'          => 'View Service',
    'search_items'       => 'Search Services',
    'not_found'          => 'No items found',
    'not_found_in_trash' => 'Nothing found in trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Services'
  );

  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'exclude_from_search' => false, // setting this to true will disable taxonomies from having archive abilities
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'query_var'           => true,
    'rewrite'             => array('slug' => 'service'),
    'capability_type'     => 'post',
    'has_archive'         => true,
    'hierarchical'        => false, // set this to true to disable post sorting
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-feedback',
    'supports'            => array('title', 'thumbnail', 'excerpt', 'editor', 'comments')
  );

  register_post_type('cpt-service', $args);
  // flush_rewrite_rules();
}
add_action('init', 'register_cpt_service');