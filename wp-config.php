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
define( 'DB_NAME', 'dye_wedding' );

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
define( 'AUTH_KEY',         'l@pyS,] GFL{9o0jYdjHh]gcJd]6b ne=< Qq$4<OD+b7*o?n@n`o3lK|`Jh~oIz' );
define( 'SECURE_AUTH_KEY',  'yx$4@/p1Y})+P7q*n3y>J)Aj67by.|XE-9HJjkAVDC4]jD$z4W{=iItSo73<$nQ4' );
define( 'LOGGED_IN_KEY',    'WC^W0q;T2`2)Xva4ZNG<rBEOuB+XdK[orPmH0Sv#80j877JBuOO%w0i8=n+8_s7v' );
define( 'NONCE_KEY',        'pl;~+kH]XaUHx{/MMmz{~q!5Z%KCy@3fj}s.Mgr#@&zI^g]]CvwuVsks4IE2Ly{g' );
define( 'AUTH_SALT',        'xo0)I:5@fh./@{hMu,C2)v+AE++>.An9E(V4s!Cb(l<9V+9Cg@Liv{ Nb><X.vMN' );
define( 'SECURE_AUTH_SALT', '?kkQVj2j^_VwM k1P1S1jHqr{9gp0uYft ^Qngvh!]xV$eFXY(UUjwm9ksvb[?^U' );
define( 'LOGGED_IN_SALT',   'v9,n#7`^P$ I2-#R>CpT<Ob.KR{]v)T7W5%sc^[SR,?flyO; !bPN54%kH/o}`fn' );
define( 'NONCE_SALT',       'u!SL$tFz><[AyCr{AuRcK/B[2eJBH`V2t&/Or^$g},T#/!Eg[<{FjPo5PkcDdU=[' );

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
