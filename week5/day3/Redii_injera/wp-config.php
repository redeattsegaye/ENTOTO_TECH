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
define( 'DB_NAME', 'Redii_injera' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_5eE&7%0XFm`O.<+mH?(=)/L`x}<wngi 0Wdm:6Bc b2`0,FP za@e%9dDw5vfu9' );
define( 'SECURE_AUTH_KEY',  '~h77apd=+TQWHo_F]?gY})J)IZw|jsxUJ{oVE4ag|jWugp2<So04T@7It=c3sHyb' );
define( 'LOGGED_IN_KEY',    '!7]iHNz!iFJcB=B _? wO1e/.2jA_QEHLS5C~m`~nfR2KfFN__4!Q]]},ex-Q)bc' );
define( 'NONCE_KEY',        'K5(A0_V7<+QrMh%_<iNuN`kY]c,F{bk} >z::VtH= -t.q(-FJ)sN9$e=T~vTv;[' );
define( 'AUTH_SALT',        ' 4GAo]6Xn:B-CKSIMi8FkPG9L-X>03Me0n<)|kk0}43~Xw:#ub.a|6eV>h>MA+U%' );
define( 'SECURE_AUTH_SALT', '[*CR)C/:^14%Un`sIO0iP,A9&dx%^MOt#G3C=jDF!_MQ[~q]5:[QkgpO11O7CyXn' );
define( 'LOGGED_IN_SALT',   'X/cGP_v_2f!6AdA{|%|[,xgnho=$^]e6E8((i*5jV-[W+}|_AAZN140pD|(rD=If' );
define( 'NONCE_SALT',       'f*q6tf.79STRCI }n{VlOtIuB335U3HP*c01hV/wN&A+K%!w#AYzmav`E_II1bKj' );

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
