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
// /** The name of the database for WordPress */
// define('DB_NAME', 'curonia_db');

// /** MySQL database username */
// define('DB_USER', 'root');

// /** MySQL database password */
// define('DB_PASSWORD', 'root');

// /** MySQL hostname */
// define('DB_HOST', 'localhost');

// print_r($_SERVER);

if ($_SERVER['HTTP_HOST']=='localhost') {
	define('WP_ENV', 'dev');
} else {
	define('WP_ENV', 'prod');
}

// echo WP_ENV;

if (WP_ENV == 'dev') {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/curonia' . '/wordpress');
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '/curonia');
//	define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/curonia' . '/wp-content');
//	define('WP_CONTENT_DIR', 'http://' . $_SERVER['SERVER_NAME'] . '/curonia' . '/wordpress' . '/wp-content');
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/curonia' . '/wordpress' . '/wp-content');

	define('DB_NAME', 'curonia_db');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');
} else {
// 	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
// 	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
// 	define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
// 	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');

	define('DB_NAME', 'curonia_db2');
	define('DB_USER', 'root2');
	define('DB_PASSWORD', 'root2');
	define('DB_HOST', 'localhost2');
}

// echo DB_NAME;
// echo DB_USER;
// echo DB_PASSWORD;
// echo DB_HOST;

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
define('AUTH_KEY',         'x2Qw5p-4j;LzMc<l+LdMoVF+m#:EfPyxz~pna+U5x=@d^6%)MXU<E)>=,x[D5$E;');
define('SECURE_AUTH_KEY',  '3o}4Udmb<ZYZl:m)FR@D/VZwF^9pT%%m%}0(tWnv%fifiz;>`|8]2lSo_}!Mm4Y2');
define('LOGGED_IN_KEY',    '}zS^S;Qc7gpI#9r`.|%p _}_}tMMg5}gJ8rlPKY/|9GT GmXa{+>80KTO-fz64!~');
define('NONCE_KEY',        'V(^[$z.=HdZeKHeb1HbRV{*]AD&ANe;bpn)XUj/)$38Y/j1k8CW,3lA~(;Tl!:pT');
define('AUTH_SALT',        'mNlEeHS41Wf@Sbb6lbA>=bX.AF?N^$M-HD^j1^C~f*%fXd8w`GC-l!9`UcH|rU/B');
define('SECURE_AUTH_SALT', 'xbGxm<@X0S/cNMRGh=Vir|rEjCY w+1(-}_>z&]l.x?6Q.I-Ig+?I*6chV!gRJO8');
define('LOGGED_IN_SALT',   'p!(7(E7FX$eF[R>%!6 L$jABv4x1Lpjy,&Uv|$~tQgG12i*n@3>0B*f%AYlS,qr?');
define('NONCE_SALT',       'KA-mgSefurWb6^_8(~X)~BS_@.,y:I@)MZ(fjSMT-/%|bLH]LzHy<|e;eG,4#i b');

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