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
define( 'DB_NAME', 'firstDB' );

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
define( 'AUTH_KEY',         '/u:=ZnLi@@P;^TJjFk#=g-U[|63,vxG>28HubjyK{)WF<-u.;la8OAxek#]$c=40' );
define( 'SECURE_AUTH_KEY',  'b,r~|?9nLQI*%N|8UDQ3x2#Y*a5Ghmt)TZ4[?#aFy;?b1N@ qA/DqLhmV-g9VVz7' );
define( 'LOGGED_IN_KEY',    '%E]#?ON0_T(FtbQOhTZgTr_z)!;=?y:%5P7((n^q/|uTAk[uNN:3SP7o{F%E,y?X' );
define( 'NONCE_KEY',        'd)Qf[CKe0^B}5rN+s/AY>Dh0Z`A+dY7:jd c[G(D1 8ZN#lhZa_S7MdRI!mghae/' );
define( 'AUTH_SALT',        '*C1=HuA<1N1l&igkk-TZc>[M);jwI-3.HH+!oVn7E ,Ea4<wR+,}B/]Zq~iJ*D[^' );
define( 'SECURE_AUTH_SALT', 'WwG[2XIMFebcwMljnBu>6J#anrD)JzhGjJ1%AU*VgJSL/~P+D-qcsc0!T8I >`nF' );
define( 'LOGGED_IN_SALT',   'i+zvJ{Wm2q__f.VFYJ`]FhrxU$=8iyvs<=Lrbu,o^0X`p3pv=cPAwp|y5iQ,dz#L' );
define( 'NONCE_SALT',       '.m80`K?pw5HTPZs;hAOWZLf(k.5]97oo;rLjN;iPWN z4a+~2cHA?JK*tZ;59OBa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */


define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
