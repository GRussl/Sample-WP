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
define( 'DB_NAME', 'Bigbrew' );

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
define( 'AUTH_KEY',         'vVSN0LN^vw[8?hP+I@~Ht?&RKQx<;Q=3_/e9xh~6zce>^1Z1UE5:,a74/|3Nop9c' );
define( 'SECURE_AUTH_KEY',  '/B+HfEd:iVZny=5v/:fKad&M?#i YBw0JxkT;4rBgy*vyXcllsJ;L!ONP( MC(j}' );
define( 'LOGGED_IN_KEY',    'NSn?+VSN!4amgpw@+}Kp>i<G]yT+| GoKCyx3KgD]Mf>2c~+kgMfsCNfMGa9bc= ' );
define( 'NONCE_KEY',        'F5Pg[LCXJ5D:.Yg;PwM4yc9gn;>OK97joG!djL2p9K5HU#qMG]Xlf7,>3/eIog{a' );
define( 'AUTH_SALT',        'pUc46f=M[UUI>C]8v:X45JdjZF#] E0S1zAseu#*O${K[*8zye;-#rs17F+78Bom' );
define( 'SECURE_AUTH_SALT', 'lw6|| 0w 5e,8_SY8z}#NNT~z1HTz2Ve^B/dkf2a3Vi;]$Bf1HwYW_+.F1(U(N {' );
define( 'LOGGED_IN_SALT',   '73sPkY`4kQuDCm{yC8e$#a QuC!&9$bU$ks3~;kY|#__9yP582^evQ;%{Z8%6CNu' );
define( 'NONCE_SALT',       '/GeCb((I%quDP[xv;$!=vOp;@@C<zq2[]=lw=azm.b)p_7k;cIZ={IFa1IF#i&1 ' );

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
