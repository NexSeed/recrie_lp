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
define( 'AUTH_KEY',          '.M8cgK/kk5R#0`!EW.:M`;jkR~Ck-({5Y7mIiyr%t*4.0w6_]cX< 6{Bm(flD`_&' );
define( 'SECURE_AUTH_KEY',   'wh[Llc:(pCHoVT.(fyfX3=]wOLjX&cv3YvDR]bSqQsn*If*HA{hJna;|gKeKmrPr' );
define( 'LOGGED_IN_KEY',     '}0GGPpg=Vg_CL%yEl#.[B,p9a@8UaB6HAFG7rANpK+7EP ?P8(T=;(F3kRB5n3H1' );
define( 'NONCE_KEY',         '=FWq+V_t62uh#lFGxA6-hbAyO&nB#$ LVK;tD!Kx2_C+9ov,$j;:YHy[Qo6LZNct' );
define( 'AUTH_SALT',         '%V|=PcDqY=1ZQ~9sa(Q{OL]Z&;jl(^]/(1,9]spw5hY[-y4UZ<fYcm$L/)x(mssc' );
define( 'SECURE_AUTH_SALT',  '.*L5$`|5-sF3Gor&5N]SS%<!,CSYt38KkSq>q8}y92GY&Tntq(@,m<Z5|E`PcOmZ' );
define( 'LOGGED_IN_SALT',    'i-$Qz Sbb:Pwq0Vj]B1AHXB8Q0T$5OMv*=#Z{v*I.i8,0|wnxZL/ mcJ.bD|OpXn' );
define( 'NONCE_SALT',        'o:Nfm<1xs:oXO%=DQxS#R Z_bF_Kkbu3X49Re-S[GK{*7nvRy) B-~3%f5$c(sB@' );
define( 'WP_CACHE_KEY_SALT', 'KkPUo0!~SRREZD XUFLCMp*rRUHLy~ye<O,pQ*VXyMB 2n2N($ySDMG%TKj.[nS`' );

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
