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
define( 'DB_NAME', 'topforum' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[KSN#NTgc[a(Bj|Y2P9f:+avu$+u8m%3bUio}73tVsc;{]7#|x%MEiPIaAs?i?fa' );
define( 'SECURE_AUTH_KEY',  'gE|k^7@{JL{cY|L@t8(u-GU{W-;&O}eQKOcU|L[c`h]#(akLa0fsU-QOeTg,-h}D' );
define( 'LOGGED_IN_KEY',    'm8*gx&FqsZ}<^7#H[*@B,g${j*(*xX${BKl3F);^sW?s6C=u;x;RNQnel=2F/h9T' );
define( 'NONCE_KEY',        '@j1%M6@d-q,20RKaJ$Q/U*!t292uo8jfDf;dsGKdTT(H<u!gM:JVUA{HkYt).CJ9' );
define( 'AUTH_SALT',        'kBFDy]|f,uTOATeNLisHmEe1i:?L0xD(<7H@_j]1zDzGw8h ,@6$pzq_qpr_`Om,' );
define( 'SECURE_AUTH_SALT', '`Vmli%1L1J1z5vGCQize_Xt#5Qd^Wn;>1g@MaRTJI8=ht+=wA?sUM%})T]y%U1mf' );
define( 'LOGGED_IN_SALT',   '{-G!@.eB1E:9-^ZYt(4TKr^g eT9n A.O|IiOM&oxXM(wr{6GxtxVcEVOo$8cKL?' );
define( 'NONCE_SALT',       'Z<{r>muM|hJzSWC;|$jLC%5(S_4$% N(V}K,q>G@%M3_Cj<:<u4cx2>Y(<mNk?0p' );

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
