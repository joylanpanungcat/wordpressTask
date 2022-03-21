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
define( 'AUTH_KEY',         '1~tZQma]3:FV)rXP3n%%tmusAKKb:M/_:5tzj@9E7^ahie}K%urZT=K7_uwR$)5?' );
define( 'SECURE_AUTH_KEY',  'oR8|(ubJ8@/C97~6Gk[g}PJ_fYn|p/oe[sd88DfKy/&S<0?3:%g]L@Gd#$lYT C_' );
define( 'LOGGED_IN_KEY',    'L?8:Kp:~KGc~VG[RZHWx{/M%hTvhf)ulu4<cbZok5I^.f{a#4/$Mvxn+:,sL~kER' );
define( 'NONCE_KEY',        'dyw8,s1sD*OkPm:wl7nK@d`uT5TpTz&#>x-#qh/P?j`U{}hqX`(=.U%e#K<b>jr?' );
define( 'AUTH_SALT',        '(H>yXi)Zf5M>n0:*5&%Rz.vB^TqioiX|1Lkp}eu`R.4([a4O+loC&_;f3y#obSe ' );
define( 'SECURE_AUTH_SALT', '!&(I<SXtF[:Q2/M}=6)gyw9[(CT Fu~Lm%gOFJ1(O<:0(qdFpsU>#[/}x=Nz>Z5O' );
define( 'LOGGED_IN_SALT',   '*65eseRvwSnMA~WmOTSXZ9hc}pfOM.,C[zso*.3~]mUA7$~^D]=D]W2@AIEV>G)c' );
define( 'NONCE_SALT',       'was|fwIcpjSkom<0?FF^+:|<&i.Zz]WJYmOv!Zz]i[rqg]<AB6gPo[yf[<kXBK 2' );

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
