<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'web');

/** MySQL database username */
define('DB_USER', 'master');

/** MySQL database password */
define('DB_PASSWORD', 'Pr4y2ct4');

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
define('AUTH_KEY',         'GipeYv6#=p%oUL]!73QiM3k-9 P(Vm,A;02EC-;~2.J%N6bb>zR/dW&B~|<y|u,e');
define('SECURE_AUTH_KEY',  'HtXGP1q_67S;1(EP0g9BG3%[s&%<(k8yyn5r5+..WA@FgI4PU2GB];l+4M[Hxw&P');
define('LOGGED_IN_KEY',    '[v$1i B60h;4,;fzZO[|3*lJ5!)+VySJwDMWP+a;D7?/~~_J68tzA~$OUHESNGYF');
define('NONCE_KEY',        'Q|(aSYdt}CF3E3jcv7T.|KOfWCJ8!GBd%1ma=qTs5|0Ru?wwzv!eli}Tz !oNo+A');
define('AUTH_SALT',        '}ODh$(ePK!OPHGTa:Al]t5]Re}-ZJ41[OFdnN9)r7hk1R*7I`Tk6M[a5A]z&$NrU');
define('SECURE_AUTH_SALT', ' z)WnQjLL9Dd2Sf|#(t%pmh!&,FwEASQ8)P#,0(g?kgZ78sQFJgf=V|U*~kJ@9W0');
define('LOGGED_IN_SALT',   'r|j*Knz$O|[zF6wxC:d}ZqAHS9!47K2dJA++2 QUgZ0,8NX->K*b|*O_|v7Q~k64');
define('NONCE_SALT',       't@DObN+P%d>-NB4F-iwW:o&Kgz h#7cFD@/N,U(/jZh ZVZ{b#4Y@JlPj%[+-::m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
