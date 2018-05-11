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
define('DB_NAME', 'main_proj_healthy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'JK4R+nSZkGs JM s%mT95_A!*~g[U[SJ9C*G~a_@H7Uy`C>*C6+}`>OnVmkkcKe{');
define('SECURE_AUTH_KEY',  'z507,7?5EH7d`$MCqS7:JDxWEW-%uSH~|KTwi9<!-DAt{U(P%{JUR+SwJ,eR]!o8');
define('LOGGED_IN_KEY',    '{)+-%Lcl%b[K!!IPuD{6-grwg=xP0/^4|>E.Ah24I,+@g?G,682!YDMlH=r@CG D');
define('NONCE_KEY',        'n@{4ulDsAY$O<MXLvjFLS};0:l[WpP8CTXQ).ZDj#B?Wp[|p$Mh<55n<zWdewg?C');
define('AUTH_SALT',        '`Q!oMR2=WP|?x0$>yp.Gr(K}9Ki];XU[i $ KdsSVJ0zU-E%Du;p/oqwgy0WE!((');
define('SECURE_AUTH_SALT', 'U%0f(*tX|knO=Sa^mWukJi~c-)$K|o5kKlEB>u-67i$A+&JfRa~vs@CRM(?(xq/7');
define('LOGGED_IN_SALT',   '3F{3yibm98>`KMt [bG+A@[u.|]zQ<ASF~_R3w39IQ@F,X6IDjw8o%*~tPJ,B pu');
define('NONCE_SALT',       'Dx{6#~A rJ~WT3FKRHtb+$J KGLsz1 mKtIa#th2&/4,cK(?<_kRlljeO]A1YX>e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
