<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'db_cnxlove');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'nh%tB%Di,<i?Usq1L(c|k5|^@>?z#7/V|gdi9p-?hly!3 2NDUP9=@&y3Dks=;)a');
define('SECURE_AUTH_KEY',  ')pZJnjXGcDQzQ5Q/%?5!tMyIj@s|irxa<,5-wSZIyfg|}*(t4rvvXaM0@C~(5r>!');
define('LOGGED_IN_KEY',    'JW|SqG)MaL+kk :9^jT5R6XF5+Si_1r,]crOV;OU5*%a4N-`#wok@yJdCk~_aF9=');
define('NONCE_KEY',        '<~KI*?IeWBufG#A7kdzc;D{M%w`_Tr@5Ej,J~vU]|rV|T[.Lsu^KS`,$ W!SRE;:');
define('AUTH_SALT',        '*^j4*Ijjq{7Lo[f+U2V4!=q8DwK x[Zt|e>+OL-U[lN>4cy`gO(Stq1rrht,q|l|');
define('SECURE_AUTH_SALT', '_((AOosDMLm^-v_][c.%zh~;5^<AEx@N#c|MSqbtjYo-AeGqCeG%>TyLp;[1_$*:');
define('LOGGED_IN_SALT',   'zU$qfse){pmUw(AXiksz6l+zs65N%uT`sF{,xG`?/P*|p-~qA^9Y7Nkwh#dJBo6Y');
define('NONCE_SALT',       'n|vz2N1L|F66[gZ-qMQ>2LG(/xBD-O_9`j|g>J{<|45I0]@fYV+*tFHS.0>,ra.@');

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
