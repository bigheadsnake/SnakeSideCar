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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'snakesidecar');

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
define('AUTH_KEY',         '-zp6+g>8#Xau_iFI<o DWwaos*%w&z{tCwws$-%zy~8/ho5B5VJ@m)H?~78pA=nJ');
define('SECURE_AUTH_KEY',  'uJ:!@$fO>}}k2zX68zuf>D`T.N+Om8+50nW;V~-Jz.}59(eomtPk./.J)`EtBKxx');
define('LOGGED_IN_KEY',    'Ir#*8~n3(mB*#1:RXSA.:11e2yrsd&O[tV)3@S8)MSB5gYq@sQ}yqECMxgosE-nq');
define('NONCE_KEY',        'IaBQ#<5SY)pVdz,,,rx]?w$^)}^r{`[x(&-=@V{hAr1zBc+%Tp3{6|3C<Rm8#XEx');
define('AUTH_SALT',        '7|#=7FzMEaUMr8^tGU^]{{F{Ts:!mK]@l <q1mwqK=HXawi3-~TUl`oU]3/ 2Px~');
define('SECURE_AUTH_SALT', 'Lr~D#?R!o:Y*^N4w)Eo|wUT`X:}~ORT/jxLUfe:7OMZb},/>+P4JK%4G3Zv^pug8');
define('LOGGED_IN_SALT',   'w9y+H]t^Ph~KrX_S2*w:2L0K- 5]mhqr(^Pq/zWiJD9@3..AAdA[,PlEA>!my%Bu');
define('NONCE_SALT',       'O^n5:]|^]xXd*`?rSX5`!;`1E@*B@l<=jk]TQTX&,ZSVZ@;y!)DCBY_)39DceS h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'scw_';

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
