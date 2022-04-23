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
define( 'DB_NAME', 'acf' );

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
define( 'AUTH_KEY',         '`BEL$@.Q>ps[@(vzYnp;;4Ga!r]z8]dS4ulU2HS$n9dN4i(~7=Fzu2Yx]~yy2~3F' );
define( 'SECURE_AUTH_KEY',  '%PM@7{x9qndMP!Q,*jc#6LM:@s/$z2rW?Z8E{Xzn(U1euu(%ikGi_Cr0f=3(8w6P' );
define( 'LOGGED_IN_KEY',    ' 9p$ji!eIJs^6}}exAT9mhXK;W,:vs;~GUlfqE/rIEOZEPizjz:)O9N>c0f,`JMi' );
define( 'NONCE_KEY',        '?U_z;|d{DV;5x6n;}:hJWa[FTWMQ9qputZ%_&9gl,0ee3J3Io-F1` _aDL8xSW,7' );
define( 'AUTH_SALT',        'C0d(m0AqrxC@r/9l;oJMY= U>7h^{+H?LrDy28Xfp3*xCBH4Zw5}~}nDt46PeUOp' );
define( 'SECURE_AUTH_SALT', ')Sxg#*c5y?rW:@kcQ2ViA IDryHF zz4wA85<~qXc^iiHv@rex,?=k4KP|N*TEwO' );
define( 'LOGGED_IN_SALT',   'u0l]@;57f*h;4dLw4*x3do_=L:F38;PKEr-H/=;sto?%HT3~0&38%jQxCXx0u;y>' );
define( 'NONCE_SALT',       'WdXBI;8#batRKM|+.co3kFeQp{`,;3eMqZADXJ&P*mZ0Olpu.5.Y!OB|!fr;xZ3e' );

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
