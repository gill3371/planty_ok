<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty_ok' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '),qnI~jpV!fQJnZx9Pq=]4Y&`DrPKhKksgfTyM ~,2Yr!~FT`X]5Q~&SgJH;B;+w' );
define( 'SECURE_AUTH_KEY',  'y ,4>&W=5::hlz$vtRt_pe}d^GWu&mB<1Y,(a>GpK<(^J1d7lp9/tZ&3ZOG6SuA[' );
define( 'LOGGED_IN_KEY',    'a-z2qOQkXwqDy<|_-us[c%e*0o2H<gp|oG.%6u3Q7=YQskg`UDE&{x=7sltm|gIr' );
define( 'NONCE_KEY',        '3l,Nct0!GtQLvWvw<cs{Q ^IrmH|SIX?ygUxU|zejXTK*N1l4:d_/nM0RQukX2k:' );
define( 'AUTH_SALT',        'PN1,4F#hxFj&W9#NbHGJY=eiT%~J< va?dNs1TjTe?v+w-;v;>T~Yf6CvcUjE`hm' );
define( 'SECURE_AUTH_SALT', 'Oy:PS)[=Z$Ov(t8Ej!Hr lz*4K>{KAMu /By$^>aQET-SSrp1V9nd3pgY6pW%CJ~' );
define( 'LOGGED_IN_SALT',   '+GF-)amU-KTlO={JfqL]8B7O!gHAY.[1nkJRYjK]S/{FDKUw@|%NICT||EAhe1du' );
define( 'NONCE_SALT',       '1ND_&^3Q2|9S(EBrDVGD3.4BH$yt5VQ2O[T_NKkciQOHx57dZWb@YI{MO6.bx_(L' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
