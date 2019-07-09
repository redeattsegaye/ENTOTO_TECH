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
define( 'DB_NAME', 'aberaphotography' );

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
define( 'AUTH_KEY',         '4Ag.S{QKVYml<jBslP8lQm;!Zv<Z[r_]nPMh%M:/ik{8Tf]MwTlR`,4f,>?=@EsC' );
define( 'SECURE_AUTH_KEY',  'Y8k[H8p9mz-EFg-xPR{F]DM|1Pc@Fw<2nEJ2id-@cQ!Y<(Kfdk[ylkdhBO#E<5,i' );
define( 'LOGGED_IN_KEY',    'g_rA3AP*~3>l0CcF0;RW_H2T26FE>!2<|!.{<Q3LSQA&~E.04l7pmTP<~`V}2,[g' );
define( 'NONCE_KEY',        'DwiCfxlNFp$`O Z4nyOb;DP/`Ce scM5y0Twph~|f(`}>]Hrq!<#7?^,e]e3iI3O' );
define( 'AUTH_SALT',        '~U(w#Y+7Kv<a3Wh5%8mSyj:ppGXEQyE:22IE~Jx#}n~#;-K/=daIQ)=HJaAPCS@D' );
define( 'SECURE_AUTH_SALT', 'wr/*== G]VP6Mc8P,QnNR{r/Fg|.lS*Moi?Ve[Q#}u#=~n]Gi>0vk5:^id<bh6 ,' );
define( 'LOGGED_IN_SALT',   'ycQm,8.}t;mlr?]ZT:^{g]1qcESr:{$^Bu;[Jt^ON@C!Ai]25S[77ksJu|e1:$r_' );
define( 'NONCE_SALT',       '?-j5/6P2tMlUtnH8qScDy:Zlllqh)d#}wx>yw0|H2Mm&,E2D{Wk=8M`0}uzx4 sI' );

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
