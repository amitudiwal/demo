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
define( 'DB_NAME', 'demo_db' );

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
define( 'AUTH_KEY',         'd)~WEfJ 7J|,T<dBS{0`K[jLTx(I8nP-ldvxp0=pEO|tJ=G}w@g4GQ?;lY0@Vwff' );
define( 'SECURE_AUTH_KEY',  ':^L%?6UL;o=UTNYjq>`Mp(&;mj80|}9 /o)H[*%QjQs{99+/k>LR58C5!Cm:];U{' );
define( 'LOGGED_IN_KEY',    ':R+R6WsrNnbF1F]ZK{QB.XU2S~EC:UwZ-;`kK#ooI2oWN?%3XL]y,NOs93-z3cWp' );
define( 'NONCE_KEY',        '#C]qhk=Xp,TUw(`OkHx+U.wM#fvj$Lm25rohX&8YRk,JesH[yC|L)_Rc]%ta6SqP' );
define( 'AUTH_SALT',        'B*6TdfKdl;O>dA71bzb3gnb|::yOG#M{l!|9s9v]Eq!dV^y3d;4wu&WMuN[Xv)^y' );
define( 'SECURE_AUTH_SALT', '&93j3*)MYs.(#4Y8_HxM0LGl$cr$ Y9,tgBTu~X7|T;+<yQ]h6|DR,WCUglwH-}1' );
define( 'LOGGED_IN_SALT',   '2c^:i;}l,,!ER$Grn(h5.zjk/~9*)Bxl!4o+I{rx2Et0V!;mJz^0R<nP$UNe^jhj' );
define( 'NONCE_SALT',       '*&?WEe[+rVmO|!T&/i`y2C1ws3@j}N2m3,bf-PlV!Lg+-@#-csrjFR!~~/iOe.${' );

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
