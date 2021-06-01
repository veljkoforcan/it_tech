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
define( 'DB_NAME', 'it_tech' );

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
define( 'AUTH_KEY',         'teR0;UVXG~;m`n$)?qBe`+[ku]Z[JDlk01Y]x/gM=-X5zW(s{0y$J;Cg-m7F?i7 ' );
define( 'SECURE_AUTH_KEY',  'LeKbW5[u{]1fq*(BtJtE`gH#Vp4{|q!2C`,XGGJ`&;&O|pFMSF[w%UAZOoNu}VaU' );
define( 'LOGGED_IN_KEY',    '`bU5.663F2I*`}98wF^/=W~:s.5cB{*?fDhWlc0[J<=Cq^EQpH*&:L8fN8h8`q1P' );
define( 'NONCE_KEY',        'pJ`{kx>nrUSPlIlZY$)LVWWVM(-BNn?Nqq3[*vS-FT]5L~ )$1WtIUkv`z;qxwLK' );
define( 'AUTH_SALT',        ' er@<|:Vtz*VXe4cPsjLPC#tL,4:wwgSG&^TrMwPCt/b{y@2T2@0KKrri3>*noP@' );
define( 'SECURE_AUTH_SALT', 'y_P9l1dgOUYzG:9Uwlm@`oB2Z0][:(Yi$l/%E5r.M49|S>GD*$qDKZ*uJ@pn(yHC' );
define( 'LOGGED_IN_SALT',   ':Xn8Sx$b >~cZ>>hDn74f@2;)DMfP<v<T8^;#8sLPR?jKy|:4re!z)gwR.Zh5IBR' );
define( 'NONCE_SALT',       ';v3fT$Nn 7]Y{ R?@GUe095>tk2{nvyt6]f{gxUm`uT$LQ].E7zN!@*>o1=RZc(*' );

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
