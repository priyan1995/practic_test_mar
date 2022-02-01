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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'marian_test' );

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
define( 'AUTH_KEY',         '@*Whcc>BHR^=$}gctJeA.@-EN5YsZ`)kmU|pi,-YR=N1iI6Xj8PO1d ,Q8e_$~Fc' );
define( 'SECURE_AUTH_KEY',  'uGjD3~VyHT]4L-p0Vy4C@~YEOZ7!8<B0|1W891fDD:iS_Q rn2TE^f2-EYq6?RNd' );
define( 'LOGGED_IN_KEY',    '[<JlQ.9x90$tgmU-2a{x46CMt!A=(?O,#:v^z.bJlO3% *D72GgAh2XP}Lu#wcB6' );
define( 'NONCE_KEY',        '?u2yFXcQ(@@y^2SX=+F>YZe?Nf[1cN@Ua55,R+c5<zp}z%<;T(oWJZ>h@X`v%9*%' );
define( 'AUTH_SALT',        'X;{WE~Z^;3OT8OUm5q%0]]su~(0Ym`YZXt:[YL5]]4BG.aX{UNIawUvF*v.N2PB=' );
define( 'SECURE_AUTH_SALT', '*I.3-nP7TCL;s!BKe}nGHR1FP U v*Yd1{`~[CekY3^87:5:_tj_ BTI9UC0(iU!' );
define( 'LOGGED_IN_SALT',   '6 Sc=s^EB<V$DLQz)7o4Xfy;A(a2D;6WWUj>D75``K92|eFf{h?Ym-? S|eabUtz' );
define( 'NONCE_SALT',       '[6~+k{t`]T!b1(k0K~<2fYO|fvJ7=*/1Vsg:zd{3%;Ma;PxA>M%SOQV+$?#G9*c_' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
