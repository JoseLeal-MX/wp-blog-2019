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
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '3a0c79831d83691f0752564d6a42cadea68f41ebadda2cd7' );

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
define( 'AUTH_KEY',         '[CswMg`y<:D%QjfsPIH6mj{OdDUJR1!^s1Jp]q7QR5K`4z}4!*-2K:N,;I3]A&@L' );
define( 'SECURE_AUTH_KEY',  'o>:Q_9{y=KUG>=(u<ekb/zuVU-pGH(2V1?]5eZ]: *%m fH#8Dmc6oDCQ(kzhpSD' );
define( 'LOGGED_IN_KEY',    '11{UZJ=Vh}CEdj.hTgt}zezS5<(kX.b5=MbBuXYxYu+h70>GI+[rU(uPj^BsdaUf' );
define( 'NONCE_KEY',        'a`+LrG~?$,8`!{Dw E)u=?K5Wiz}V1gL3CYEOd-GRV,pN:c{l=`CL]+NkEa@zHvI' );
define( 'AUTH_SALT',        ';%w1@T.DBTJo*jz>-$):w[ZEBa9bT{+5$1Py92tU*7Q>k)co@lY=H6;L+G+ugsDi' );
define( 'SECURE_AUTH_SALT', 'zp!!9Mq*6U-Ub$AM=P-G{A/W?&m$iT!+Ho2oshIo=D05d=MB6g435ZOgo7Ik0}AC' );
define( 'LOGGED_IN_SALT',   '@,A8pt)&?7yT!jcfmAjgWW2WqD%3D-EE5)@N*SaujjpDV}=c0Yt7|pYHYcVrKFu&' );
define( 'NONCE_SALT',       'cZgb^0Tb/r:T!$~tX)o_6zuQzxS.ICU%am^9%U{A.pb[CGgGdr88_tcLhn7p)-~b' );

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
