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
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'wordpresspass');

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
define('AUTH_KEY',         '9kG<xjBMVT^5V$6n+  _CY%RW`o5P{s^|![VXD,ZPBGHJ3  m$jtb+s}+Fm&s;Qi');
define('SECURE_AUTH_KEY',  'Z0GtL}q=$[(.3D ^4U4zO]hb|MbE`aqrr:6 rZf #Q[Hf[`GhnW,U{R^4MW|Rm-#');
define('LOGGED_IN_KEY',    'Z@~%{.uE;lY|!mPy#vQ$(uZ?_c&?a :Z#aF2lHIPqxl<I!WjX[%a`cth2+^S816K');
define('NONCE_KEY',        '$:(7w=}w^so5M!z_+]j-B[{xvRi,a]$>&|>3/#%M*qF<oA|aC<|[.Dyig=)dpq!<');
define('AUTH_SALT',        'Jz~}p~-|HzNz7Ob2BD,lOThlmn:5Z~nC;P2PMoa75({u`O5w|_~ cFpI=RIq.+[)');
define('SECURE_AUTH_SALT', '+n#5RQfCUVjnJvd!x(K&Hto9By`1$c+Dd}?%H+UnT+TY<^wVxP<P`{>.y_n~VSA<');
define('LOGGED_IN_SALT',   '.D={//C1wb{RAcjZUCv~l66P!]yX,+Uu-Rvu;PwD`z+?~U#o/8t0VNO;3|J$,nH^');
define('NONCE_SALT',       '-qC^,VV72B`|5bbYnQoMzN+=z!Y4=g+4[/Q4wQoRuNIJ$%Gw]Vg9qI-F,?li-.ky');

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
