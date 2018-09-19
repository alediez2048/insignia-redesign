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
define('DB_NAME', 'understrap');

/** MySQL database username */
define('DB_USER', 'insigniaredesign');

/** MySQL database password */
define('DB_PASSWORD', 'cCXwSfZMN6S7pPw6');

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
define('AUTH_KEY',         'BSz/HP4,Bg-Tj$LGe|c43+R!8XD/dm(<bK<~Tw3IMc^>AtX&@/8oBB1N<XZ=L(KX');
define('SECURE_AUTH_KEY',  'Nuc/,>{/7-[;i9f!7d(4{Fb,[M/QZBl|_XJkFJ?QQrZV 2;SZ)tQ6ENEspF)V[U7');
define('LOGGED_IN_KEY',    'wMCqSs*h}SdTiw8K)pSR$EW|,VOH>>K77QbA5/b)}<~j4FUVGiyQZgWOhN^0;!]Z');
define('NONCE_KEY',        '7O}^#-a|fPp#2SpLOX^LQ//G9t~)M6FU0]*)3L/aAUfLcW~-bQeekpV:C@k#5*{u');
define('AUTH_SALT',        'NQPr@1.sb^U!dso+Y]uBQ3:bPc8aK{rjB<!Mb9ha)/nMyZ&JP5.eY.mh:xk|ylIR');
define('SECURE_AUTH_SALT', '7mC ]+u{cb&E7ELwcK_ T; ,|^_%79-{I,w.yAfBei,nA#D@p@ajI3xOHti$H!:~');
define('LOGGED_IN_SALT',   'nlFGQOg ku&wZ6s$W7>&41WVk2|YK,zl2{Vk]dj{]VT)EKj$K3BuAJACXA[7J<5:');
define('NONCE_SALT',       'K#X2%<$qMJyGK|PguE6@4/g7CnBK{zU10tC]/eFJ>/CV&Gwu9v_mF(D|$CRk&se%');

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
