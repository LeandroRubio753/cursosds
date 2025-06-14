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
define( 'DB_NAME', 'cursosds' );

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
define( 'AUTH_KEY',         'Bq&,>LUeaZ!g_Hp/s0?bw%>F~NkD3PwNWg9mo|v7y:3ROgZG<k]``-N|ddxZ(mgF' );
define( 'SECURE_AUTH_KEY',  'a+:2@v!#OZYNFTY0IXdqh51l63bDhH?i*<nct-{7AE<B/Ke!_ Jsq{! t3B{wG)F' );
define( 'LOGGED_IN_KEY',    'Vjtv=?wX?>Xb]Rq0S_E73[f`^4RJL.wwX/D+zybcH}|2_^bD<!zb5A?3Xclf?{*(' );
define( 'NONCE_KEY',        'Nfm1NWy.2=M<#ER3{;IF{0zlky2W{Z+JG0drw+WVyABluJh/zqaTo>I6b KQK7l$' );
define( 'AUTH_SALT',        '^jz%oUc8]$I.46R>t#gL`GP,s2u&qvf@`cmD^T!6%T1r7#1-~%-S5jYW#mr;aB$Z' );
define( 'SECURE_AUTH_SALT', 'jt|MbwUbdC%Q_k]l1Q<,yuc5-#<Q6GXD$YVR(xKrs~NfOP3k/x_?wroQ~d&6?A%~' );
define( 'LOGGED_IN_SALT',   ',RUXl)ca6QmnHPgyxNS7(vT}Eq]9/?MDW<ca+1^17F@4bYY%az}E2Z9;G_!@1w](' );
define( 'NONCE_SALT',       'F^qG)t4hU,1bC~:iRHT=g> R~2<<yK(+p-KewWx$:*0fsrhV_<[,aS3B6r@5LPO7' );

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
