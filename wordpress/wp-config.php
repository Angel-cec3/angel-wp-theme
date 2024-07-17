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
define( 'DB_NAME', 'angel_theme' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '->&G 5|/7Bn??T Bhp7p.5%r9IXD2D3 :/qs(_T[puOsyZQ,uO|M6NIOD|oQ=<NR' );
define( 'SECURE_AUTH_KEY',  'D`5[.Jsjy!P%3`O*}U|JU!dxE:.1eDtCc.6%*Zi-F*(Al[~|0N<|r}:iRT7M,8A]' );
define( 'LOGGED_IN_KEY',    'W(tn4d, Xg)!e&A1Xr{mP.$&7OZH9+(icyav|e uCmk?]O:i|s&W=ldrAIVnJ+/b' );
define( 'NONCE_KEY',        'Slw9oO@L%S4dqgDKj,6E9%0EnPQ$~A/EWrb>q8nKguItv>QM^Nhf-aoby:mn[gYt' );
define( 'AUTH_SALT',        'a9YvMH!DhVP+.NR`P(=F>9,7cs-@z1d*i5ZB#omxe38N%f``kS7cl!5CKKaQ8P!~' );
define( 'SECURE_AUTH_SALT', 'T+k0CeXLmg_tkWb?L_fx/]u3aS+$eh~`X0 0Ar1V84xT]PS=UJB?l^&iRgUeGtUP' );
define( 'LOGGED_IN_SALT',   '?Xg5/:.D@S&piIqIm)?*vz&o0#QzY1nP~B,vk}P2&2GDE]7M fbEY))8]^3:U&a@' );
define( 'NONCE_SALT',       'J>)_K28`5K529kW^X Oz5=U/[)XL_Ru6T~vB_^n(-W]eX32AWiCkxQYC`MFaq9za' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'an_';

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

