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
define( 'DB_NAME', 'wp0646249' );

/** MySQL database username */
define( 'DB_USER', 'wpuser09114' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hfnLKhUOKqANonC' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME','https://haremeat.com');
define('WP_SITEURL','https://haremeat.com');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'DiAKdSgrJWZ~ejeGhs3E1U@b^ 3RG5VexD{^0C}|O^-uZKTB:Gi&kJTJFHP+`}#,' );
define( 'SECURE_AUTH_KEY',   '=?>GJpE;Rd;|U(AYpvwy?P+xITTBWJ^**T#$vqIUQ(vt/v3ee?`Jb}:bF6J.,p+n' );
define( 'LOGGED_IN_KEY',     'A@l||zW=/om2WqNg_.}fex(ILXZ~z@l}F]B7McE<yr!xtkK;YDHDrChJMSIZh9dX' );
define( 'NONCE_KEY',         'Mb=}P4kZ%C4LmS~l2A{3zj?xatM~3%>b>XsLyTSV*#e1%$Ny#O.qSZ@7s0viz#+f' );
define( 'AUTH_SALT',         'V`+eq[<&=$LKT!AviB$49Lf)2^q%RoW{+Kvw3 =3Ix(2#f0M>`8yQ6<cDhPvqE6Z' );
define( 'SECURE_AUTH_SALT',  'RRg+ZnscIEhi$aa8ZDK+ku,zdmes(UIdcl7?Yes:9?ba[U6SOUO3L(U-0&?O!+n)' );
define( 'LOGGED_IN_SALT',    '^]^<ZS06g/6$Zuc-KI8;%:>>;1-|3X`$.jqB)5Rw<eyAI,b%pa}OOdNP0;gNrlO9' );
define( 'NONCE_SALT',        'w,qZqodI_}qgsI2?Zns2o?Pac.jblk;(DbW,$OOUz(d,m[jv#>*b1k<`o3x_BZ~ ' );
define( 'WP_CACHE_KEY_SALT', 'p^EiV`2eFYW`Zh,3zY NvsqY4U`DA!Z/&3Z!Tlu{eOk{3iW{d(uYl.Q=aQx:a-VT' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'FORCE_SSL_ADMIN', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');