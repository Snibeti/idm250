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
define('DB_NAME', 'idm250');

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
define('AUTH_KEY',         '/~x>4$?68:5[<-X$]{g0/ruT!8)&LbraV_3*v0=Y5x~WZiyY^D[;0p8fb;7hCP:}');
define('SECURE_AUTH_KEY',  '=WXo02P*7f)%&1Fh3Panc[81_}g=GqC!M H%I*u{>:Gb3Chce.;ioYoPS%(M |4R');
define('LOGGED_IN_KEY',    '/ua.AyBiq EPsmeNIiL:x3O^TA9Gh=>M`{fl5Wn(NJ[J/0RW{eF@u/Z&DP:>C$|Q');
define('NONCE_KEY',        '6du#44o(o600ZO$}C <pp~rY5[TJg&[2[$:Oz`!!`T(+?KnEc[U?#@>7mZc#@vvP');
define('AUTH_SALT',        '?tWVl|XCO+z=w{ -(q;:G2UW7kA!CbI9(:AO}p[yIZ&m,p7vvqfer>Z|02HERg<R');
define('SECURE_AUTH_SALT', 'mPX~V`D,)u+_Q+kEV|y:w!gv=hSBaZ(DzY2=t|=TxFr#6|H1O@5mJHKA*VKyG;|4');
define('LOGGED_IN_SALT',   'RJTMn=}5kL!lluP+o+mQ}/n/r0x@SDovLfCm6d@tmXe:z*%-yC-9k}J2j1m-QKz(');
define('NONCE_SALT',       'g^XQwcgxvT?E8^uew^EAK@)kBeO;$`=_qWcVj!P>*9F?;rX|l.mxGet-&MA#nn)m');

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
