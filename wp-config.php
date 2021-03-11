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
define( 'DB_NAME', 'dengwordpress_db' );

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
define( 'AUTH_KEY',         '|Dje!phxH+pi0g*Fvy7*DP`YaD/b$Km;n*h8^%%ztt@0j-(!y+*XNX|O!e:{x)_`' );
define( 'SECURE_AUTH_KEY',  'XUced<kAOt9z-?$;`1.@|{0|xjb+7lOF@~Pw(w:Sxf2XV`sD~)_Bmh0zH3z8&fO>' );
define( 'LOGGED_IN_KEY',    'RN&uydwp@w&{s&UN%DSMqTXa8KCRQvv1$F[]hkIq%<.SNF|z-;cM=]C&p9A@T0>~' );
define( 'NONCE_KEY',        '=K&~blEEr0-cx!/vr%Kp<Pzs.|^Ou`TqBU=OX|+a%!%qG,Iz`o_,ayEGpw<e1%Y+' );
define( 'AUTH_SALT',        'H1Dh.dn@AT;A ,8Kg9!BL)#|Ovh}uMKo4b K/Z$}h>vCWMf!}5e{uDWs4bvb]kX!' );
define( 'SECURE_AUTH_SALT', 'W8 7ZaMr+2Qs,cS=O)4JN%$xlu*g}ivMNxYi!HruD7h77>Qr6H1b=V^=3//$Dx=y' );
define( 'LOGGED_IN_SALT',   '7?|GOH>-Rp:/Uhf&6VYU^UI~Y^/?b>cDhk#MUx3=o2wwn=4I_vqy7:j52ND*(<wV' );
define( 'NONCE_SALT',       'J*DaMQl.~]1~rl;sH4za;>=5[!bIo/?ITv1TeIJ)D]->+KKhL(=}luEoX y$ye)C' );

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
