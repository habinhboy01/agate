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
define( 'DB_NAME', 'agate' );

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
define( 'AUTH_KEY',         '^ive 4qDs6{p`]3SgFumFy[p81S}#GN@b;x*e4YE}d_|M`FnYk8>cE.aQ{C@R4WN' );
define( 'SECURE_AUTH_KEY',  'Hb ywGGb,Z 0[&oO|T#%tm9Al$oXMa 3;JT]ZB9Nc6Pv5#qoh%UC{f[(a~2;`ux{' );
define( 'LOGGED_IN_KEY',    '-c$[`3{o!Ps_^F;5:]G+}qa1%G h_Na4+L!uP*l)E8jg,{R;xtas?$,w`DuPnya>' );
define( 'NONCE_KEY',        'k**;DV)cO4`-We@`AL&X,2J$vgnZCn<)qP^[b[s<@Gp Hhby{`Tj?4${;ny$,&Ar' );
define( 'AUTH_SALT',        'Jl|>fWxC(w?+DH{@i@Lk]qa%}27GLW+c.H3aIPy{W!_ B_E$dpQ=ZF3Tc5Hm>4zR' );
define( 'SECURE_AUTH_SALT', 'WEe$Jce%P$^Kmlvq7Q_=&1%Nza?d[c_CsgWA|j$#T^,WMv@3c3+OCRfb9n(3A4jf' );
define( 'LOGGED_IN_SALT',   'zd_6JV.RSx1E9L9|2!Gha>$HHUS [R3kkxZtGZ_LFB7!d:kF63AU|Sb_#yRm`c&6' );
define( 'NONCE_SALT',       '+!qthQEH|N=ucey36wuI!!*rPR>;Ra<rQO@N:m`}:I{S9,(NV9G$AiA~S4$sdf~>' );

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
