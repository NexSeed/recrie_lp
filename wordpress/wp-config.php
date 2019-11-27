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
define( 'AUTH_KEY',          '98g%lN`H<UG;`*Pb`;p]u,wW`zU&I()@J,KZZ4MPcVq2%!@Xo,?i=QKEc]-Ep%rJ' );
define( 'SECURE_AUTH_KEY',   '1gcm$LN(>MGT=cm9]um1>24~w}gK^I. UBmi)LznK76l5E~Dh574 $33: jHHY9[' );
define( 'LOGGED_IN_KEY',     '!$aoALH-a#gY+]`Cf@>6`>^<lOem: `KzOmJGU5h3bk//0t.3G/>h{Z@@MK|?rv{' );
define( 'NONCE_KEY',         'Yk7jsb11HP/=#nd^UBNf&{`XFF2(:)9[+/F`B[geSxhRhWX&lV[7/bbirHIv#(PX' );
define( 'AUTH_SALT',         '7.f3Nk@ RS8dkYL8Zq}G,zBG6/B^(#KOUe#]h:I%MZKZ:*pJ+Y&M9CLH>?5<=YmS' );
define( 'SECURE_AUTH_SALT',  '+g`zwmCrr*gM_&AgZOynhR&Q):DFk9Oo2t8^!o8YG0i^3C|j l]7N]:hj.,Tq%$o' );
define( 'LOGGED_IN_SALT',    'bi; BN~-IEY{JSBKTAoaGf+tgbGRwm.FhG!P((6)-^qRY9q#>q^3R@a<<VEzH(t9' );
define( 'NONCE_SALT',        'P2q?x!f:P0v;8F|V]7mc3]n!bLTex].*$a?-~]:_n[!EkhE^0m%m$mijj7+ zJ1G' );
define( 'WP_CACHE_KEY_SALT', ')3PviVn9W6I>dnt!M<c2qT)W@&gX0w0 emHG6RKNWL!y{-ISp/(hG}M]52a5i#Yz' );

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
