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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{UJDRjDyV4_ka{Bk{[oB+_VTB&lBC,{0Tq*:6{g`}9?f] Hix62EEc$EX^JTs[> ' );
define( 'SECURE_AUTH_KEY',  '1}sg/2$y# 0q<jr[BUUdycg1^+)E(&~+QK;oS77k$MM58Q01zmmUs(wlQa5ZiG;[' );
define( 'LOGGED_IN_KEY',    'k; DN0y IRb~9Kj?_gJ?|e{j6Z]Xn wcv<<K$ZfxR~H}[Cb?302LgUaas$ddXqv|' );
define( 'NONCE_KEY',        'G3K;hr%,}1[xKbxc)=)(&>r/NRg/jfwbPS(:QCB@g|oX@1jy-o(.?=@M.Yg}3Pbb' );
define( 'AUTH_SALT',        '^KUhqeZ o12SXb3kph2f7kZ(}2VTi>uZzeMOD}d|F50yK`6/f<NP0ZiicxCsX$Ji' );
define( 'SECURE_AUTH_SALT', 'f bvm<p&k50s w]P+V.-9rDAX -=8>{vwRy|T59lK)N5EH6 [,fDp)&cQd>vL-4%' );
define( 'LOGGED_IN_SALT',   '>&3*`U6>%4Jn>>I;U?]!_Q((cUU-!AaTL8*?8~2F$B/D,ZM`U,e,$Kw()4H.)j@5' );
define( 'NONCE_SALT',       'QJ$7MU8%aPMqcQ-?P=m@<qO] {GgMZ!mPu1pZI5rr$WKmaHLw-8.AR5(#K;jd?^7' );

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
