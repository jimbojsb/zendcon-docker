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
define('DB_NAME', 'site');

/** MySQL database username */
define('DB_USER', 'site');

/** MySQL database password */
define('DB_PASSWORD', 'site');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '<F-h7C-oGm-J}A4a$E=`Ka+bJz[8+d{-~u5/eE~Zjynmw`ZeZ$~&knl$pM.NLgKD');
define('SECURE_AUTH_KEY',  ']ijL{*&c2)/?g}xMO{>D*JV2K@6Fx[O#_?b1ZHJrSQH1C!3CQz0*%7aHjN-?Yt%8');
define('LOGGED_IN_KEY',    'H<3M#|w%aw_FYSTtE-_i;r]_zF*N[4Q^Pd--0oSAxX*?+`i-Qj&ibTDKC?q=_Qg4');
define('NONCE_KEY',        'ewK-[5_.4uB|_.m`^c81WG_B`Y>nVGBM|Q(xj,<~O{ve]O#:k8q](CsB}dPz@QgN');
define('AUTH_SALT',        'ajRzwA{`4BP@Pha$X1`v.sKH^FA/U|+8KX2#}Zh!E0VOI2lG#JjEz@f`Sp/ +;Y+');
define('SECURE_AUTH_SALT', '[0-.a`#|td_JU-40:V0JzcYg -NyY tV|--l={t(J|S]hM9H{:UUD<^P$6(0I[$@');
define('LOGGED_IN_SALT',   'Xl#y4L^PBQ|;xb].h}x}l@ebWDfdQK@,p<UuM=dA-!Cg&a _.yU|!.WY?*x5F)IN');
define('NONCE_SALT',       '2YJ[0HoYpNE+V1I*y#k!%E3DRY&^S%}?_Yvi|)g73+UP9?0e#_5WV.zw`:q4qF+B');

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
