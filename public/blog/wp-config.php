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
define('DB_NAME', 'pharmacist');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '5k5L_<xhn!boTzD-49F8EcqZ+P`t0ZO^B[&;:@|2HLHon^-Nt%6MfG4%Dj`U8KEy');
define('SECURE_AUTH_KEY',  '=[)CNh:w.QT#fErqZ{jE0B00+06|T[tXz1+Q~XKn]z_FX7p!&ev.myySr(uQ-S.i');
define('LOGGED_IN_KEY',    'zXFf$y/r~,xzw{^98Gj=0c-19N?c;h&J+BJa9T,3K*fzJS|K,%9~/p-+R{^5e+sR');
define('NONCE_KEY',        '?y1byA$u$1&$Hu|~F0!IaA^z{N)F+vBSKAlVSZ}uPa} s]W_)zoLlt(@m>W2!KEI');
define('AUTH_SALT',        'SF(|-E)gO-#JNjN^9QWVh]9i.|h}:!~b$FClf)Lr0q4Mj)@|TOi&TdJ:tJhS*s{ ');
define('SECURE_AUTH_SALT', '#+:X##U;PY9^!.L+D5Om%@Yl*c<OM^=D!|l`h:7||}d-RO/U@|$/RVWYO##o?hD3');
define('LOGGED_IN_SALT',   'oQ3002[+K-C#_[kY17sv(_1J9YL>f?YN+.ocV6PXy~/J=6Jll2|V;E6~x9B6ue~_');
define('NONCE_SALT',       'i{Pn>cs=|--IG(~zw^R%a9udm9{`3=!2[+C:hL;9,~-!]o7XVaHsHH+gZ+Z6ibO/');

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
