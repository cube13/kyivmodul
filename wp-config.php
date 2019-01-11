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
define('DB_NAME', 'km-site');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Baron_13');

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
define('AUTH_KEY',         'l)cG1GNJ}8t;:)k~H9amug=YOSiO5ic,m`riB@w~T0Sex3#N%i}+EI[]z>a!~1D}');
define('SECURE_AUTH_KEY',  'qyL0P<aV:2+kylX<|R3/As9&_LK=xH|FAi291Q|S(8V7tjFqs}+djnkJ aA!rzS7');
define('LOGGED_IN_KEY',    '^c33)w}G,R||).N&1bIY-^X?A4)vil+IPQ|tCf+n<`DZy!Wj/im0dAyke7m^=E/[');
define('NONCE_KEY',        'Q0[K^kdrHU-BZ.vI0=m{]3>XK+M3AI85X,&?XN+]0b=s+C7Q$m}X|).8Fm.1fD[o');
define('AUTH_SALT',        'Ay]]r;z11^I$%-0f+]VMyXFnP?S#FK}]W/|0MQRxrf>312h[qAE1nc$X<-{SixB$');
define('SECURE_AUTH_SALT', '- yH hb iNr2/`X-bH==QvBct}=|[rUK<*0Z/Y(dc?[(.V;]c#sje:kV@v@~Po_6');
define('LOGGED_IN_SALT',   '4]N~ffyW$uwU2#YZH3dDsiotZ]f!l~(Kt(lw#?i=@/-HJ)zQ4&Rm~JGqEi7@fy][');
define('NONCE_SALT',       'k<_3E>}+]Ip#}@C!-5H|:!)mAl<(D^v+&X+%1x-_~EG(k06B@Qa!fhh;{OX%^rh_');

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
