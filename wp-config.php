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
define('DB_NAME', 'ciydi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'jjzavala25');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%H/Tr)_[HBMbthNA75g|*5E<d;@N8;JaawOL6PJmNMz1@To_fF@:I?iT m:Ho&VQ');
define('SECURE_AUTH_KEY',  '74#VKW8QV_kd#=WMXP#f,W2Bd`pM;T^[%e.Kp~xlxHe8h_hiQtac*a}WAWBGv(5v');
define('LOGGED_IN_KEY',    'ECWID}G,_z#.k$L$UI5C_q3*3jwO0W?l2bRBs 7Gf/5BF0Y$=c7sxw#UWEW;f/a]');
define('NONCE_KEY',        '{40$.}]Q1@xUWtc4OH8(+vQk#p2BsJ~|*y^u8NQV,Ivr*MA,*qs9nCOi#b&^jpH:');
define('AUTH_SALT',        '.ileGj);r!gO;.5}i5aq&eqw=:P=Vmq2+c>kD5<;o/6mQ-dTD9.GH!(p$fx|3o<z');
define('SECURE_AUTH_SALT', '4jdQw`[$^_;|^t,W~u]ZQ[}jJ]fD~HK5Uj:rozs}cxJ;bY=|/;8<VU(:.l(G0OmF');
define('LOGGED_IN_SALT',   '+ ;Ngfl{3QH01wl1A6Zx#C.i}u,>fp)JqUw[fsPS@K+M=,#UjfGcC.-wg<T1Y_Mb');
define('NONCE_SALT',       ')3lRAN^/*C=Mz{RYoAiy6W):-pDlXU?{PrgV*u419[@AsFAIQ$pAxn_T&KJXfe3%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jz_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

