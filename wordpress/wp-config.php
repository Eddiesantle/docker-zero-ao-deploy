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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'b:PNf/^{/*a^4WOh_]iWEfp}wW4|@T_|MG|wtEYxGx;K{-=q>xP,*,RW&;(xC.z%' );
define( 'SECURE_AUTH_KEY',  'kIZfe.dn6F_sz(P.XR^j>*p}5UMvy@9?gBwj;FcSY<|#BE!UjjT4C;tcl hUYNS!' );
define( 'LOGGED_IN_KEY',    'i%D6^xMd|(os:)3:FBcJmm-{4RUvn=y7GCbm(E.g2FzRV!pS@psvMpaFZ8n<WJcn' );
define( 'NONCE_KEY',        'v=Rqj_PNl7^; x{.spcV|I1ix:^0W-F6z:M{>QUcv*|K||69ZiNJF>Yv#$]3B^`%' );
define( 'AUTH_SALT',        'R$5yl]=2c6x%f36!u`.9etwwc_=<kK0w){3QUT(Y7<D*MqC=jRY@,|&HNrs{(B?1' );
define( 'SECURE_AUTH_SALT', 'Y:ZF&0e7X}9#bpJnn=aoL2isUMV/QlgNUL:hIuk~y-w!@{ 6*vP8D+xV<8A8l?M1' );
define( 'LOGGED_IN_SALT',   '|DRaifNaMN[Z!o*<llCk@^MeFh`di4^oox$g#8t=.DrKH%qfwj|HxwB{?S7]1HNN' );
define( 'NONCE_SALT',       '$Y&sLx@.Zj<xyUIRR?4*?d8YN)>]1cVq2udH0pQgdr4J=R]Bq,-8l#FhQIQhl,+}' );

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
