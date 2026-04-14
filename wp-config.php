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
define( 'DB_NAME', 'performer_suits' );

/** Database username */
define( 'DB_USER', 'steva' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         ')hkITQBPvfTYy&F.*E;/3[ez]}VpN(ogULm dSN10?D1 {:-`T&f?)kwc1UuNZ%G' );
define( 'SECURE_AUTH_KEY',  '&:op<3#:MXIa,1@LOci%pkg3d!h(H:x$f|=Nd)p](rVV;~8tNb`1+=x/7D9g8KT^' );
define( 'LOGGED_IN_KEY',    '@cA9]s&r#sMm<FRjBl@9x31Jc-__~_KLDO^>I+*]]OwhP|5yj[W[oJu9,xE]BBS3' );
define( 'NONCE_KEY',        '$JRB*c1P+|Z1vB@T9O2Cf+[:r:HT+m!A&wUv,Ce%c1g-kIV8qSyXGqgG%nvH=-,4' );
define( 'AUTH_SALT',        '0=4e<@36O?6z0T70e!f|?FsaDehE6E<g&c[$H;JA_!TsoMm!CwgB5z~9S)<K=wgl' );
define( 'SECURE_AUTH_SALT', 'Cnh_nA%;^.uMmNb2.>|8g?L%-gv:WA]4OD%<fU7kmaEO]T:WJ<8WM)qf2vZFvm98' );
define( 'LOGGED_IN_SALT',   '+J}OvmK`acFwf@7sJp0zXo @FN74~7Gzlgy^hZT-_]hG(N^0rNI$|6zQYzl%&xW]' );
define( 'NONCE_SALT',       '@$IA]c,LMgzzT[x?3`%8[Q3Z1[i?MtS8UegE-O&F$(~(v1R8<1.8C|H6p_gdt/2)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
