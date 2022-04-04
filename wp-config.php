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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hexschool' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '^xj6.oto&N(N68!Rq<NV+J}b#Qm:2>KyW~*xl-8:?`nP.%$Jrqx,E9Dr!kg!Zj>t' );
define( 'SECURE_AUTH_KEY',  'f|m5CVm]H<YUQuqX;LE/P~9t9LT.1MigIvk,d!An{oA{1QgCPs7+4M~s+wXSEkoL' );
define( 'LOGGED_IN_KEY',    '}d)9CH[#.OWx[cB2L9K}Y(L-@$ <|vBvm@;_PV anRBjXl><vFcUD W)`hD;C7Qz' );
define( 'NONCE_KEY',        'PwG=xo$rcopk;ITWYVnXei1K2w5!7-ln}M5MTF~I~(b#qHof}QA}BecN2}>RW(ZY' );
define( 'AUTH_SALT',        'ng9Zi}$^oC.Z7sPF|AlD<Bf?[E;LEyh@u<M)CVo~-CN0ui}Asy8f g}YmZrQXVT^' );
define( 'SECURE_AUTH_SALT', '/NNr&?RL#(Q&8.I)awpH%b1vt7::wbgf}(*k`=Wy#+&nmhFMABnTvg24.w84/,,1' );
define( 'LOGGED_IN_SALT',   'gF;qwkhX)L*5%vNeMOi(>u*4{TOv^0~X Ye~_>7t`G+b6T1Ojx8lvZXTuWbnCnPA' );
define( 'NONCE_SALT',       '-S&ys{NP$XqgK>Uk5*~9 ;@isj-E^QqEgi/iG8G-M&$tB)`K~>TrS6Hq%=#I-5o1' );

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
