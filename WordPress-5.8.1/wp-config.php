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
define( 'DB_NAME', 'wordpress_581' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'K/X2>W:;IdG>Cne5$)!,l8(_XT,Ehl{32->^7tL(<,}/RtK+Uk@v@tITr3)uRU1U' );
define( 'SECURE_AUTH_KEY',  '3_Sf<0nlg#GR^jTaK(P2_;1{0Ye<i5{,_-$nI8vr`o+1eqI}(,l8u,(4CCd{;qv=' );
define( 'LOGGED_IN_KEY',    'AuktNc4R%kO =OFLjUVM7VU4mI<5CHM `1DB%>IUk(M@d S,?yuPf#H*wo^Vc%KZ' );
define( 'NONCE_KEY',        'R9[cTKdS=E#Y%%t7zFVT14Y]SAa@+qInQ@c-|Yo5/8,]vogA0Kr*f(OU%BJI:$]k' );
define( 'AUTH_SALT',        'Sl/^kN(iY4)fqw+Kv-pDF(.;YB@ztiZtWZtBHQEys |R9Xs*w!T|P8B)$qVGL3x=' );
define( 'SECURE_AUTH_SALT', 'Dxu|3z4fd?7qMTYVNJV@0<o>}VaPW@95w(/uNNx[:3S!KtQYqC$,JGmQ_wvmd5h*' );
define( 'LOGGED_IN_SALT',   'Q!O-7^4 @2Jc]F/#oJ%m>+zP;w#;AMOyB>8@`s1@T4CWg%lk,wS+X%~XSgUVJ9lG' );
define( 'NONCE_SALT',       'FZv] (z_S166%uaPU)sH&|O5RC*J3:l.ww?Ov_CYGgGH(Wv#oD8oygQ4&(AqRcwq' );

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
