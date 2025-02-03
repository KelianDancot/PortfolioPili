<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_portfoliopili' );

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
define( 'AUTH_KEY',         '-p8q<^6,oX6P?hzQ{@5wE@XY8hfQjeOgV?S*/^O~8f*Rawizs%H^^@he$p+.>!nE' );
define( 'SECURE_AUTH_KEY',  '/VkQ]kkXl{TaH>!w7lOsygeMQbE~8[5EmB{JKXC+uf+=fXG~QZ{Nn!SdjnaJ?UP3' );
define( 'LOGGED_IN_KEY',    ':o0l4X3aykfQF0+;/~=J]`GW/, n*OO=iIUc[{(K;D6`vUFeqb1p8x$1]#gqL&aG' );
define( 'NONCE_KEY',        'bqnjQ3wYiJcFO:tMgC]g;j$^Bzt$65vQUvD&8U!:5}l bFV0PY>DQHY<Pvq|G63|' );
define( 'AUTH_SALT',        'Wy?FvXuUCK2q=qBZeVkCgi.x?{~s(ZPeB#iK7kG:7=$/)y3aUvHKMg`Kp2Q3A#gI' );
define( 'SECURE_AUTH_SALT', 'H (b-HP`{9I,!c=5/}0kUQ?:b!aKTR<jZ_FJ/$OXO%R-/^L/?{!!E`6hu8|zkv0N' );
define( 'LOGGED_IN_SALT',   'hpY*;m9j?=NT)LeyuR_gHt2OPf>abTNDFt1;WXyY-qh ^Gur&%!,P=u>ewj,qx=E' );
define( 'NONCE_SALT',       'u*g)~|8^G|*eQEVOr+p~t=MH(% =_0D}MlEo8LSl1QA+gQ}i4>9uh5,XD,~wj!Oe' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
