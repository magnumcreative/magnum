<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

function cmb_magnum_metaboxes( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_cmb_';

    $meta_boxes['work_metabox'] = array(
        'id'         => 'work_metabox',
        'title'      => __( 'Associated Taxonomies', 'cmb' ),
        'pages'      => array( 'work' ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
        'fields'     => array(
            array(
                'name'     => __( 'Industry', 'cmb' ),
                'desc'     => __( 'Set the industry this project relates to', 'cmb' ),
                'id'       => $prefix . 'industry_multitaxonomy',
                'type'     => 'taxonomy_multicheck',
                'taxonomy' => 'industry', // Taxonomy Slug
                // 'inline'  => true, // Toggles display to inline
            ),
            array(
                'name'     => __( 'Services', 'cmb' ),
                'desc'     => __( 'Set the services used in this project', 'cmb' ),
                'id'       => $prefix . 'service_multitaxonomy',
                'type'     => 'taxonomy_multicheck',
                'taxonomy' => 'service', // Taxonomy Slug
                // 'inline'  => true, // Toggles display to inline
            ),
            array(
                'name'     => __( 'Technology', 'cmb' ),
                'desc'     => __( 'Set the tech used in this project', 'cmb' ),
                'id'       => $prefix . 'tech_multitaxonomy',
                'type'     => 'taxonomy_multicheck',
                'taxonomy' => 'tech', // Taxonomy Slug
                // 'inline'  => true, // Toggles display to inline
            ),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}

add_filter( 'cmb_meta_boxes', 'cmb_magnum_metaboxes' );