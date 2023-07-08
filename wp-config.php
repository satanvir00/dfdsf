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
define( 'DB_NAME', 'savsau' );

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
define( 'AUTH_KEY',         'Bep~~K[)#OaHq^GkJ(IT.l2Spl#U8->NbC|3]wD*64[L;5vSM2^A.h2p2(KqqiHS' );
define( 'SECURE_AUTH_KEY',  'FLwYfQ2%c23Jz6Tw+D]. .D-6a^,_BBX!MW{F9f,0+M,I2dk{_>?@d3-TGF]nx8:' );
define( 'LOGGED_IN_KEY',    'eJimAzM_HkWcvR;zF+P5*N,B4.(THkuwYc.-<S*G/OptW_$B}E:Ut79M&PEu3Il@' );
define( 'NONCE_KEY',        'C3G#4W+9P$LWw7?}u#JKtlYb2O~lR-YYC5<+3@qw)5nzrxPQv +c|S8u$Lh`dST)' );
define( 'AUTH_SALT',        '(:-ub74.GE&SBl-58$?ko3x[]nNSSq5Nmh&e}CAxr9B`m$+J]DDhrK;=FZ?!C<<]' );
define( 'SECURE_AUTH_SALT', ':9T6zlL~={#Ty>:WoU#3;Wa{m1dsv@k@%h,Y.-wI`b $MO4t7d4U.qwOqz9)R$ms' );
define( 'LOGGED_IN_SALT',   ']3JL{F#t!aiDc[8$d&f/j:usRVqcRO/?BpG*E$kZl9>n]/@GALM8R)nSVTz0M(5?' );
define( 'NONCE_SALT',       ' Tki1/RnHyT`Neip2U`HdNxP.JRrEAEnCI LLi^R`:Rib6_A~Yt?[IK)WVi$gn!Q' );

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
