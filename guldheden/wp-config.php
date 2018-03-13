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
define('DB_NAME', 'guldheden');

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
define('AUTH_KEY',         '?xIA30=@=!(a,<*!%[b`xB~S4Izwa{64aCt#958V(<O_mBCjMGb-mjV5<5_feA&t');
define('SECURE_AUTH_KEY',  'hg&hGt/|0CZ|j<u76@oQnQhs.uPqp{36`y4)P4jyb!SMSyJF|08,`5KU=--Y#4i9');
define('LOGGED_IN_KEY',    'o=jT3<J1#/Jb:]9ELAEf%uRYSJ4JV>)>q:&H-[(pYl6noa[lQH(/>t[Q:Z}Qu@Or');
define('NONCE_KEY',        's,E!X|Sh&sT=ZCK,D_mefghIdg}UjJm.3K$|_L}8^5@3t.|g*~!pP{DGId*cv457');
define('AUTH_SALT',        't)C_zPKKSRNa-qO3XRCJx;GAVMoRDmgB1$hPLi_|VY=u^D9zZqPB o%@fTq`V/M}');
define('SECURE_AUTH_SALT', 'n.?G!=(#/4!pufVV0=?x!V;]XxXOp?=W(b8_${2NhKU=srFc~nf@Kn&D,hzNwmLZ');
define('LOGGED_IN_SALT',   'o_#g(iPinU`3LkZl8<|v4{m<1M(>|a(o~Rm.BWBey*s9S3@X/]c)%JJ& g[vU>#>');
define('NONCE_SALT',       '_2&+)Rq8kEdRVA&2Pu4b1@a&<$T$4#(o{jIMU:#JT>A6hF*J4uz{$HFu<C@TSFIo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_gheden';

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
