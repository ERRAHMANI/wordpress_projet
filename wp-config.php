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
define( 'DB_NAME', 'testWordpress' );

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
define( 'AUTH_KEY',         'bgGX/R!:#6%{^WoP3OheC<=@z6qM#P-r+^rc_c|TDO?Z?j=v08;zphnmR74j5~!Y' );
define( 'SECURE_AUTH_KEY',  'qUCFSm7>V8uy.0PAS[FpLXv}/=pt&L1yy ,`JZ~T$ym]+#?[S2oZ^{G=QJ,1^0gj' );
define( 'LOGGED_IN_KEY',    '!m4eB,UXl!Gn.F/!Jpb`>SVWEIXZ`Q(;e?IWj9MU19`<OJnYU.B?nUU3+H@!9T|G' );
define( 'NONCE_KEY',        '^wXxzB^6HY*13:{X1(2Bp~ah~,TNu]=Mq8B^XscZkW<i9:@f/p_ A27GFCN`>Xrj' );
define( 'AUTH_SALT',        'DGp$HyAsk:NsL$ftKJRZga9DMjF~Yk#G]!OuD`p4lMFM-J#g#bxS47q:HtHbwv9s' );
define( 'SECURE_AUTH_SALT', 'j{%vKv.[2D^/bomP$RkqHZQ~N{wKTY7LWS[[NGemcf9X)%a%F<<osn1+tbY%(R7Q' );
define( 'LOGGED_IN_SALT',   'rcu:XS2@c:Y3Q$-qz%DO^ ~~n)-Xk3FM;Hm>}RNA(s*)#Ak^LASN0G)m9;43gP^>' );
define( 'NONCE_SALT',       '?Z3+oD?pt|V<t`VpK;Z;oAR$2_JdN^N?_$jT9{E:U3~ayLiPfq]+_hJcDAUV$PMY' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
