<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         '`cV,Q~ZHYfv.qwO);VVL,S1U>c!(PlWdV!!{d|dp/edYP+@xn@a)_BO+T%(3`cb8' );
define( 'SECURE_AUTH_KEY',  't9PokcI)&kRYqtQ+9N^a7n#x+LCQtGmyS<qlh<QgjB[<F]D*M*,@w[zB!0)fSpeV' );
define( 'LOGGED_IN_KEY',    '=H$$8F9shXKK]!8PqgMk}9Z?m}Y/IyP0uVu(0}O,pAfuaNqic}v:-Zo<=i|s1i/i' );
define( 'NONCE_KEY',        '-=YYKF*pwN@@abq!~!`lk5{{jJr<jtyG?Fy./%shG{-[Ha)lE KVZ$b`<Bx:t0|Z' );
define( 'AUTH_SALT',        'hO7%F[9z]E_{sO%<x3k7|.{m$77SuTUfSWc(kENR^K3H~6*r-LGazGQQq2r)Qz8G' );
define( 'SECURE_AUTH_SALT', '[0onOO5Zgo QZZNHcenXcnZzWVbie|a9f3oLb/kC+WPSyJIkGXH^n}kW>&xNFA2+' );
define( 'LOGGED_IN_SALT',   '0]sl`{d@PaCl+:0BNS<R%H#644`v-Q|@6D$obv6aqzx/<.Z6g>WM`%0[?w1S+c.d' );
define( 'NONCE_SALT',       'i0w4K%w|k CwmW|5v17lRPatQDE:>nlW4x%qxtlS|IqB!4*KMq]qb{}{4htr}}X7' );

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
