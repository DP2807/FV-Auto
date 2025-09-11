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
define( 'DB_NAME', 'fvauto' );

/** Database username */
define( 'DB_USER', 'teamdev' );

/** Database password */
define( 'DB_PASSWORD', 'StrongPass!2025' );

/** Database hostname */
define( 'DB_HOST', '192.168.1.34' );


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
define( 'AUTH_KEY',         'afX:<wGPRIBNxx{Oa()VS=v&Cm9<S`>n~9GG(7s8-cX8uj]li4i}+9)bpW~.Gm@I' );
define( 'SECURE_AUTH_KEY',  '>MOop<_( .u(1b-dat&,MbAxI{P<~H]7,zyDVDbM.;H]>{rcI^T4X^LJ |}S]rc1' );
define( 'LOGGED_IN_KEY',    '2W@02lQPR(>gA[,FEvanZ-VM.6/a)rw3t(Rd=}&ALC6>gmnsY(9fFB iqI=VuL#Y' );
define( 'NONCE_KEY',        'Wf2DI;z2|.7jy!H8DZ}lL8SAOvK2qo)AFLdxd)fa<ti5Yds+AlgN*qVQmAHkaG *' );
define( 'AUTH_SALT',        ' ^ux.5yQUOL(UHkf` ]=lE*UB6+>7=z6p|f=*6PA #)oOkQ<}m4i~?N?OSlYJ:JW' );
define( 'SECURE_AUTH_SALT', '_Wt=>5?e^p?Yhdjy(Zi)u$fFf=SC-R_/wt&#.@9uT)G:s.DX5cSTEco: o%q8ixw' );
define( 'LOGGED_IN_SALT',   'O.~I5#2e[W]#Z=)Z)n[E.Zk7oYe6F?2jG)JexsinQ5jXd2S:WpVBE@f$lN(6{M(L' );
define( 'NONCE_SALT',       'n+(*%x F7Ek@ZLIme{,a6c#Z2A)K#ynV Lsy(>a=ZQRX[Uig8&I&_+:{zk^3o=$q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
