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
define('DB_NAME', 'wordpress');


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
define('AUTH_KEY',         'fN2J/=c+&w3%`PIo1)ri5R/7Ievv+;P@$ W8!e+[deV-wj:Tu4RE3[l7]?yms:i1');
define('SECURE_AUTH_KEY',  '(/z,Paj;+/myNGe.{+6g`7;/g~+RF-8-|~Wnqki=$nO[doG|_/SV$|F{Ed#WV^S^');
define('LOGGED_IN_KEY',    'jWN=C/*/+95.bYlR4O.Zw.x|TAZB~>O,z:r^vG3N=W}z0cAo+V/Qa9^QF5-n/*-`');
define('NONCE_KEY',        '`,~>Vv9y3`c+8D1`^vE@XU6jSN0_P>.S*]ddylCQw/6>T-CsabW7b$?kedNhxczF');
define('AUTH_SALT',        'XImbsB*h7s5p`-/P7D3%@2a7VzcoriC#OBoo+0],3<Yh4i]nGm~U][,;86dm`0Nl');
define('SECURE_AUTH_SALT', 'fz5->pmT{||$s=ED7X1U4*W.0f14Q}{Eh1+P+hZoLf-F+q|Mx$Ling( kR]h4[UF');
define('LOGGED_IN_SALT',   'Il*r_cy;y+?|YnP~rU+FhS1`[/VPd>-g]_]mJR}Qc`L9()o,TQ4mE<YSl5#s/dl+');
define('NONCE_SALT',       '$e^r|5rJzvz)JbY+Ul)6`:HJ,/*T.$o`.::^z*JH=gi^P?-O`=-&V^bdR(%%AL^T');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
