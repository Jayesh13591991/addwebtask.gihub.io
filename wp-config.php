<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'addwebwordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't>roRLCNe?u$)@8}A)Q*y*13{QDq]MA5CD~{IMGmPk$HJ+L.cG[ZM{w0Y!#*9gQQ' );
define( 'SECURE_AUTH_KEY',  'T6`rU+X3wIWQv)Lu+R`A8j5 .y6*8EMBMUIfrgd*deH!7=c<{{aTH!uB5*sKWk,b' );
define( 'LOGGED_IN_KEY',    '+%A0D8D-e-B9YCE|<hwdzv|]rI+d63>x]cL5Ki_f,R}Q@4o7(ln8rH t+fml_KCw' );
define( 'NONCE_KEY',        'qS{R|2e<$jq#K$ J#_2bl<fBmj0kA>Hs4ikob+8gn^!}TZ8}4Dpx5mms175OiQQj' );
define( 'AUTH_SALT',        'IM1wwT4C5n9:0}A8eD><p|I)&zs2K .%,EM)J w%=4sc89inlDx|&z7;aaOln)dm' );
define( 'SECURE_AUTH_SALT', 'mw-RbW[a]Pj~f?+nA<0pf+yR[ii{)jMJs2.j4)o>*9n6;jM>g<{x]^:^E8!d}boe' );
define( 'LOGGED_IN_SALT',   'A8]8d=KW:Gzhn_VKcXzxK `)zmhJ2Lxt9[%-t(u+:mVrppn^AL78bdF)n4i|IQ-L' );
define( 'NONCE_SALT',       '8q83g3,#bs2:;Cofd.~Y43^qnf$zS5wK&{(J$Omw}*hIH0h-Qn?m>PRw9j5O$R@1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
