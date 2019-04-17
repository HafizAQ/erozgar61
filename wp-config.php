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
define( 'DB_NAME', 'erozgar6' );

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
define( 'AUTH_KEY',         'SKa0rF[B~r{)sfM@jDaF;;|&czh67c9;3$gv=gj9Wt<dUmbuSLr1< GW9on1R1^b' );
define( 'SECURE_AUTH_KEY',  ']{zgfkWvGXKolZ|ag0G5>>kD)<?NhIC5yM3+NmN!8X)02!|<25e}9:`|@@6K[vo|' );
define( 'LOGGED_IN_KEY',    'yi:VL)!9U{%5n*j:QO7jXU[@P1F[BBb%:+I~#Eudv,K,?%DfEMCgGF*6W+y;VaHx' );
define( 'NONCE_KEY',        'OQ)gNEu~ */{2/Ps.{*&Tg`.O7wjgz4;l>p^bZCJS_$y5n$|m&vQw=XAy~H#8hHt' );
define( 'AUTH_SALT',        ';p.qkjGv.#k2i,:g-e^EGKJ5mSOwHb oXvrRdLSBJ>Ckj8mD&OPXim 0N]Z$`_?>' );
define( 'SECURE_AUTH_SALT', 'xh~9DV<.XJ[qjvjmQAW}3ba[`zvmJc@X-H/po_!xD.HhW0c!E(eXv$`ksDccQK3R' );
define( 'LOGGED_IN_SALT',   '{Gsm.K=C#Hp>dGQnu#;VVW>EF6` K$U^2Dr;M+BI6zJ6aF1q<nc.AY8t:OVt`<QW' );
define( 'NONCE_SALT',       '9HRWUN(qe?:BdhfGcc6o}zn+qm$X$8_iMqHz[^5xfuf/!SU.S^}?;R#}7so!]3[>' );

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
