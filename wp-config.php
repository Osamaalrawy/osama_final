<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?h&<yKY;u9hRw#}~;Aaabq&V&@CTAdIiI:,:o?q>*n=Y|x85mTdwmM:Ld9jtZfVc' );
define( 'SECURE_AUTH_KEY',  '0Qb~zWhh `r:LzPsPT+LOEU.wE!UO}@)^cR|r3{ggh5NOMP9ugk#P0tJ>T[T<@@{' );
define( 'LOGGED_IN_KEY',    '8qWhP4|xUy^2/fK@#lN2_r}LWN1`%u19:|mBmlI]XG{gf{Fc~T3>JyYf2WePbso/' );
define( 'NONCE_KEY',        'h-}&./[ttu)fScs|-A8K)V+~#f:T>D=9D;0~R=<8w#]`g^!>QnBAr0!_&EQ~OW=R' );
define( 'AUTH_SALT',        'p7Q,E@lK16QK6j%}}A8r8Ke*@YXi-B4duOzjrI}1%rckQM>IE*4U*a3tZAWg%k])' );
define( 'SECURE_AUTH_SALT', '$R`F})TSXRfR~I{O, BX6ciy#IaVsr><R=f13IV#r,[j[x<GcjN`d6bE@ZYuwCNy' );
define( 'LOGGED_IN_SALT',   '~YDYq0Uu=YuCYOxfen{Qcr!{lrPif24@nw2W)bA4u[d+<{dN%w1JI66b~tE&2/(&' );
define( 'NONCE_SALT',       '%,2<Gp?hA%HP6TBG+8+mVH~YeuHgLqs:A&_d+<&P]IQMt!/1ZCgQ]vfjuEcwN=*j' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
