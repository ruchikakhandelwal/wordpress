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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wtp_wp' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Admin#wtp345' );

/** MySQL hostname */
define( 'DB_HOST', 'wtp-wp.c6ab1tehai6m.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'q:H7G|tf<oCq8=_V!=W7-3v)CGSg5zY`|M/]boQv88Ds[)zK(5>D8AQZ10[T,1BI' );
define( 'SECURE_AUTH_KEY',  '+g,6sOR*7o4Il?(h|ru]=@gI##{S[]5A4#ekx$#H0dW3tFXwYP$preQG A>Gbpi#' );
define( 'LOGGED_IN_KEY',    '2/+##h>A3;V8nk-W][t^nJ%PTyR5eEbl>sEU1g3jzVG>t:d2T<2&KO>8Dl:F<r6Z' );
define( 'NONCE_KEY',        'a!j,&!x#)wo^kjLku.`K<f*mLi?,Nft4Ct|g,%1?W7$AEY&[3s70O^{Ry%8Ea0<-' );
define( 'AUTH_SALT',        '-R,PfE(8/[%-F|syj!Dj[|h*vM!H7B{I)4[!T`+6D11nGmDzkJjRvNR)Y.j$>V#L' );
define( 'SECURE_AUTH_SALT', 'Qs,M?%|{G6t3VjxLblCRnxeibj!IbZ@DUb~fknLUoZTxWCvU)IbzcuqW?K#^wlKK' );
define( 'LOGGED_IN_SALT',   '[PNhwFBw0,r*#BoRJGs4pzleC^oF@-0ns#C1@<*o!TF3`;@EwbsyuJ63r_sn>N&H' );
define( 'NONCE_SALT',       '>s~!$)2?s>z^:4*;@5NX;baf.As2|-+m&kD z>=%#jlbN,0F{apB=9)-Gb`z`J=O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
