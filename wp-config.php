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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'ajna');

/** MySQL database password */
define('DB_PASSWORD', 'Rvc2015!');

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
define('AUTH_KEY',         'qc |m7dvQJZz ij=EDls&GXZ.+)J2^[Oa+`QT6&xb8z{4bq|/}~@,Dr7wq<BcE@t');
define('SECURE_AUTH_KEY',  ')2,*RNr.6j}ME ;Mm(-9!qc:))yXQvl_ZE{Y#}5;wk1zRL)?:%jV|A-o<X-/bjM*');
define('LOGGED_IN_KEY',    'x<LGF!MfEWn-?F:#,G-c,wK+nZI&X)Sp91k@-G $<g5e .i~M_<rLD+IfIH7?82{');
define('NONCE_KEY',        '@}3Ueh74!&S<`{6J@$3|*ixY<<gOj]buw/-+7_hHgmr4|]*dJ%OU6R|%y-+4I!dm');
define('AUTH_SALT',        '&p/kC;bDgi^8g7R@66tZ ~-E3fsS+HJ;:FJQ>=|JF%{FF<Qcf}$5+#4:~v.?!?3X');
define('SECURE_AUTH_SALT', '-.g0{s#+#-Gx-${5c{:{ JPzp+i,/D d{-3`|ii037;CDPyEVBF5(Me!f}^2[,U;');
define('LOGGED_IN_SALT',   'W$E13W-FM^vq%&h)?q~%`n([zRdOp-Nr7/|U|4<8qv{^:G6)Ak+?D=-d*v%b5U-e');
define('NONCE_SALT',       'b3(jR.kRdrc;U.1<[rpnR^VVftSr^BNWMC9ney*-(xPjml?D!B=4q?FEvX*/iWrD');

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

