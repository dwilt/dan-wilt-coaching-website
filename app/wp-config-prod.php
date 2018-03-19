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
define('DB_NAME', 'danwiltcoaching');

/** MySQL database username */
define('DB_USER', 'dwilt');

/** MySQL database password */
define('DB_PASSWORD', 'Dmz,n+7)4Fyo');

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
define('AUTH_KEY',         'pWL6M=w!W3u[|wyL9+%hRpnXsiu@saFW[|-X|ZCArQ;d(c&@9m{?6lq$3Rx+~`!.');
define('SECURE_AUTH_KEY',  '3Sx876rWW3s8?R*XWFL;aGNz!=wWH(WIu<@t&mHSRMpozYSy_ZSz,<[6qWhSmjK<');
define('LOGGED_IN_KEY',    'g*?bE(<p_l%Br.3O)2-0R[)(;u_DY{},7~+0sa[gl9krI*UtoMTFjB^M;7Nip!(^');
define('NONCE_KEY',        'vp,$hepO]Hz@Uin`6E0:y-@]pH&k1],##s77B%Py;jHqueM1`quc_Ye{{&%frW,-');
define('AUTH_SALT',        'ksrbfBE{Xd&eKl&CVb>?|RF3fAI;hC14jLYt8ms8W5{%p;v`LC3;(z<xZJi3k,G8');
define('SECURE_AUTH_SALT', 'jZRiqP{`(uShlp!o!OvN(2EJC7pCaab6yc3+`soHah{~%7HS{8sRc$HPaCC#>)PA');
define('LOGGED_IN_SALT',   'A4vkRW%pAwntkh$<[jp|B->)l#MzZ3l xlUogrVMPg*iR9T/E262N}@?9)} dzKu');
define('NONCE_SALT',       'H8d6k3VGDvZ5SC^HpI>sznaF%Wu:CPM-W wRH+VGb,?|PzVi~huR@a)_b6u5wZe;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('WP_HOME','https://danwiltcoaching.com');
define('WP_SITEURL','https://danwiltcoaching.com');

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
