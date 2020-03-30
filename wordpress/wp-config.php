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
define( 'AUTH_KEY',          '%fl1ei>7y(;ZH~,xrem}{b=a0+Bu,v# E2uT)tJPJ0<y[~X7Z{8r}6FuZV$Z3$ P' );
define( 'SECURE_AUTH_KEY',   'yD:+Qs$6(JM5tI~F<i&up?k%P$$=^L@}}<pp.&_3+++07tW{k~J#(K(;OX#`Z>Y{' );
define( 'LOGGED_IN_KEY',     '7~9X@1l89%+iUR0j72Tk]f,`P]vYYlGe{(Q:T4iRi]9Q8>/d&}(iW:-472koAIy5' );
define( 'NONCE_KEY',         'wklcgN>.d*gzo]/5Wy)@g[.pj/2$Qs5%A -SE9yu45Vk$~V@HPvNgs~kwZF%{Ex/' );
define( 'AUTH_SALT',         'mEZCYbM -O+4` bT6cP`k^ +XT7/cq5`3S}/is2f/qjLDkp)0Z*9}#$Umfs9d?bO' );
define( 'SECURE_AUTH_SALT',  'bI?uAj%>tn+CSvJbgc!2Ie>1eDjmWBOF$Coeh}TTi#1d~p`!9gDHk0?n7lwVGelZ' );
define( 'LOGGED_IN_SALT',    '1yD+%{IXK9H(&@h/93AWFe4)nzHt?t)^JpKGC4Ekw0hl$iot[q$FuC9.|SsT+~,r' );
define( 'NONCE_SALT',        '+8|8R%V5v3u^M7Y@i`Y(@0Rd]hZpnf6a77zDukyX!ojtbOFeP9tqWCie~+a`@DxL' );
define( 'WP_CACHE_KEY_SALT', '$CcP_w(a,G}.Pw4Y2vF-TBp/aW]r3FHZy# S1.D_d~6LOAA5XV}rb#+1*;Uv(l&:' );

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
