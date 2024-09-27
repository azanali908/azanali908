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
define( 'DB_NAME', 'azan' );

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
define( 'AUTH_KEY',         '2w}]ZPGj7m2o$x[JOsqKtXUj0 U0[`f%<?Kr;Nab #TVG?xW1jLe!y1*% P:2F(,' );
define( 'SECURE_AUTH_KEY',  'TcerDl362@AXQ1|~`cs76{7|%mF-%U1^.[t_ps&K.}n^JHWk6RWlq98U&g|y[fEK' );
define( 'LOGGED_IN_KEY',    '(q*h%MI/_{!$d;k25,A,7nX}kwW.fq9+Bi;d~xX;jn~*;;6?YAm;phct5Tbu]Ia8' );
define( 'NONCE_KEY',        'UdKI=Po-bG&WX41)2>xn(G&8v~Pq3N.`jOes5.%[vsc[x:_2o285u}%OVQi4K&Tt' );
define( 'AUTH_SALT',        'qP/ckl2gJGq{C9vVF{-*()JEH9_/x5dO~bCQ!St|#Ik6iO:5_Zh=bHuwnE$7Y3om' );
define( 'SECURE_AUTH_SALT', '_lFeGPXAU.m=:t(EMW^WTP9>z`^<F`@|v,yu9c1QgY9qBeO^#g,b?_;U&7mpBAx<' );
define( 'LOGGED_IN_SALT',   'y}_KV9AK#9ge#(.S~.Hqpj5+<;LT)?=$Vnx1JX#lFv#r&z-@}MjeFbHm$5&]DF8B' );
define( 'NONCE_SALT',       '0YXr2~p]4Eq`P9#LoSe8N~Jpu(-p$}G0>Ntm8T]3$~7Zb})OkQ5:`l9aX@)^m^@z' );

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
