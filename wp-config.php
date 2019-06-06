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
define( 'DB_NAME', 'wordpress_mc2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MC2.mysql' );

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
define( 'AUTH_KEY',         'jq0b8ucn-7dh$cA):XYF:K/]y|^W:nlDMIjBdQs1v`R=BqVQ(u%?Av0.F{Vh!WNv' );
define( 'SECURE_AUTH_KEY',  'UnD+6]k7Ulx88,x;$FaYZH)UQ[PZ[{#gn,8<%?bqpdZ%73:-Gf3o((MTBg#M_xzC' );
define( 'LOGGED_IN_KEY',    '^E|WJ.Hv|YmBwGNuDn;_WtxTjH8aBnGvk/G;}i.Jwwz,dT;+J^%DfV{o|.Cvkiw>' );
define( 'NONCE_KEY',        'b?4pQ$q9Jbhx~0h}m/tM.ZRA8#5S=jwi#q3>XQ5,%V0,_-:_yB2,9pnj+qKz94it' );
define( 'AUTH_SALT',        'C-V:c&7Oi0y5/6_q>mhy&%S@`lnI>5H.ryk*URBulg6f_3d2Q]*sU|;(O;8i58]q' );
define( 'SECURE_AUTH_SALT', '`Y:U~|~kpmJ}^l~.Lk,0X~A8^jc^R.r[eU{ {2;t6Hw`:i7Qg$}G|0Aob<%C_,-#' );
define( 'LOGGED_IN_SALT',   'O/{kA)RCYh<YAVgY]s#EsD-D ~<*j~AmaZ6v_:FvdNZbv;jBLRi`0Y({)s&BR{VH' );
define( 'NONCE_SALT',       ')hl43ua2ZxU@o+tt`Ge-M.)smet$[DiOtDkZ]Bca_xCVf%ObJ!=-P0P|}).[O#t>' );

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

// define('WP_TEMP_DIR',ABSPATH.'wp-content/tmp');
define("FS_METHOD","direct");
// define("FS_CHMOD_DIR",0777);
// define("FS_CHMOD_FILE",0777);

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
