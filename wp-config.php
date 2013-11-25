<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'j7<+Fm@a1SifH@|Yd/2rtDJxc|:D+*c.uIS8P@%&=5|Uy^a+JkG 8P8 ?#[k/I57');
define('SECURE_AUTH_KEY',  'R_2)H&!z`I,f3e,!AWj>P$//I6B?N&rgZ|)fkQ(?+r?H+U>{H:r}!#Hw5wy(ll)R');
define('LOGGED_IN_KEY',    ' Tg~CR6XyQ&+$eSmAHCPI}|v2Eg_kY%3Nh|q3l@zf4qW>Vmz|9WWAx9V1r{2}PAv');
define('NONCE_KEY',        'tsmv:B-#9}kpOPP+]HHR*+fIIH7+nPMD~wdu6x!b&}`l)z0}T{9>+dLsQ<<|4Dv]');
define('AUTH_SALT',        'jJ|a-cwP.o1>i0E_O8b5+Q ZMbz+ZP)uy 7xJ#m+rMJcv1}9(=+:d`PCo{$OjyNz');
define('SECURE_AUTH_SALT', 'hioLU^3$[ -jw?/Bf^@46$F4 #wseVLq0}o<Wy`?qr|gy3vQa#Q]&vW5=WtwE)pr');
define('LOGGED_IN_SALT',   ';sf@h#K`-BA.KUA*ZyT1YXr2vm}:LWOW-DFbC}f9_@v3>Uf^rC@D9*>f=y;A!`+/');
define('NONCE_SALT',       'ieCNqP{VPZ}O+la/VmS8!h53ecCM?.bu0>L]^9NonG8$8|(Cv7@yA4&@8fp|N(1X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
