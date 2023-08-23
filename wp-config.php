<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_custom');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PiSJ|(sx9jo/d(,!A_XRudOS86JJ^%oQ-+Fkw1S[/F{7e&Rs)Gyy5EKQRlS#z^v6');
define('SECURE_AUTH_KEY',  '}=qzYyUn}E3%-l6uQAN E=K!&:)0o9.tbO0?M6YBvYK8@U3ahM(c#?dkzCG/3g&d');
define('LOGGED_IN_KEY',    'I,sT>.#,P{u ,_n:^XShS5Ulj#%&R9TC@4nyWttea}:JK?<Oom+BiX_mO1):[z%1');
define('NONCE_KEY',        '9k5~Axn0Yc/E^CcB}a}<2}?4;lud[bw|TpMk4Q*[T%7kb8cA:VH63:(LDc{QcCi[');
define('AUTH_SALT',        'g&LHHs]Q eRgYNx(}#uCsU32G8<Z8rZ>/woU/@(p::fy.W<)ed*#qifv~1Bo5mi!');
define('SECURE_AUTH_SALT', '<d#Y$c3 @#ZW]TKTsZ{d?mqK(_SZ?j8N!,M5Y?[)kagfD6mk8v^ntriJ=DVSb;5(');
define('LOGGED_IN_SALT',   '=UPs4Tm?Rz%h_PoQSUNk9B+5^gbHv]aiB&t^w6Rg{Q, 8ACBA2|tcv{S4D msONE');
define('NONCE_SALT',       'u1F;qYMCA(&s^(Nhsamh3 ,oAc@c 7%=y[t 3,IIA;r(5`XA<i}O>7,E&MUPQQ7w');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ctm';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** FTP credential bypass for plugin installation **/
define('FS_METHOD', 'direct');
