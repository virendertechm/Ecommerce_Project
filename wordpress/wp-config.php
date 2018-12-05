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
define('DB_NAME', 'tricityfashion');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '<lN+%2oh*?!0.+!Dr<<yF(A-s,&X75retsOK-3*S`v~QTGf@8([@6{mUc8{y_j00');
define('SECURE_AUTH_KEY',  '(%PS!I#`hNYN1*3v@7y_obhH-GqnZRx+agx5QRz5lJ`g`YK0gv@}1NfG!H}An%y5');
define('LOGGED_IN_KEY',    've%Yvu|yqfTA!@OPUrom+DvOD^7j_h%<[Kzx5mQ?[I:76|M;luDimDXH^hC-Rz,8');
define('NONCE_KEY',        's<<;4x?*=H%wnmxww| };A45~TZ)<Y:&G7D)u]sy+5|EE3B P,!i[W;)<$W{#D53');
define('AUTH_SALT',        'ag-<j%{t@0<fkqSQX2nQSW9VInwW&6l<2uFt|u-CyQ~cJgXG0}qV;s79}tdWKi{v');
define('SECURE_AUTH_SALT', 'sssI3Yl7:gTwlbe#u.=Px? ?W|8UTLF{?oNWrV<r(9+q=A(T,=%P=i/>NkCFoV0X');
define('LOGGED_IN_SALT',   'k:Q+zsVz;[ 9dF&YQx{|]-d+bxSs]Ls|#yr]l4)V{h!)FqK=*ydN=Lu?ulD8*Ngf');
define('NONCE_SALT',       'G,vH;ZGj]R;DC2oQ~_aV<=WCe~S{()6]%*HV2g7 cXM5Ei5yQO|cK,gR43cb9AY7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'TCF_';

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
