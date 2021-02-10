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
define( 'DB_NAME', 'wpresgate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '5HwBKB&4&:{d9vbrX&##W=ljK]=[eg4(8~/(E*,u#3O Z_{StKmzgHTtp@@%nNS0' );
define( 'SECURE_AUTH_KEY',  ')kIU8+1Y|gA)]0n=>dt$|BM*v;]&f lorq1Ur^Vm;U,=aryq:eMkXvKcNj4MO4?!' );
define( 'LOGGED_IN_KEY',    'NLd-9nSgnZMXAMVy1TyePby;&?,>j{RwfDEe_@R-94{|}Vfr*CwO54vU<;}Rta {' );
define( 'NONCE_KEY',        ']5A]>S3[{%-a9Pc%p0/bey=ROWP-!yr /:=G5~p5Q{|klySi`F(5m%0^bZ&HA3<.' );
define( 'AUTH_SALT',        '.=V&4p/A@Y9!~OYr/Zl+YNHJz t-Ua3P`;ZNA`Ko#)PDbZa0uBh}Nw1P/XaNgMDq' );
define( 'SECURE_AUTH_SALT', '%9Vn(`^aBlHv9X`f#NDE7ymBuyyn+& dm@`LlsC~RogaOw/-e(}I7ySwd6~^[k|S' );
define( 'LOGGED_IN_SALT',   ',8_7*|xN!v$zBFA}yqZbkuLsv@NL(0ch,vCYBOWO.<[EYFT5F%Yzaj4e:I(&~~.t' );
define( 'NONCE_SALT',       'Z)?UQ5^MA(U3.,jTU9qt#$!TUb*y[XC5MBi`X(Be9a(l+ y;O!Kt=Jj]<KK2c-#o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpresgate';

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
