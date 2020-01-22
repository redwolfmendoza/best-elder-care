<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

 









//$_SERVER['HTTPS'] = 'on'; // Manually set HTTPS on
define('WP_SITEURL' , 'http://' . $_SERVER['SERVER_NAME']);
define('WP_HOME' , 'http://' . $_SERVER['SERVER_NAME']);


// ** MySQL settings - You can get this info from your web host ** //
define('DB_NAME', 'jmendoza-profile');
define('DB_USER', 'root');
define('DB_PASSWORD', 'mysql');
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );













/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SeX0z#E^EN4-G>eExdm3I&+uR62e2@*E}u>6YgiXl#xOqi?80>8_{_K<)b5cC]Wd');
define('SECURE_AUTH_KEY',  '74<]~H%2]9J;;Oqbc7%+;`04|SR: #QqEaY;.^Io|mZB|d]|lWr_cw*1]Cs,r)!9');
define('LOGGED_IN_KEY',    ',pZ%^0YZcO+;}}<+||eRB1$e4o4c_=sk@{#bdTi+]hXXjo*L:E6)v/:F3n2Kdogj');
define('NONCE_KEY',        ';/s;u-x_zup]ZdLA6lc)SEi(}(=4QV@h.-S]^e,#I/j~CN7m7Es~_7y,?q8ympVG');
define('AUTH_SALT',        '4x[((61+O`XB`|=nKYVmRU_9+r-&N%86&3|r#_L6P0o}2Fl-{Q5<OrAcWZ%Ll,}9');
define('SECURE_AUTH_SALT', 'ERk:u49zU,6lz 0;34T9lGfQ0`1$#VZ&3N]4(+q.[?B+9L|vPc6FZ^+|?8G@Z/w:');
define('LOGGED_IN_SALT',   'i}VVGP0]Lag,$HVYy@8q[%u9-t+0s2D1i|{V4B7[v!6d<|_4Puw._>)mU9]&nszt');
define('NONCE_SALT',       '-(Vog!Fwb`_L<^g;{/4W+][f&OW)AR%X2Np21p<w0;y{] ?@/*J!}+KJdz{b5ag=');










	
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';













/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true); // Enable WP_DEBUG mode
define('WP_DEBUG_LOG', true); // Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_DISPLAY', false); // Disable display of errors and warnings 
@ini_set('display_errors', 0);

define( 'WP_AUTO_UPDATE_CORE', false ); //Disable Core Updates, added for redundancy
define( 'AUTOMATIC_UPDATER_DISABLED', false ); //Disable All Updates
define( 'DISALLOW_FILE_EDIT', false ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'DISALLOW_FILE_MODS', false );













/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
