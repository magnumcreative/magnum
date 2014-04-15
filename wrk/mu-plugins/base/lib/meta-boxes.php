<?php
/**
 * Custom meta boxes with the CMB plugin
 *
 * @link https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 * @link https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Basic-Usage
 * @link https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Field-Types
 * @link https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Display-Options
 */

// add_filter('cmb_meta_boxes', 'cmb_ats_meta_boxes');

// function cmb_ats_meta_boxes($meta_boxes) {
//   // Start with an underscore to hide fields from custom fields list
//     $prefix = '_cmb_';
//   /**
//    * Page Options meta box
//    */
//   $meta_boxes[] = array(
//     'id'         => 'itinerary-options',
//     'title'      => 'Itinerary Options',
//     'pages'      => array('cpt_itinerary'),
//     'context'    => 'normal',
//     'priority'   => 'high',
//     'show_names' => true,
//     'fields'     => array(
//       array(
//           'name' => __( 'Website URL', 'cmb' ),
//           'id'   => $prefix . 'itinerary-url',
//           'type' => 'text_url',
//            'protocols' => array( 'http', 'https' ), // Array of allowed protocols
//       ),
//     ),
//   );

//   return $meta_boxes;
// }
