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
define( 'DB_NAME', 'shop_web_db' );

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
define( 'AUTH_KEY',         '4A6NK:EWy0<#_-VOV!:AL`hZ{i:pCUR,q@tn1z9tSv^DLaMR]!4emh1@0&0)e,zu' );
define( 'SECURE_AUTH_KEY',  '_,h} 9fXiR!e-C]9v0R5MY1DSUhvQJlxt*lP`*RU<mYBpf!Miqxl3<:&(s>*KPzR' );
define( 'LOGGED_IN_KEY',    '+aacwYY/v#F(/;Z3Dl,1>8P<?F2I6O)4*kTs6UONK$vjSD?-I`Pn4a9{&YGVn9Z(' );
define( 'NONCE_KEY',        'U|D^>tIPz6ak7P^QP]}IM{|e!Uv| peniIaWG3QLEaw=0!@DN|TaU4hu]SwSzis*' );
define( 'AUTH_SALT',        'w@=#G%Kk~rRq&L<R-e#Szz8AVWs4R#&Bt3B9_M~]{r5]i|J,%/=[#xlz2spZ|}!@' );
define( 'SECURE_AUTH_SALT', 'xrrp7 {;BFDoyp.LpNn}W9Cx~+(%4l#LB~MnN#/HhN_Ige`#z j,y/+.^Q{&+p>4' );
define( 'LOGGED_IN_SALT',   'A}N%pJ85|LF8`$>Tl%cVde=_8+5?3 ]$CYDkX-a$;XyWqAo;p=DRdxT#wRK0[Hd@' );
define( 'NONCE_SALT',       '@>NIXOkb%2d~~RPh>P$$ o?<V4ESJg4gO7U^_l)&hRw<>`p#b|6>ds08AP605A}K' );

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
