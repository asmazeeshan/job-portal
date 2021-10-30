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
define( 'DB_NAME', 'jobportal_db' );

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
define( 'AUTH_KEY',         ')p({9KWoE^94>!6+gWn#D#RmMl(`o:IWVRo]4!41}<%&[(3cS^+:T[RWTMm=^&^Q' );
define( 'SECURE_AUTH_KEY',  'IfG SwNhcinmyp}eNX`>lYa<q(,=!zbPn:0&o1@`_>vbe589b|L+(!KT6p}0$ufI' );
define( 'LOGGED_IN_KEY',    'H;yrE%dZBENbk2p9/<K*Y]FCnIv9=^ZeyLa:wUJJ(~9$fXK3E$t6ITm?c*Dlpw:p' );
define( 'NONCE_KEY',        'z_$h17n)F*8b/Gr,PNvU=sT[Fb@xy6[gjDN=@:>c{xK76]<Aj6D](P_H3.t;&kY*' );
define( 'AUTH_SALT',        'B,2j2a}BeSZvv;-GW{P$pOK6Pj6~7>NA%lY4 ?P[,J~p+}Ou{7sc}8IvxM>GvYQe' );
define( 'SECURE_AUTH_SALT', '.D6eW6n06y6q*@9Xg1#G})h.X<X4-WaDIVLOa_s1E.]6Qx.8QQ+7sa]eKUoyXn_5' );
define( 'LOGGED_IN_SALT',   'wX@Y@u;EiREVN=L^+Zwd!_|5J/+5C8vOecnmQ85TbK:n =,]pOsv8}HM`{k~!.N&' );
define( 'NONCE_SALT',       ':_41|.2}EJszZ#6{opyYNOJwT$?>)YA60X]L;wU}g7Fus?F#KwN&+O>{Eh3Io3MN' );

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
