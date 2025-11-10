<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'cafe' );

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
define( 'AUTH_KEY',         'DV&;6n[lKf&?Z|5}}*cKhrwoP#Ea~Akb~Kuu?K2:vLoZN.>tX5L98eU)4f6G/RZf' );
define( 'SECURE_AUTH_KEY',  'TGs 5wRYdN2co_)&zEmz{B5a3EF=$PjD@-j%h@G@=6k58Vc<FkG~mmzf*&[@?|hh' );
define( 'LOGGED_IN_KEY',    '^c*uwifM.fz>(@8dK#-ve: Y@gv?B;,*Y)mhGb}]~,TqkV#<>sTEvyz^w`6chjYR' );
define( 'NONCE_KEY',        'ZTG7KGA8FFRTg`@t}R,EL,!,6j${(+p>Id,pV16;N9DFb#R%gDA&AUjwVGtHOs g' );
define( 'AUTH_SALT',        'B>9_O;8@rM.ZkI?6d0JF@X=ua|[dG_4nf]5`]oe<PU76`c?;*,CVp{CQ-4o,E9yR' );
define( 'SECURE_AUTH_SALT', '9^C`a)zb4uv=q>3MI,u*[mi(^k$eG&!4_eJQyrrF7sZk/TZ)vup]@M_;6,1+(oaj' );
define( 'LOGGED_IN_SALT',   'KqZ#Upr6oJq@EoG#t1xc(}{Uft>Ah}jPEYf5SiQZ3{~MY&lY3G;[Tf!5m`OFoaqF' );
define( 'NONCE_SALT',       '?W$W+C)k2=Ro([_4))HLtVyIFmqzybW%}<;:OXtq`X,SnuI%N-zUP`MfzHhYf8>b' );

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
$table_prefix = 'bb25_';

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
