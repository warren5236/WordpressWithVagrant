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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'fPDS$-hwKVIT~rf<[tG2qo3)8(CO6*L*_p+ 4D-!w_rk*VIEcc&Mzfd8::/zv3-m');
define('SECURE_AUTH_KEY',  '$+*=bvl|t*^>CYc:VQ2WBr1uwN>$p2k3#-JIi9wR]~=:tSJe( ]R=&U$Pky.xPP{');
define('LOGGED_IN_KEY',    '9ePl!Cq-8:4>@m{E)>5m=d(u];$^.1K`@,zySlSbS*b[$=LQglV[vuWb{R:_P+Z$');
define('NONCE_KEY',        'f^3 jwn~UzE~8R5P!@$E91;+a%@YfA|:yB:IBdWS_)t3N!u<_%b3,@,5zQ4eZTSA');
define('AUTH_SALT',        'wEWk^+2;^Hg,zYJd|dQl-&+}_@h w)X<#O3i:m`KHBFEwR =`8t8b_L~i)xh.xff');
define('SECURE_AUTH_SALT', 'tzctkz`@@AYUU<y_$xRY#g|]<H4gbwUGI|+9#1]ExZ:=Uqr{`lL/+uZ.SOq]1{%.');
define('LOGGED_IN_SALT',   'BaC4]vD;LO&=~.GMaH$,B-C|g$[/yXKt4@]r_/Et+0OzB5w1T+UdX/-It+}d==I|');
define('NONCE_SALT',       'E^zP [87WKUp4gR1<-Z*|GV4A<FfWW1qLsT-0$NC-+Cw,LN_mZG@i&n~lHV}73j8');

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