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
define( 'DB_NAME', 'oil' );

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
define( 'AUTH_KEY',         'phc^{dY;|9cq^4gBQP/A;U*)|s3rkep/^[4-.7[eri7oRcdp|K]2DA~}SF*5Q^4x' );
define( 'SECURE_AUTH_KEY',  'S$uDvf(e]=@oGy*Jx|.>Uhb|1bc>-/H&?}WiYZE1ok}dPVp=3[oQ.g<+^1w5_j5/' );
define( 'LOGGED_IN_KEY',    'Lp=Y>~>r CS$<~Oe,{kT~llkVX>f[)AE;LBQ2%?[EG8<%3=V8u97&@Yl+&S8X-fx' );
define( 'NONCE_KEY',        'z},J?06kc#o/?|{m#qET-{XeLKm_wXc<IDm>di]ffL0c}Ge&VjnUVR}1,C`f3P_n' );
define( 'AUTH_SALT',        'QXio6;G{saIiEH^m7Oz|&#@rc{zI%fg.Jh#*R9vD!Y5dv|TbK43p/gdNMmG~!2[4' );
define( 'SECURE_AUTH_SALT', ']e9i(hL3MyZ@(tM&FGPH&Dp<JSf*&?l/R@>@ldW_17 J!]__h%9LBFEvC(!f([d,' );
define( 'LOGGED_IN_SALT',   '7uOY6V+1g?3[8Jx!9:<7EYiw+6jj!|H*v8{$]kwd ^c27F!zY{`@y*XOVc`~h3xj' );
define( 'NONCE_SALT',       'qI-c7=|<H9_9=kOl Yc5v7.W`a]bH)GeU?q%:KM!#OFg#Gq`[RV-R.6A|*L4=Ex0' );

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
