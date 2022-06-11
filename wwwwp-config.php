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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '31w' );

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
define( 'AUTH_KEY',         '7mc|zF:LEY0VL%xKNZ;TK%|^;q14{}D;6sg=[3FHTGz=s;&??OMT)#%b8!Y=cgMX' );
define( 'SECURE_AUTH_KEY',  '6*3i]i%^c+|]T&5Q4I`U`{^d8@X_{b+|~(8?>G(55n_y`llT]WS5|y*uByySX>/?' );
define( 'LOGGED_IN_KEY',    'Qp$NgKO&@,Z);*=:c4s.Qw)In|,T64wXkLXhPW]|^`Od^ N7_s!BFH%]KH=Et}Ng' );
define( 'NONCE_KEY',        'L!0>?6HA3>uxallE~m#5-,ROWtd@/=a/k*x]^GQv1VedUh>x2-g(wn/aQf<H,V]:' );
define( 'AUTH_SALT',        'mMZs`i[V[k/t#R.%CS@B[t2|0(j~.9Ax-IhZ53wHm}wczGvdjAw*l J(V7Yn(^=]' );
define( 'SECURE_AUTH_SALT', 'UwR}[weJZZ}-lS9{/qCpE`FwwuMp^e9Sr,vfN)AL{}}+|7RJLLpMAj3^#1/!PM<^' );
define( 'LOGGED_IN_SALT',   'mz7ZOl]K-}*HoQbgkgBS~{fcV)&_SzK,@`a o9eVNx[ek;*]+;[%<2sOOk1AdAv,' );
define( 'NONCE_SALT',       ',l2^y8 2k$V^G?] ))-rq~3Xy2sECy:yuEmm2ELMuAVdz]aazNDyiamgzg*OD<7S' );

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
