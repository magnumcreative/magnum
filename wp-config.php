<?php
define( 'DISALLOW_FILE_EDIT', true );

/**#@+
// ====
// stop wordpress from auto updating because we have it under version control
// enabeling this may result in local and live environments becoming different
*/
define( 'WP_AUTO_UPDATE_CORE', false );
/**#@+
//
*/
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wrk');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wrk');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if ($_SERVER['REMOTE_ADDR']=='127.0.0.1') {
    define('WP_ENV', 'development');
} else {
    define('WP_ENV', 'production');
}

// MySQL settings - You can get this info from your web host //
if (WP_ENV == 'development') {
    define('DB_NAME', 'mag-dev');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
} else {
    define('DB_NAME', 'mydb-prod');
    define('DB_USER', 'username');
    define('DB_PASSWORD', 'pasdword');
    define('DB_HOST', 'mysql.mysite.com');
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Sets the default theme to load, should rename this once you start your project */
define('WP_DEFAULT_THEME', 'magnum');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' j}J@2|rRr6d3#6l&[M8 WIDQ[(0?x8iy?B]|aln8=htP*C,q$Zx5SLpAU}a)cf?');
define('SECURE_AUTH_KEY',  'K_fnxgHeR>)vgK:pKPb5*d0kecf3rydU.QP+v|7:yx+D}(>yOf+-9KnF+%I=u_Pc');
define('LOGGED_IN_KEY',    ']}L|DJTH~3TC<NokX:1%;6k/bci?*S-x;O*3LxyxK0HEy@ndH|JYi1Yf?jzx|ei$');
define('NONCE_KEY',        '[s/l%6$R7U)E-f:JJB}0jZf~+2K^>?%q]bi|;S+^tgEyKAP1MCNgpaj5L~Ed/-2{');
define('AUTH_SALT',        '@qZ^,xugO*hB8jtnv@sK,b!J/F)7yOr=!9=MG;?:g;_u559qJJ!+#!;>XMpve/NN');
define('SECURE_AUTH_SALT', 'E.+^oiTnhyOq=!tTE86:WoUi}/|c0[o&%bQ?uT`SkE~%k}t3#P1*vx+|YPs#QKw=');
define('LOGGED_IN_SALT',   '[-6|v8kP7Rzsn`$lEK?f-9<aJW57yLu&],BO_w--y{PZ0cPr7nbe,z1b`,-OLv*C');
define('NONCE_SALT',       '+XT<74S,~u+$8<w!W_,~`8gH0Jf7%9.{BDwtmn#8-3,gh|-<1;*^F~1N(+oRyxb5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mcr_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'en_EN');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/**
* How often WordPress empties trash.
*/
define('EMPTY_TRASH_DAYS', 30 );  // once every 30 days

/**
* Enable post revisions and how many are kept.
* Reduces the load of the server (lower num is better) when turned off.
*/
define('WP_POST_REVISIONS', false );
/*define('WP_POST_REVISIONS', 3);*/

/**
* How often does autosave fire.
*/
define('AUTOSAVE_INTERVAL', 240 );  // in seconds

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
* Increased memory limits
* http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP
*/
define( 'WP_MEMORY_LIMIT', '64M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
