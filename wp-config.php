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
define( 'AUTH_KEY',          '[6zjR8%h4`jPe9B=J0Nh}Jg`;nu!>gIHN.7ss`3x>M4dCSBG$zkmW|eW<56fX-c9' );
define( 'SECURE_AUTH_KEY',   'TW9RuczdVX3Q*<%&_{Or0E2-.OwR6+z.1 j2/9~S;}CwT^,IF+u(^e92$HzN[W*h' );
define( 'LOGGED_IN_KEY',     'kuqR13j>Fzt!FH,<LqZW  Zo&115zI1fOXH]n~B$z@n[E7YCo6Cls&_nL([b0vHi' );
define( 'NONCE_KEY',         '_3w,M,>OdU%bxv0:7Xi>:xhbQeX8Bk<U^w&-PBD),o~jtp6fz<335$X;&|;s0n)g' );
define( 'AUTH_SALT',         'x2)^wvFP3Q8Pi]}4jVhn+j7K@kq 0RK4TA_0GZ1m%vtR3H*h6@oHw<8OFR#)Yr!p' );
define( 'SECURE_AUTH_SALT',  'Uh|7_rw_VT}ZZWl0m<ja>13*l%|hM>i&EKC3vJNE !r8lxPEbbU^@mOF5`<Xp+h!' );
define( 'LOGGED_IN_SALT',    ':w1oPR(U4K}>qPHMVT38P?:+ZIA6r`jZDsfJErrc!.x:xVPFme^]?&NT({4}p9]U' );
define( 'NONCE_SALT',        'e=@<oxH$9VUw6K%`h7}aP.;53c?3X7G*&JUXtx9]Qa},/ F){S3.FdVySo9?}gu%' );
define( 'WP_CACHE_KEY_SALT', 'j2Ns&XXLKq2g_LVe{yD8Y/`T^D.>+8OGl )DM(L~pflVo%})9uA#hYw-!&3txvHS' );


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
