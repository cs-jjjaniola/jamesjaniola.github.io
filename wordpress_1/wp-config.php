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
define( 'DB_NAME', '1word' );

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
define( 'AUTH_KEY',         'xka/|G?B!T)4}5B_j=~hb@$l!q`X-={l$KKn2aPVq/D>Fl)?P1`G0JC&<]@?%{_ ' );
define( 'SECURE_AUTH_KEY',  's(<40@QG%}uUjN/>q:=3q#Rw}?!v2rT9gL(,vT2YorA&!Z#kOsQ/}FU:N!7I4ziT' );
define( 'LOGGED_IN_KEY',    'DI0d)}{(z0,w2r$yh{}ku,@q#U6*&7o][Hw*Ei}UcA{zX?kOsRTK%U;,{7Z?j,61' );
define( 'NONCE_KEY',        'K1rqpD%wX$MkSiYhTe,]@K G}P)@)v,}9T <XJv)P.H+EXE_?bgp(+g-A~rEQOM]' );
define( 'AUTH_SALT',        'O27I:S^_XkSyJ#pwAMgZ2d|I@WyM#aI}_xi5&iE^:]Af>ub3uzu&09f](65clC0e' );
define( 'SECURE_AUTH_SALT', 'C?g*$M<wf!HJQQDOn.78[-;}?L:I.oRUu?:y@XeSz_Vg._:xFK/CpwKAybk>0#?v' );
define( 'LOGGED_IN_SALT',   '*5%drT|E:&..Um ,}cv1_Olch-t?%s!)LI5t|P~<H8v?!_e, t{45.oXmYJ,m3@`' );
define( 'NONCE_SALT',       'X*@w%J)?1NTHRHvc egv0O=|$/bi<{(i7?C[mtcTg |5F4gr~l3Swrwe*H/f>:q/' );

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
