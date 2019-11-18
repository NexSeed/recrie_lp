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
define( 'AUTH_KEY',          'Uk1(P|e>7DH}+=En=T^J5!$h^y12|0PrFJCF!{{DbD0X4&,-2#_x)uvNjnuL6v C' );
define( 'SECURE_AUTH_KEY',   'x`;<wP1JS%PC0Dio(b3pvezb! 1]F)/;Qzh?f5Unq;3oPKdC<|%$~H$[xVket,_m' );
define( 'LOGGED_IN_KEY',     '3,DUJQsc5^@N7uo__3hHmrYs!^`ra>E:XpQ&9zy7B}Cjt8`P9H,CX|CZBPEl<9sA' );
define( 'NONCE_KEY',         ']wjW]UpDWx$5n~B|,TNK@NU/)G3@6P=xiS3Dxzvc&U& n>GEoW%N?lWp`+)&HGgs' );
define( 'AUTH_SALT',         '.[4bozh#*B:%it#NPBdA53+J!V7(,_3pigTrJ$pZnMj1fUBUh#w6 o&mW%F_o~@(' );
define( 'SECURE_AUTH_SALT',  '^QweJu,k(-z)QH%gIF7!0+3aZ90W?hi(dk{#+<vx3_*4&{CU_5I}5,{CoZDvgk]j' );
define( 'LOGGED_IN_SALT',    '0jC4v2V.fdN!T*|98A?dAwivAHKe2=H&QY=},fw@a~d<2cpo,7y).Wm]R({t22sh' );
define( 'NONCE_SALT',        '-)VS/NtfkA%iH^P~:ADc=tKh6bTS;a3>?V]pL#SlG]?+rdhnpwIH>5Hw7QtW_6dC' );
define( 'WP_CACHE_KEY_SALT', '9TScTmb[mq7b_Z}NXc>>~//T^R;&ToDBbA7eLImxRu.aAE^Ebm[&oBuC6){BL[m<' );

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
