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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5l7!27?UFg4;45o6*uXi;UOs/JgWGS]Bh,kzt#AdKYh54wGU0qRU_=W0`$6z$W9<' );
define( 'SECURE_AUTH_KEY',  'Joi4ORGQ!Fn}_?7#kfNa,xZF[eiH6gj9-Xi%D_-x})pAOu ^N-Yp5.7T|n759[wQ' );
define( 'LOGGED_IN_KEY',    'S3y/Q^6[J;27 >eLekEbuk$||e5DN<s6[kp)+qL;UpifaX<t)8!>6A%!`+zL=qeJ' );
define( 'NONCE_KEY',        '((2ySz:7vfSmbFA+:UHvxa9+er3{j*./y1uOdnb9Z}Utg8cM5k=dAY]tz$ucUT`x' );
define( 'AUTH_SALT',        'aa452UN5Pe4m^2@_!j#@C{0yi2(]wA*N;my<~-s:Hv%e>9V5sS|].a=wRMSzQ/H%' );
define( 'SECURE_AUTH_SALT', 'XSk:OAO _QN_{,vU=i9tDPXQzL!Ip!T iDHj!ZyQ|>@ry7u:HXuKc2wMy]f)-EP1' );
define( 'LOGGED_IN_SALT',   'Y1U5LY3r:<Hygq3;tX]Bwn64f|{UvhvU5g=kgI=%;`&7X(NVdUH8|+1Yd>1Ln}^w' );
define( 'NONCE_SALT',       '(zcKW@Vf3RE&-CM:x[VLY8j)02Tf1tU{3_Ed/H:2drn<e6#LPg~0@JRK*8gi+1uW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'woo_';
define('FS_METHOD','direct');
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

