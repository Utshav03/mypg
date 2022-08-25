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
define( 'DB_NAME', 'mywebsite' );

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
define( 'AUTH_KEY',         '7uKtY.zt*ob_o]4z3KjZCdhkl1 )Wvpl]qhe`KOM#{9=1DB776`Sj3Qv-cg(ay@2' );
define( 'SECURE_AUTH_KEY',  'JH@g}[Siu^S.6CHS|S2b5a4q*So++dqIibK{2 !_X7yz2RPuQVWvd~XC>(;YH]Hy' );
define( 'LOGGED_IN_KEY',    '/ptbN-,3$I!r{K|$S8*&{}Yf6`qV8Q5;xG4<#slz,C7^hD|lVWs[OjLN{r2o+~Rk' );
define( 'NONCE_KEY',        '4`nqKiY]O~vWE<zRD,gH}aD@VaOh*,x9{3Bl_[9VLtF5G:~xwRm4UMS[J;3*1.FV' );
define( 'AUTH_SALT',        'XaB-G9:V_f*mz0RO^0ol83pXC[H_*e`I+.F[Bru!EC;4m8Za;LVg7MfE(W^w577Q' );
define( 'SECURE_AUTH_SALT', 'Ob%)xcq~&:r7G9}w)BBYy{xH`:HxDHbQWu>2OH7!U36`/LbHaEQ8{ T+tO!i=YC|' );
define( 'LOGGED_IN_SALT',   '%{s]+)}TmClZ&+m,-&kShVu}O*8>N.HHg-3W($fNU=F&5*_844[wj2Vnd}HoPH*N' );
define( 'NONCE_SALT',       ';cR`xL:ag#2 2h*Oz!oE;!bIFymF5Y,B:S3qo) FTxwMeCPc$<s{jjj$Fx-cM=(S' );

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
