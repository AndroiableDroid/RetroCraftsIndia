<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'YL==^p0pg0D;O6UB8IZ&$^sX?FEj!II_!}kXGp*vvzvw}Six%~R_yr0P|QF2WY;,' );
define( 'SECURE_AUTH_KEY',  'mYGaY2dRw-$v$#>hupwNYTC|yHl8zZ;vQC.3(/3%*r`QDx$L,QJ?Je:4n9w{.p^m' );
define( 'LOGGED_IN_KEY',    '/ph[UmP$N1ORB;uL Mh%%FV}7_M/L)hH_G<FLq~z9? hwtW]Io{nF~zx,YA}}=eq' );
define( 'NONCE_KEY',        'H6XtV=w1%|0&j`f6&Rx@uJ{qY/V4Ud@h&f[<pb]?<0e5-p}yb/5{rnC!ygl-:8Fh' );
define( 'AUTH_SALT',        'xfxcZS%|UY{vw$->@>ikC-797.8US&Zj,uEB@X*||z9C8?nxO0:*}USl|k@amr8&' );
define( 'SECURE_AUTH_SALT', 'WY)vt?0y8%;h#p(/?|169qsR$u3JFz6`Z7xVSL Mbc[3TP%h|G3&U$Dne|xxM|$A' );
define( 'LOGGED_IN_SALT',   'MA,S`fDBHyA%gk&jIjGX$^$7}lgcn=N8h[51E-@{W$?p2`$5j 0LAQ0e=OivcW)X' );
define( 'NONCE_SALT',       '>;^*[+V3VY>*cl8e q5Bcx[g@ z+rk}6+0.y@FVeG:Tq8L y!WJUzEFwZvb@c*xQ' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
