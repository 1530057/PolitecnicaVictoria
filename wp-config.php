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
define('DB_NAME', 'base_de_wordpress');

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
define('AUTH_KEY',         'vn,;d)Ko(}v=+ZriAIG<ah =WgTF1wi6V-#}F3H}qZ;d^<*y HE{GJc/qy$q=p! ');
define('SECURE_AUTH_KEY',  'VW&d,mi-_zb4~N17]o3*X}IkA>!Hbq:4]`SyCmX#B*8U,J#ZDY FHnw$`?xW2.[;');
define('LOGGED_IN_KEY',    '>E_mxw5EN6[IH$`t9ttxj)viX1xZ^{v<->Z+_|}@A|^%KuwBgW_/dv&gLM(=%$:,');
define('NONCE_KEY',        '#@)l]@VUO;>g}8X0}Wa/d8Dh)3P<6)E1oO}{XG`z&AJCey5LHt%Vg7*ak|2!hH|#');
define('AUTH_SALT',        'yb/RSz@$#8hLc15}G0?boU6BX]Kps=m^v2|0jI}wiaQ`BBjiG Uz|r<tM3}?axeQ');
define('SECURE_AUTH_SALT', 'lsFrN9A}CkA[|4xSNRNk$nw)@.0jz?W6*?0KhmVLf3t#)HuB[.j`^1zX:_$7y!J/');
define('LOGGED_IN_SALT',   'DjYK)dHS@QIjBqDWknzYZ?upR[c?X[*rd kc?Z^}#(5yuch-Py4g`.zH.UU>^whs');
define('NONCE_SALT',       'v(E@ZnJoL4U-._{D*VO+!PYz&q3M|={<v=F>}^0$&Kh$!#_|]gy}&UP4BTM}#zU(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'utf8_unicode_ci';

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
