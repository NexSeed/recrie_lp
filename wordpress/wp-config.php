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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'recrie' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Q=AeJ#4`X&0v40XNa@AIx6Ew]?$z$b)@2QQvQj(C)$#M>(`F-8*7e<D39<Ua;_Us' );
define( 'SECURE_AUTH_KEY',   '+)+o>5pex6eB0k3WB):w,2=9%0uNfvl>6[O}[48?|K^p$6VIM@@J%|t(j{F<Rcmn' );
define( 'LOGGED_IN_KEY',     '4-J2EiKPY_vuws8n)!cVRz,YSI?)wt@;|8Rtfb+vQ9DS///s%:MfY%]Fc};rzHjA' );
define( 'NONCE_KEY',         'g>&y95Tl:%ne@O~&,8T;GJ%bzpB/K>D4fnUj]m4xvgTK^<B?GRauU[XQ?*8/3kQ4' );
define( 'AUTH_SALT',         'iC<PPUBm8+hEc{QoOR*:c5mx$)<^((XU*^Gv=Dl*j8me}#|fM_|*z_B,+o:;OG1r' );
define( 'SECURE_AUTH_SALT',  'Jq%[&bx./9hPxOua.+MN4:L=y$<=e2Ip71bag[h;48ClH$}oc-aSrH8fF*<IhCXY' );
define( 'LOGGED_IN_SALT',    '3oT0.-g>iLGaowL7NcjBb(@jQ.ub*9psqct?Y93}J6,rm %&:b6[de5h&PMIG?nV' );
define( 'NONCE_SALT',        ')wwI`c(=#M}+c9GDiQKX&*NeoIE.95VWbCeKD>l >r-+ w{q05HI@R9/Yb-}^e:|' );
define( 'WP_CACHE_KEY_SALT', 'G`EIcRn^A4saVVOzDHd^/}04efXr8 LO,~>UoV;]tJy*sY,h_$xh@nG@)HYqFVEv' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
