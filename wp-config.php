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
define( 'DB_NAME', 'demo_itech' );

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
define( 'AUTH_KEY',         'Ok]9-~INHO@K)CC3Hl=xSLeQ[E?S|84=zt6/gSK21V,OV|438fufdqBOusS&o{ty' );
define( 'SECURE_AUTH_KEY',  ',YogbdUD~iP8J5;~W}$|[9K((#VPmgElo9<Gz,yqtS%1v=-)u.BzSIHe/Y-,Eu]o' );
define( 'LOGGED_IN_KEY',    '_/&=sbw0W<GWVRp3[8U-#uw%~~TA(,U,1Dv^B|UYB0}E+b>V<sEIkjz7(,BMF]4=' );
define( 'NONCE_KEY',        'vKbcdm#*P.h4|VL(*6t70.g R HyW}HLOTX$fV-]yXvi!R[/%)Dy8` $~+xES/ 8' );
define( 'AUTH_SALT',        '}(>4GO}TWFQXHn1m?<kxlCqvv?DX(n{m7[TJu*kr*|T~Y{z6t@|a:IsLUKT]K?q!' );
define( 'SECURE_AUTH_SALT', 'M~{j3 yJ}W$+Syj2-zW#o-oBg0#b~a67X6g%*RwFSAUI^%(Tz)A_KV!VSF?u&C[K' );
define( 'LOGGED_IN_SALT',   '#<5dO4>O7>286|t2xasVIS@X`>J^({Hv>njZQ]#Cih]AuJ]A>*nSF+INw{.2._T3' );
define( 'NONCE_SALT',       '_prZz,n1:G!,~&z)w`,@YwNE}YAY:9)6YH=>htRgulO5m{PG#j{#Syf@f0KT!~E$' );

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
