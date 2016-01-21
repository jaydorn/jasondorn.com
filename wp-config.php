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
/** The name of the database for WordPress */
define('DB_NAME', 'jasondorn.com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '4||-c|2E+ R;!Qq+lKR-Xa45o6l!J-SjYHIygwtwuqZJXgLrw0%D&nFLh!}|)Fln');
define('SECURE_AUTH_KEY',  't|MF|=uN*MZol4;Y9T3h0i.m9X-7kvPywcxCOmVd#&wQKv20!<]PrgXW]/,b|pW>');
define('LOGGED_IN_KEY',    'llOGv!Gm8q&^OjDB8W_K cQ+=F| 0``+&K1^6A;tQKW/MA$kRTUTtr#L EAE&7!*');
define('NONCE_KEY',        'A)N!kMR=Yq?(M9GH 3+Mu9Zt8$x/cEKt5T$|<uZ*< u*b=6*s~+XvFg)4>90 b<8');
define('AUTH_SALT',        'E%yxxePr/ca>6lMk8ks,Jsxe+rDt^,c+G !{psVfSV(wnMIf ]p6W,bb*6Lo.j||');
define('SECURE_AUTH_SALT', 'EtP,+37|+&uw8C&f1[Jt_tuQ?i3oNU]<4A6|T<qUIb@KVydBL6R-..0DwSn._Oic');
define('LOGGED_IN_SALT',   '7{-HVB+t|kbEN`2V%>?^c-`pTzhd=s1+odbyb/4_&a+YY^r+Xs>{|Ew7YH|IXQj:');
define('NONCE_SALT',       'sM17K@fvFh^o?5:jN%xY0*uPm~25|qzm|mY1!~)/)v/[6sP OOgq50A]`3V~Cj%]');

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
