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
define('DB_NAME', '${DB_NAME}');

/** MySQL database username */
define('DB_USER', '${DB_USER}');

/** MySQL database password */
define('DB_PASSWORD', '${DB_PASSWORD}');

/** MySQL hostname */
define('DB_HOST', '${DB_HOST}');

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
 define('AUTH_KEY',         '=/+u{#bflW{8QVf=Vs[[nLUa_$9.r5m8yb`TicTd*c,1F+WG%<In|-TXDjM%nj).');
 define('SECURE_AUTH_KEY',  'WGSm5thhT{@_:)1a~;]2KRdY4KPT-_Qc400.%;N|;iKCYc1Ys8#GcY!69TWE&Od+');
 define('LOGGED_IN_KEY',    'n0I>K[+(qEe7+lE#E;YBP#TPJv=fIw_O7Vb-W%Kbuw5Nrq3GR]-T|!oBA6]QW 53');
 define('NONCE_KEY',        'v$@61C]uE__4rTQ|G-bW_^=pN5lr}/jTYQv(]E v=]lY,6>x],U7gY4Z6g*n1qan');
 define('AUTH_SALT',        'x,1m~?^=h2#$H@6kC|nf{MGR7c,/a||0XNNEDg;QS534/!NS5[P-VNiEjgh1uri`');
 define('SECURE_AUTH_SALT', 'c%S4)*|GTB+XfiBa[HP|+-$K-O;&F=,71<`pjLn`7EW3((W_1RnAK8A>aG`0-Ub[');
 define('LOGGED_IN_SALT',   '{|BCwO2|Y=xDr-ggaBTw2x]D.R$4P65$mfPqt<o*P}#vD^@u/?@]cxN#eX9$HTy~');
 define('NONCE_SALT',       'kw-_-s)w%+z6W~(8UOL-f6*{cYL.1_8atMnAGy;iTs`m+[PY@G@+iSLn/5{4Q-@2'); 


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
