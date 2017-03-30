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

define('WP_HOME','http://192.168.0.16/wp/');
define('WP_SITEURL','http://192.168.0.16/wp/');



// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'D56(h{A$6~LfBgwthe-COe@W`}uq6W?wqMU-W6LZVbAPrLpHYq0%zO*K,^a7,L01');
define('SECURE_AUTH_KEY',  'X|Drlors2|bu!uYt)gYO/x*: EDr{j%y-9ieQI*?g/]NgSd]$<5v1tQ(?e0,E>{)');
define('LOGGED_IN_KEY',    'w@JdH#kS[qLA{y n=.S:9L0<V+&+He@n6;Q-YH@i$r>r(np[_3j1.1nOAs5hZ8b3');
define('NONCE_KEY',        'KATmmYkwArJGlBPR?b5fZ6^e],n}Ywy7 !t.zDZ!PPNNF,xwvi* Lh>o]m#A#&xt');
define('AUTH_SALT',        'btvy)fOP]Ne.W5mHNqc TV#DZ,p#B#/xWu@8^1c-UY.Kk0.q6nG!JvHeS,cV.iu/');
define('SECURE_AUTH_SALT', '2/oPZp5BlV2 2zo/p7,.[<(Pf?K:T5!cjBVs1(OcKQz c|)@,L,{}Az<,>-K(X, ');
define('LOGGED_IN_SALT',   'EsALjNU5Yh3h~eeRS97km;{}l3g(a6)~Q0Tamv1Of8Jy/=2>c.bJ?3,iTxCUZ#UX');
define('NONCE_SALT',       '{w6<{S8?+pN)Z~U`1yQ:?=mQh87zilQBi,D_8Ni*no@laenhdl5FZ#4LQd>5>fyC');

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

define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
