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
define( 'DB_USER', 'wpadmin' );

/** Database password */
define( 'DB_PASSWORD', 'WPadmin2025' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '^[ Fowi ?Dny:8HoK5}S?Y0#;sfC;;gz~XDtkBI+boSs;L5#TK Eh4x~fuvS$T V' );
define( 'SECURE_AUTH_KEY',  '7A_QBmgF_jZf^M.{t+;!b$~u0{pg`K1&<^Up8,I7Aud+^fOfT:U/MW|qJMMRl;#G' );
define( 'LOGGED_IN_KEY',    'Our9Ozp@BVh?u?Wk6R,yrIlj&%gf,,,r)H(xI&k}KFja&Fhz}aDv/L-No)bPo8:#' );
define( 'NONCE_KEY',        'tobqw:`M$_vchcy96ntcQ46!7V&07}(ra2k*o*{XF!j _/! dpad8_C%qn4f(*~_' );
define( 'AUTH_SALT',        'GZa4Ii)] 4pt6P{D)_A)1j|7o+Sod-LV;xKMiyngm(z&,M2J;SIQ W~BRqLD{:S(' );
define( 'SECURE_AUTH_SALT', 'h=s_p9Ai*5l?<z+3Rp3B(eHeP(]JBRr}JKx60T#dSN}+o48X^KV8/5~:sd?Xv#Yo' );
define( 'LOGGED_IN_SALT',   'x]i6!?U=;-c #W#AqoiH-`_wW~UJ^t8+A3[_>o%ix%nxX{=~%G]-9>@X~]E?HC1F' );
define( 'NONCE_SALT',       'wck@.L2yhiTd{xnh@w,}j~WS5way1`]37?[mQsm{9bR%u=qw;{dP^!0Sz]P*e(v9' );

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
