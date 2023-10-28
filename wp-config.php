<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'zara' );

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
define( 'AUTH_KEY',         'Ql?M^/[Z)i:zT+qFq N9K%NIh_k/k4TRmwIuy2a%C<-@x)C%aL=#fN2t`I_MOayT' );
define( 'SECURE_AUTH_KEY',  'QnDx}|*FJC#eFX4y./E:=hmRkeHX,{/?rG#3>+;[R$[e0|5r1rZ-uODAx3m9NQ9C' );
define( 'LOGGED_IN_KEY',    '0oy](v[qd&zCX?oHX&@.TV~2kUc3(1hmv(eNWn09dlR3vy|:y?hP}UrSo%4Z_eVi' );
define( 'NONCE_KEY',        'ePi5!PV6a*3O373kXbYq~m4BYgak/cl`1=!;+4|ozN?JITagsr4AZ4Y 67_!PZBa' );
define( 'AUTH_SALT',        '*Lng$zE7d%-Z)Tdm+eK .-M1c&RV}C_4<QEVv|2nOZ498^Xj,4R3#x;u,cL>,Q]E' );
define( 'SECURE_AUTH_SALT', 'm!q!8XGY=aQU&A=7<X4xwrzv60ws}_DE`5E:2pbBytNg(t3Z$ 3*Od:7p? Ij]1J' );
define( 'LOGGED_IN_SALT',   'T;1v4w=c%sJ[?vtV?vIU#%z=&*q+#|iNJd{gw2A2> m!m=49bfq_od/8km]LOI(U' );
define( 'NONCE_SALT',       'P[/kbPb5R._HY&(80O;=/#~97jZ`Pxs(ZtnQ1Vi.E?+ao5ftb;q;N;nXG@w2|i[9' );

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
