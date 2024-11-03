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
define( 'DB_NAME', 'dbwebapp' );

/** Database username */
define( 'DB_USER', 'dbwebapp' );

/** Database password */
define( 'DB_PASSWORD', '121212' );

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
define( 'AUTH_KEY',         '2Z]^<_#o[I;;SjzJd6+[[IF~}oC@].`OtCD/1P_zBg*$_n]E#NJ4:$C@^NYp{C*7' );
define( 'SECURE_AUTH_KEY',  '/zRPj)g8&&L7(1vpTr*>~[6./n672TVRT3;#a64Id:(T3K!%-><&_sFF.Tr EQzy' );
define( 'LOGGED_IN_KEY',    ' BtP?Kle=B8GPc:AFd)Vy+.*wZgr?$?m;)kd(t-hOWGGK|`ab6POp,`xkDX.!j$H' );
define( 'NONCE_KEY',        '}gqkjk4mCrvm^4?;(2q.>o%ztpEp*z6{f!=[P8?2UN~)mNHIa5idrXM.<sP14F[a' );
define( 'AUTH_SALT',        'vwH]Qi[(9{yn5>d2@jM<[RHr4,ev+;Ut#56blTqybZ)@iy<j34`I+&`u95:Or&M:' );
define( 'SECURE_AUTH_SALT', 'R!T ixLAijCemhORwL(&&?+I:z<Jr1Vy1sRf0i^H~8$m5}f2f9xz0_1NTzy$ Ybc' );
define( 'LOGGED_IN_SALT',   '2c?L^ng4/1EwbherQV-uO %YD1R1HH!8]sl,5^M!JWckog|dKsb_sf@?BS9nL9T;' );
define( 'NONCE_SALT',       'WKXPR^pT%O-6s9}Ey#/hoO`%hyX#xNHv_^bmq)CYN2D;:){=iqE{3gCGyK3EX.qV' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
