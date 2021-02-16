<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdev' );

/** MySQL database username */
define( 'DB_USER', 'wordpressdev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fKIGRJJNPJ0pHrTg' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':ZGG W%uK,(]I&UWDyY=re/$e;ZRIbI-r(DrP_PvR&X(4Ie(ZSVz3kZ9NW7CEvta' );
define( 'SECURE_AUTH_KEY',  'fy6$ Jv#.}m01e3uW(CuzR-[=^b8Nr-53sF$jtE#,__pzTsG9JHGD9xn[;E4U~-,' );
define( 'LOGGED_IN_KEY',    'f:GqD[EwU60m:$,p_uGPA}BRm6S#lC[etF%x=NHxA%x5zH*=4i=,;Av1U_Rw,9Jl' );
define( 'NONCE_KEY',        '#uktZ@u:cO*q^myR,4Q8M]R$sFobKG:6*.q<Uy+M]vp9WAXG:bJm3wH|$/kuBv8`' );
define( 'AUTH_SALT',        'f;jhAPGB3S,vay{t/psSfv6^voR#}QvHNvt/_^F7ciQ;Zd?T/oo~rD@}q%2%B 4^' );
define( 'SECURE_AUTH_SALT', 'RjP9,zAySY;vJES!%Ws&}t+dn0VJHBt7LB=vsV{5<N)g3%ei$owdz@{iV=E<):qN' );
define( 'LOGGED_IN_SALT',   '?E)xF/:-=a(zsN6~iu*-RI[z!]27V#LVF ~57C;1ibFpXI{(2s:gu;b!i1lCf?Sh' );
define( 'NONCE_SALT',       '_/Z=nOf jQ-1: .XB(P4kFxA?ach$#8$6E^j_i?*IZU?/OjsGl;wkW3A2:1TN+jC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdev_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
