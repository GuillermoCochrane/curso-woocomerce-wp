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
define( 'DB_NAME', 'woo_wp_db' );

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
define( 'AUTH_KEY',         'P1hjfW135hRR@>`RjDVx;FawGKq~^9+-H%kuOxa%eMO)tOU<zDu6}i6|,52/D<^K' );
define( 'SECURE_AUTH_KEY',  'Sv75ljYd+&%45(JPv,0Lr9e -0QUPXw(*}ckRX=ty{wf3>,eIo66W- _#?^o$e]Y' );
define( 'LOGGED_IN_KEY',    '(F+Y8`:N4MbSsNu+aO]@{crtbtwNu*l[!;,L9/FxaXf*hz|q|oE$A4qj,4cJzZWS' );
define( 'NONCE_KEY',        '%Xvu(h?JF/?=fMy++w9LKY3R1>hHyHzQ5vr@_f+NZG rv;/JHGRe3*H5~/-($=Gn' );
define( 'AUTH_SALT',        '5tWi]OjUxUM]N,+5XCK{Jb hte<zY~U{6lA=6hnr7VEMeye>;v+t7M}`9I2s_eVa' );
define( 'SECURE_AUTH_SALT', 'h$4NG)|=oB*/;u3wOs>[;B1YICcvY}A>C{R4){:iGl+++/-+MyDCr^9.RHH?F(r8' );
define( 'LOGGED_IN_SALT',   '~bQUC):.HN6G9H>%y2).<{=KZBJ&~WWAU3%)ud_k6*NZ,%.i&}:amYp ba/3O #C' );
define( 'NONCE_SALT',       'p=C{7>54p#l,xMDfw30`^194>S<P+c^NP)ZoWi+a1~>y4OZ+HMp.-=`xEPx%^_V%' );

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
