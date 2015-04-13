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

/** MySQL database username */

/** MySQL database password */

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
define('FS_METHOD', 'direct');
define('AUTH_KEY',         '8;iTfu|8d T-}h9/IzBNk@b%!1|Ja)HR7Sk[b2NKx!GJSruPWde4`+~JLM$ga|{k');
define('SECURE_AUTH_KEY',  '=b!A4=]7s9+_@6NGiN`jz2H<zu;ZYb&T.eMTC1cPS<7X _e~gy/p;sq(Vsy+d>BU');
define('LOGGED_IN_KEY',    'FXw&M5,H#Y|V C/146~45b`BY;j/o|R1qoR;i;7Qx0$ 6o}2w_p-kyTYkM&Xl-i}');
define('NONCE_KEY',        '56&>.ADm8~.h5WLI7#>&QLUEeySo$5+:6f`-:&~ EC1>xeNjT@M]|jZVL:,7[Ijm');
define('AUTH_SALT',        'A-eRo+BO+v~*)-A+wuhuA3}]!|f2g7{Pe$zn;AFdTN{xs<@@@{s#>`lWnW [/|<y');
define('SECURE_AUTH_SALT', 'vl:67U{X`VS8i|oDDM.(ORD@eh8FA4f?HUg>:IL82S`$!})Tsc>-kmTfbjElUt<@');
define('LOGGED_IN_SALT',   'It^+rMq8!SbB5k-^kI|;r=M!!R+&a9{Cwn7hozB}C965_.8PuB7di:E+Y/,u;w?F');
define('NONCE_SALT',       'BdsZ$TTq}.o<#pzjl=W^*?z3$o&ntB$HO6(U3u Ml=~#+}j>-~qDrw<RA*WrgB5m');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'Wr2TZ92281');
require_once(ABSPATH . 'wp-settings.php');
