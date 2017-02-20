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
define('DB_NAME', 'scotchbox');

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
define('AUTH_KEY',         '23i9*UZr?Am F{C-Cv7)=ro>-u`bS##Y}J- mN8WcP^#56yB44PW=6UCdTU69@Q}');
define('SECURE_AUTH_KEY',  ' mNRilTG0;OnL*fFi*NU1+8ZD3ST=EO7=-+[K9Oo)Xq~`*Lw(^=Q3sb98l&.J.<h');
define('LOGGED_IN_KEY',    'r_s=.]O i4*.3E{!L+KAJnOHa/TG`O3Ef5!x/xbnGS6*Ci$a*c*H~R,1`{8}zJ@8');
define('NONCE_KEY',        'C_MZlE[2=!TnYk-V:^1wZ^]J^7eUrdsXyw-o|?vdN),HHu-3YP,B3f%u d-%+/g5');
define('AUTH_SALT',        '{N/>&k/~acmuF2YGdE+bkxSy^J(YdMA;`zh3o0,,s1aSC! xDGYwntjJ~~-W5=EX');
define('SECURE_AUTH_SALT', '/5BfgHBSqlHDS]erPpEIqhcKwISlOL4 owu7J^EY2<u2@BVkEppe]8_+}WWUHB(T');
define('LOGGED_IN_SALT',   '|-q#Ey!OwYuw6dO#DY4^{%Gs1^/@{Z,p!~Mxg>m#vk%}js]uK@9V-8j%WyMed_0}');
define('NONCE_SALT',       'tQTGX533Q&<&sd|IYG}OkXb)_vuwG!)w By7d)MN:1bd?hg8H[1qsH/U%_cQdi$&');

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
