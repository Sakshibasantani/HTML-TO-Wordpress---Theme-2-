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
define( 'DB_NAME', 'office' );

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
define( 'AUTH_KEY',         'OB!6+^ S6k![{]rgj,#zG;XSKj)7&ZX)B2jzI,t5n`5cy0oe3}ms+v`h> l;ZHoI' );
define( 'SECURE_AUTH_KEY',  '<bY c;HN#cH!cwe6g!Cb6a}/wZ8O;~T1V3s=dP%V`<U+lUkWc]PPAm&vKNat}q{f' );
define( 'LOGGED_IN_KEY',    'X}u[OCyLR0B8ieEjN/D!StX*[5>Q>|BW/ilg1%9zLPAKq{@|t710ja9-%37W TDT' );
define( 'NONCE_KEY',        '%G5?#M+RT2<9fk,lc<@zevG)(Ar1.8Zk{sdxra*T;P<V{nB%v.-].sKo-i R4C#N' );
define( 'AUTH_SALT',        '+p7P817 hgV3MCz?Q6oz3`bj2)?eZ)w5]Ajbsn/nAat.AER.q@rzE{oy;8v0k{M_' );
define( 'SECURE_AUTH_SALT', 'LESw,Vq?m=pe]ry1HOl5c6pc3_z$@{BRM G 2B&:?/8MyR[{&q,ld,}LmBiapA>X' );
define( 'LOGGED_IN_SALT',   ' Nd#4?@[i+m,siHd*y+nXFlNPgwvgMWLk^Mt*0`)GRi??SECvbrmtSi f:?~-$)4' );
define( 'NONCE_SALT',       'PsljZCX!bb}Y^`ld+n)m&iCw@q+i/m*jru5]C]T>I]K}l-JRVy_59e5xM.X+r=F_' );

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
