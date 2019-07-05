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
define( 'DB_NAME', 'w5day3' );

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
define( 'AUTH_KEY',         'yfV>d&0Ii~l!F#~-6l; c~[}]A3ZNY`2j|`@CMr)j)Ae.EPVK_)J!g`5s(6A!#cv' );
define( 'SECURE_AUTH_KEY',  'Zx?1D@nB#_BKs.<,eCV# ]m!IzW oE3LdZfQ4nfhGWzm|~{y{F[M[.w*+O*uQz+d' );
define( 'LOGGED_IN_KEY',    '$>~:|v%f$ds$A&1Qc26lW /9Viah^BQyA!|w:k:*U]7{E-t}FOs`G:If_y<7Cg,/' );
define( 'NONCE_KEY',        'o>TwD_87ny}RWcDB5b>y bH2613awpM6(b%$+#C7mbY$km=QN#b ?jQ2SIMZRrd3' );
define( 'AUTH_SALT',        '@:??Ta(Bq6kN(s_$RgA.*p|RzXmv22C9mP[N^qmv}mjj)p]tC]zr@_.W0@UP>.$p' );
define( 'SECURE_AUTH_SALT', 'J4vyPEQRJ8vQxO-jERK9M&{)06{S%]7+RkSJq[)!2Y!TP,>H!Uj;myxtX9%73Yw#' );
define( 'LOGGED_IN_SALT',   'aCNl[tJrJ`u^.G|n]Q@&#j!RsRFU[V!m.Be`WPzJtSk1{CR)CK1:D5,BB*90] Wf' );
define( 'NONCE_SALT',       '}as-?):o,81p}mEB13(T}m2jgfY?e7(y9l`$%ut]Cnx*be/?47y7X!]%8Yj[5r64' );

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
