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
define('DB_NAME', 'soundofmusic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
 define('AUTH_KEY',         'w<vWF%Nf+7gGJM{-yo=^s-^mOQOi,3Q=b``%$guW?8&V%@f6A}d8%<,@U1zAx@o_');
 define('SECURE_AUTH_KEY',  '2)<C1q{gxb<d/M4<jIr BYki-;GWe8?V#o#~R8r<t@*@u&kNJG1|E&&O}H+&L<di');
 define('LOGGED_IN_KEY',    'OUa9E#dE/$ed*&2&&6O0;uPxwb!>pec]{-$KtvaL,+(O,YHni|~+4{qqsb2L6,sz');
 define('NONCE_KEY',        '%|ZO[0uDAaZanC,n:r|D6HVN/2 @r4v(F?Dle-/-Q$%?|uIzG9skJnU;)(LqsoY5');
 define('AUTH_SALT',        '!1N:dtvdwQkaw8b3tr;|-8`v1f3!.@L2ld|*!ekb8_DP0og7G3#{fe<N}C3_V#>H');
 define('SECURE_AUTH_SALT', 'CZ3HN[q`t5v.r[jkS|pCqW-2s+,.e(N-0JpeJw2Lk+5oTP^Ij|{c5C6M)1O$+PPG');
 define('LOGGED_IN_SALT',   'W*>L-20p`YM~E@bc6-m13Or<3sx[+/;-^7!hqtD-}A^%pDjzGCZKp_T#v7-*z/)e');
 define('NONCE_SALT',       ']Z6%Yy!ve9i_bch@FW(b+_pr1vJ{qNt+<(;YA)[Ss4v?_^G/m,G~MIFx3]Dgfj-C');
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
