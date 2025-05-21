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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'u?8]9;i-^H=O?z}m9D#Nm:i+Ow) aqcn^UUT-LWFj4mX8svl_|sUgeE*JVvCrVl,' );
define( 'SECURE_AUTH_KEY',   'K][H4&aE`mG!jdmc=s7Ggu6p?<T$SXeM4Y$4.{mmI4TJEg$):a1al$$usv^GyBa4' );
define( 'LOGGED_IN_KEY',     'AqZ/fx4E6+z1m]8+$?G:QG3t|amp!`ngB{d7drQl1O%U@Te]`H@D5dadkc/SSM?e' );
define( 'NONCE_KEY',         ':1].s/:?Lu#e:CU8y=/A09^9R(!;=.7y $Dga+)tVeQw(eAKwW8K6o_Kbd,g3;<(' );
define( 'AUTH_SALT',         'QUK}]$>=K6F%i|VRK|PLvp&COxf{`H0kI0hJOw;(TI&,-N=6+=lS?4l[9j;EIxK|' );
define( 'SECURE_AUTH_SALT',  'GMHz%]g0~!sL?{UTFh_3A)L.i>a-6[<)?01@]e~gG#xpWuj@c?Z*yzds=OL3Z K1' );
define( 'LOGGED_IN_SALT',    'KOoO4xCcO.YG+qd* #U|<:PJg%{O&FO<O@J^>-Y3gWt]94(tRhblaL$Ig!m+Git/' );
define( 'NONCE_SALT',        'LA 07W*n]=q:O#_hHw7$MVF@^rjYYQ?rvqpx&v4)(=V#[3hWSXlB$pg&.D-X]iHQ' );
define( 'WP_CACHE_KEY_SALT', 'Zh;&}9.:%Uq?^IKaEWcbP)7y+7*k)f9<[A0`.vuu5qK1)PJ0PW)?vl;^]deqr}fL' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
