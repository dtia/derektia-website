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
define('DB_NAME', 'derektia_com_1');

/** MySQL database username */
define('DB_USER', 'derektiacom1');

/** MySQL database password */
define('DB_PASSWORD', '2Tk2jyCr');

/** MySQL hostname */
define('DB_HOST', 'mysql.derektia.com');

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
define('AUTH_KEY',         '#~5+@?@"_p4|L"_W`@_|o"R(M$mCf1xDaWzEBZ/KuP164|J%"/rCWHgGkpF#Mbkz');
define('SECURE_AUTH_KEY',  'z%H`k5bX:no$GCLrR`s^vDp2tIk6V?ie)~hTk5asVE#lD"qTGY&1|YaYl@cgr/4X');
define('LOGGED_IN_KEY',    'eTGjqjhIV):XMPiD|xSL0%3s`bL)M^W6+j0BochEe`pljb:Mkw4S^N)mE/t4zG0x');
define('NONCE_KEY',        'I69D(ezT9iykK5Tf;z:ic_aW?FgV+FW2FXd)xd~X39r2cK(Wqtw&5Y7BH9&@M4TL');
define('AUTH_SALT',        'Ij"PcJr@v5YJQny+~aP)&TZS"Im@1u8_"8NJ~KgaZDjQOh"(tVYzz;Y^%i*pTE|8');
define('SECURE_AUTH_SALT', 'FY$GlwdgoWs6!q*(Df(ff2GLysG9xwyRu5|!uYHL1eq/bJZQS0+Cs7`V|Yx94$FC');
define('LOGGED_IN_SALT',   '7!8NH(vAJ|#w)1_Le|B_S5hGS)q2/W*a9uqVj3*$+Ck4uq^"^IE*oY&40W68m^g"');
define('NONCE_SALT',       'xcBUYv|EIJApElupWi?xcQOqO3Bg|XteTyL:t|q~ZzWBQUU3~TGvi/$"@vIxGET%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_2kpqh9_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

