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
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'I1##uw#<10,@*H;OocU6m~S$M}1L!NVVs&5Ddy?)[$-^bv`feB/LZqS!S,In92/y' );
define( 'SECURE_AUTH_KEY',  'oCl|B2}kF}M!<m+g+X$>k4n+?1q^|WU@_3?)yR@v7q(!h |vN+96~[_sThl4PV83' );
define( 'LOGGED_IN_KEY',    '`-dRMFMG.WS1qclMRq CA ^B4 Zoiu-UQf!{El]tI[3]2?+CMqPJvMl{=pH]j]Yn' );
define( 'NONCE_KEY',        '(!(80Ka`]o#R3:E:WrdbSQjiS/TgRT3Kak#rQLB|J%.DXLV*/hBK-;%rK)^Cdcc.' );
define( 'AUTH_SALT',        '?0y-=235j-6[7t8k5Vx7(Y<@_])-k6j8d+amIi2-x*U;&ZYQTaW[3oB6V;jU d5p' );
define( 'SECURE_AUTH_SALT', 'bg927(+nkb;i6!+6Wd+0xZ96y!bSuo<;4Tj]6Ec~maAe5lI`hgjml0_>E*tMzpv)' );
define( 'LOGGED_IN_SALT',   '{2m6sCG [%H>Uvmg-(s5KLf*kfVq&.}*U.j*Xc+C4Zn)aWvLty!p~mSIe?dr)TRG' );
define( 'NONCE_SALT',       'w>`:g#i;ip+Ml<*~?ETe-+,M2)!*5F%X|QWXs-mGnZ<2wR&3gcR#1E(>=CB$v|%W' );

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
