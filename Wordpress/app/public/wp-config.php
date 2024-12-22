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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '8Ywie0K@A!ym?X,b)N8X^`KxT;hB++f|f8up{T7gHn_~$bBTotlM*QDJpuYw(@~i' );
define( 'SECURE_AUTH_KEY',   '[-}Ti@KW]Kb%qrNwQSSm/+^eKu`nOYD.DI> %96AM6=&`re;}(iTrK1P>)?`MLz1' );
define( 'LOGGED_IN_KEY',     'gQdFJa?ZZkrYk!gr<ev-^Ul1cytLrMY$9UUK-x`SEY@??6,pXQYoIcb^ZK`aWhYR' );
define( 'NONCE_KEY',         'yp^O55IvIlAS%fDv.pT)suzQcY|wK}@Z{WqTv2ZpBK? k.nuG3S~7Jr[c=T{mDMb' );
define( 'AUTH_SALT',         '8J)Tt}VdmPs.mP:%&k^DKG6(XZ*.pQ,lEH,b@lk:_gns i[k%a k9AeA X7v$,%G' );
define( 'SECURE_AUTH_SALT',  'FXjFk3.(5`OWfl;OpS6k>nB=odk]lB+_T(GIOBLd;|>`W]+O&)|!l2rO539t,4HN' );
define( 'LOGGED_IN_SALT',    '}}o#A{]6CVU,X%wPjyc~]H:*JEd@LX%o8p4-o?&/;-w%oUd]HsOBr$43ZI|[Oyut' );
define( 'NONCE_SALT',        'W0jMd~4Wh[!JXOyd1Hh(tNlJel*G-ULqZS.-$3!)4(^`oJ&,;i0QwBHUMYb-@2fm' );
define( 'WP_CACHE_KEY_SALT', '[DQK]4V!mC8OEM`}/MpaF#jbZ[t@SUT$^DE $nKYn}0KDn%PY[5<-o$$CbnW$gbN' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
