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
define( 'DB_NAME', 'new_wp_db' );

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
define( 'AUTH_KEY',         'r#{>&4=IB&oS!b.>f%SBK@TO:Flb++Gx6]SVW.JY@t!WJdO!wX>c+#it~Tp%cd&6' );
define( 'SECURE_AUTH_KEY',  '0f#gqzHwLsHO#6_d1Dr1%6`lYM4>ztP?4<[Z/-H`|~t{,S(z|.{}xtkX9Zs7kRr(' );
define( 'LOGGED_IN_KEY',    '^s))9kwCi;L@X>[F)f&`a?oZA+}<w1Sv`L{)TjTeFw%@a7VKI8lnw-]P#y.gGaun' );
define( 'NONCE_KEY',        'G$uAlJ1pJQLSI{{[{Ea`?T1xr.Ss4:TAE+Wds#-INo.ueS5qIJz0O[PQ=a8K(1 <' );
define( 'AUTH_SALT',        'wD[xf&fr;X`BRM`J=;c]6&UP)0Gvbi+Z,XQN!D!UqM`9}D6?V%:w_iL`4;VHlfKk' );
define( 'SECURE_AUTH_SALT', '{Yi.IUfkcSEL3Oi*cy1dyX &VSi=;hR^SI`SXK/h5{d=j{R<5x5rC? K(*(qh$oQ' );
define( 'LOGGED_IN_SALT',   'b9VVE55Mwm4j/F0}&!V+XU>KMc,n|%NM{5*OHAaw}tzPH9+&]!:sa,Lx}aHq7>y^' );
define( 'NONCE_SALT',       'bKtD[kRK:%DC#)3M}aq U)k;V .)?Q 4jYjZkn}%{cBfYMI2$ln)^>6pR{_zYE`K' );

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
