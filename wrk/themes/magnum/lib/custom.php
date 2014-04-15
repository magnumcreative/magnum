<?php
/**
 * Custom functions
 */

/*-----------------------------------
   admin stuff
-------------------------------------*/

// remove unwanted core dashboard widgets
add_action('wp_dashboard_setup', 'sld_rm_dashboard_widgets');
function sld_rm_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);            // quickpress
}
// remove unused menu items, can adjust to client role
add_action('admin_menu', 'sld_manage_menu_items', 99);
function sld_manage_menu_items() {
  // we can do this based on permissions too if we want
  if( !current_user_can( 'administrator' ) ) {
  }
   remove_menu_page('edit-comments.php'); // Comments
   remove_menu_page('tools.php'); // Tools

}

// remove the +NEW items from the admin bar
add_action( 'wp_before_admin_bar_render', 'sld_admin_bar' );
function sld_admin_bar() {
    global $wp_admin_bar;
     $wp_admin_bar->remove_menu( 'new-media' );
     $wp_admin_bar->remove_menu( 'new-link' );
     $wp_admin_bar->remove_menu( 'new-user' );
}

// Change Title of POSTS in dashboard to NEWS
function change_post_to_article($translated) {
    $translated = str_ireplace('Posts', 'News', $translated);
    $translated = str_replace( 'post', 'news', $translated );
    return $translated;
}
add_filter('gettext', 'change_post_to_article');
add_filter('ngettext', 'change_post_to_article');

// Remove the WP logo in admin
add_action( 'wp_before_admin_bar_render', function() {
global $wp_admin_bar;
$wp_admin_bar->remove_menu('wp-logo');
}, 7 );

/*-----------------------------------
   Admin branding
-------------------------------------*/

function sld_admin_styles() { ?>
  <style>
  /* nice client logo for wp login screen */
  body.login {background-color:#005b52}
  #login h1 a { background:url('<?php echo get_bloginfo( 'template_url' ) ?>/images/logo-admin.png') left top no-repeat; height:20px; margin-left:35px; background-size:auto; }
  </style>
  <?php
}
add_action('login_head', 'sld_admin_styles');

// login logo link url
function login_header_url() {
  return home_url();
}
add_filter( 'login_headerurl', 'login_header_url' );

// admin footer branding
function sld_admin_footer_brand() {
    return date("Y") .' <a href="http://magnumcreative.ca">MAGNUM Creative</a> <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">cc</a>';
}
add_filter('admin_footer_text', 'sld_admin_footer_brand');
