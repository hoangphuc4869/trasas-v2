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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trasas' );

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
define( 'AUTH_KEY',         'Y!DDbqy46xq5U/jH6Vza{3zcK49JzK`XaH&W@Acw:cq7V}1<QL#yHb)@<FJ+m%6g' );
define( 'SECURE_AUTH_KEY',  '-/dY0}kv.;?0z)oR<BEFkO|t5?,0..OY}6(AL@/Q+{>uy]vUZx10HsL]m!-+peQg' );
define( 'LOGGED_IN_KEY',    'z`SG:ZF9a:1jwU8CE)_)u@s/*Ul.:~,R>YJh26e[~zjwFet8}90q.!S$^BW_-L ~' );
define( 'NONCE_KEY',        '5f|GZ!/v=NrKHh#5dEhdT=esz3# ~$Ib!YoMrTWk7A_rx[tcL(=m-ywEd9$`!nJv' );
define( 'AUTH_SALT',        'A1S@W;Bc=Y@3a8~k;LH`|Z|3tNj#)`ZG<}(FZdXH<}LJ5X6IO2D0zA@KA#h~WQ,x' );
define( 'SECURE_AUTH_SALT', 'x3aHA.o_KH@@6=_v-;DaSd6.G GjaSj&UTUUAopmmLn}Hq_4[O[#YGhpcD>jNM>>' );
define( 'LOGGED_IN_SALT',   'NDX;0<k@tQGIl8v5tu00[(mGLXB;:1zRok7Qzq%x`GZR R310U(PinK$unh.9zih' );
define( 'NONCE_SALT',       'r<C5WM_vZKd>FTpHn,J-;a}(P6xJt]!8W8nz;*#fIkdjsYd253YQn WOl=c#-bI+' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
