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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~X{)T$us1,=J*L16]uw+bRrm) ?||]LG3sm[he9IHf._IB07y8Uv4 EvX#nD@c+{' );
define( 'SECURE_AUTH_KEY',  'rHCiX@cQoZ-n>I204+K*)yO^(^!WS>xh#m$M=)M<7};@Y,t>CAB+YHQH8(^dFi#g' );
define( 'LOGGED_IN_KEY',    '81b8RpMN%y+_W| I**CHc7VSpfJB;aG(f^U3MPwN^Bh^WPJ($dx9}x}L|!qQ+.74' );
define( 'NONCE_KEY',        'TOUfvpFHNbhjxa5l-m?v2?:(v!&it+=<!v]6r-twhK%+2|}EcaK#tP<6Zl<+$zzt' );
define( 'AUTH_SALT',        '.>w6-3.%uTQwLGbY>0DFAfr0P)9HkY[w3llqv[`*[u0TL_RW@^rJ70py>qaX=1GJ' );
define( 'SECURE_AUTH_SALT', '4Pu`Wdy&<T>{G::On5:9 ZyF?ItUGi}]H.<nV+]*-BO+1HlWlWEQ*NZe:Z<}kS~X' );
define( 'LOGGED_IN_SALT',   '@#?I-r0zB-9/;mJ{Eu>HV+0hB]ny@i3gfb!nF*Ccp?0|7l[a#Js8$BA*K>%q7nMu' );
define( 'NONCE_SALT',       'Yx20WR3R/*)tSX.R1@PR51Xq`bL6TLV`;rbV.jOr:ZE3CTf2[F{Q:W@+@<hN9qZs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
