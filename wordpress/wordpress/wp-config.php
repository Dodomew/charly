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
define('DB_NAME', 'monste1q_doortje_wordpress');

/** MySQL database username */
define('DB_USER', 'monste1q_doortje');

/** MySQL database password */
define('DB_PASSWORD', 'dodomew1');

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
define('AUTH_KEY',         'rgEAn-W?otX`g!0?,X255 f(pIib&8JGU|:RU6I*#$hp_nAFO-+E&Zuuogq]w2nj');
define('SECURE_AUTH_KEY',  '7n}9u]b$Oay9#8/H+Mb4LF8p(5Lq/vwt#,-4(v aVz-sRs{sgX(VjmT&sAI A[/-');
define('LOGGED_IN_KEY',    '!M}C8-^.qYdQyy3-)4pH)FJ[iyo?}1#hL^wb$:(5zVF.? <`pbCL!DQI;lNVU|9l');
define('NONCE_KEY',        '3K[A-GJ1F7+^ajk%%V,7R73-xx{+Q+OR_/2WAFeoYhrtD*eOP87#M,|W<J5$ Du2');
define('AUTH_SALT',        '|HD6To]-r x^0qlPW6JT&>f-Iwh%e&Qs w#~@Qu[q$<Lo/eBncOFxK=.=v.(0Xk,');
define('SECURE_AUTH_SALT', 'Tvz+Vng|ip=Sj|M5Ul)jWeIlu06-sT+yXW(!Mk{WifwRI<GizRn(}fFA^$W6Vt&v');
define('LOGGED_IN_SALT',   'p`x|&|fCyz1rK#]Et7l/PkJcCQ#%0skow=@>+*W{(;X-OlSxs8K}eic|I69U-yke');
define('NONCE_SALT',       ';Q&Rw_?(+I( *,>hQV1x-6BReRi+1R[e$<8nB%_rY[Xz?z#Ij=Z}^MM4w[RMpM^E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qwerty123';

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
