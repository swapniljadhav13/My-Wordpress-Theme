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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '^Yd*Wm>9[nu*d#x+FxH;bRsi-@+J@=l.$Zbe<b AWHh/;1#Mt][Y3.+/q(SJV*F`' );
define( 'SECURE_AUTH_KEY',  'I$@!%K/@S+j(B)<e|;AjTN9.oz&Ag8=jr( L=Tz`#!BM c}3c[7r%{kOPWdpL;#T' );
define( 'LOGGED_IN_KEY',    'T[inU_c@YaRxF=}L:VV;;*47qh)#q(v!*Ms}Vg*Z](|2`UsA_TmMDXdRRv39owmh' );
define( 'NONCE_KEY',        'otJ@+Q]JsXElZOhE$_qI{+<)M7U(|60b,_w7q!(1S>u@;NGvh?|1f^U0>6CR*:S ' );
define( 'AUTH_SALT',        'ZnLMNMBmR+56;0jx~~9<q+ %6+GK1ZFu~9C.js|$2F43}[<E+$6CF+U9x9u$pXHC' );
define( 'SECURE_AUTH_SALT', '#qhIr_</`ev9k-q$z3>IK@1pd)|0N.rzPn83:/j(Lo0k>d28Sw;)wMTUDfn?n2Jc' );
define( 'LOGGED_IN_SALT',   'm^mc=59wgDc=FYzurzlKC*x<[`CS.!2E.Zi10oo}8)zJh0i@y$X4 +ZR`m&Fo}(d' );
define( 'NONCE_SALT',       '/;%I6B@s_M+;]GW,VU7tr(ZnCVYSUaOv]y`;[fzTdFCb?FQjc9P;.(ZTg2ZHU{1]' );

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
