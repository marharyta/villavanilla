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
define('DB_NAME', 'rita');

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
define('AUTH_KEY',         '-#t<fD_~2^P^s:Y[h@JlQqQ9p*&L,^1ns&OUD~E^!G<!sxTYLgrd;9v;CZv]<{|R');
define('SECURE_AUTH_KEY',  'p-/D!zjwlB;M;FE*]w=9e:<>z|/--;Q#drsE<KwZ-xpNjax2zDsjuM:ca}Rv3PA-');
define('LOGGED_IN_KEY',    'yC2iz=0`+Y@P_}C.B}zzeU04>1* q9[0ixPjc@jL?3qo[1nf_HPTtuar!|LuwH`>');
define('NONCE_KEY',        'c3Xr4qe:%4K|rfD/Dn8v3+4#WrO]W,6bp+?M6Nz+|$uJGzrA? fkwM@u#jQOb>B4');
define('AUTH_SALT',        '!<>2xz?Ki!+Kf)01EK8ZSx%OGgn+4+c(A=-}7+gX0l#3$%cwP!nCYWN]c2A}_46&');
define('SECURE_AUTH_SALT', 'r,^D$Bcl07|z@/~5d|ZoaCl-9y,]P!k/,w_5yKN7BZ(1}CpLjXwHy:z| oZ1% mC');
define('LOGGED_IN_SALT',   '?zC.D&E}21ihED1lf{adJpK}b}qmfbUv*XDdD;kDR[Uzx-XBs[:OKlf3j<+(W#D/');
define('NONCE_SALT',       'd-=|UNFxehl<VHz*?w]`EG!QA-]0iWA<D=Hojw?7)Yll}~Q[6nwLpK:-(v|BN+?{');

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
