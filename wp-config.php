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
define('DB_NAME', 'marvelwe_tiffin');

/** MySQL database username */
define('DB_USER', 'marvelwe_tiffin');

/** MySQL database password */
define('DB_PASSWORD', 'Marvel@123');

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
define('AUTH_KEY',         'ARDWPsvaaVwF]Pi;ct[bFDaaVd+G`xL<|f ;XT$IO9C~7doj7hQ#`4=28,uC/flS');
define('SECURE_AUTH_KEY',  'QLN.u+EdJyZ]~[7$Nm82tK+0LP1U#SQFfa6NyJH3m9;/4TpCEZ/,t]b;d.iUF-C.');
define('LOGGED_IN_KEY',    'yey/8V&+&_R&F?.bnAG`lWQgP.[WY4aOxP]_l;013a02m[f$kn&L4ydf]iF`T-hE');
define('NONCE_KEY',        '@/^?2yKK4@`+fuQwx<lrO?@zEGT>;I=NH|Qfs+KVZ,`^Kpp?YfEisV}{.lzCvG8h');
define('AUTH_SALT',        'l=R`J`ZpjWP+}:FY(>YrFI9YRnwH#p6Q@S80:2(qR#W=rKD%TS~O2}_@ --X5+@N');
define('SECURE_AUTH_SALT', 'K701}pfMzV2Kg|@8!Y-zH_y6Q(I7?n$UrRl|N@^8>4?7|FrcE#bKt9GM4TL6jdXP');
define('LOGGED_IN_SALT',   'hl{^q/.9j8+kP]pGep29i9pVT8S]re`bDyx~*R+XvUq/.!*09@{~WHHReBPVnI~A');
define('NONCE_SALT',       'FR[=NC[f$L8AA^@3`T;sX3U<IRae=_%X4U^r!<1fM>OV*ofql^/d_7*oNdC!6&kP');

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
