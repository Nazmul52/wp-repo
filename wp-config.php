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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '0LDMKw)[ej,jvm?XRM3R%WG(a-#tz{/oj+@s%%by4G5^t{tupVftM:4ustq!s}jX' );
define( 'SECURE_AUTH_KEY',  '{L. pf?G !e)EmzJ*__(69SShK@efs0m9S$, L1,FD}$u#v0VJ|kUR~Ai/T^-Taf' );
define( 'LOGGED_IN_KEY',    'O`5wQX9`UX/HM4Ur>u&%P hEg]sBjJVXKhjkJ@ #O*a:#?^BUx;OJrwWXWv SWc>' );
define( 'NONCE_KEY',        'DRM/.u.}<n{|rvX-E0]QU&BfAN61XYPur9eVFnNa!oI06][ux9RpK$TJo?]s5WPX' );
define( 'AUTH_SALT',        '}J];vQTNT;zIGf6<6mchi4itzJg[>OQifZ&@Ps] }4JyGkj&=q`jr<bF1eK[k{_@' );
define( 'SECURE_AUTH_SALT', 'yf?C(-Ug0OnP`9W)jc6lwi6JM!~w!EjaCb.wxj?(mL:pvSevs^!xAO9pse{(u2%4' );
define( 'LOGGED_IN_SALT',   '=49XB89#w/sh:coW*Rcz}VdnHor)88Bj Rp*3#;UO9c6p2UtIJtu2^o *g1)qtaB' );
define( 'NONCE_SALT',       'Au7p0g.`pbKs&;@olC5a:{IJ;TpD}pAg>u|Ra&7G@m(9B8}@p^pyJ0?]1B<<E~TR' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
