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
define( 'DB_NAME', 'leads_pins' );

/** Database username */
define( 'DB_USER', 'leads_pins' );

/** Database password */
define( 'DB_PASSWORD', 'JNnPEbAbGAHWdaZZ' );

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
define( 'AUTH_KEY',         'do NU(T|.}gxJ$j1zNV5@IN]/}&=0^y.<`q8>ua0{+WLInwN!!sO{ 5:L1p3oU<K' );
define( 'SECURE_AUTH_KEY',  'uVL.*@2uqq{GPL#9UEP<AxJ/d*u,_dn|f[<VH9u4r~9,]d|5h@dZTn3IV8y%+*7A' );
define( 'LOGGED_IN_KEY',    '4#*N WItmGD?3b&qtv@^AI4C0hiW-B$!W/80W.1#W&.OwyCp$;c{0O{82~Hz?%Oq' );
define( 'NONCE_KEY',        'FdKIuI3YX%gZT%,uB_WvzrKnLdpDmh]%7;`X B{jCOKV/x,d<EoMs{+(<Q+K&:iZ' );
define( 'AUTH_SALT',        '$?$3?Jy0:]vc{_447@N/*?F(N=4_3`$urs(NrH^hl?pXX7#0*cADX^vhL5mkmVYc' );
define( 'SECURE_AUTH_SALT', 'lP4Y(A>V;5*9U7<N pEXdaA0Eo](=t(L`=ldN$[s9lU`T3U=3d;gSXX?~oNB9W=,' );
define( 'LOGGED_IN_SALT',   './<fDuYlDJ8<-+=N|9g{_L3=);2rxB#fuKRJ|]cI!&u}Y{!@Azij _2]a({p<ZCn' );
define( 'NONCE_SALT',       '5MjwpH2bmW+nE`*cN7*zFq+`LE^[Ur4{61#1nTzy+$Sl`yY*:,4x@.{<~IVig]^Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lp_';

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
