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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '8;a]tA0w@V-VG .=d%o`rNKF6C8zV_8iobG>tk9;xNsN]CJTLltAmW|/{a7C3(&8' );
define( 'SECURE_AUTH_KEY',   'KvsI2m>:Wdh];;Iq^Wsyho_OgPAxC])Y7)T{^%@<0A22mQU+?V[Pnf[1.HB<cRF-' );
define( 'LOGGED_IN_KEY',     '^]IX8K[L_M1Q_@ISTDb6[aGf[0.9i/F0y1a)3N8L0afKvGXMDe2&S+&TvXA4paIr' );
define( 'NONCE_KEY',         '!hIkMiByo#.k^nWk&_FM$E9z1j8a-x%P?!+3i yR%B~/Z1M$hzv(u-9!5{cg08S^' );
define( 'AUTH_SALT',         'g#M6rh7L.oMCknr-~6$Jbw`mAJe{ !Gsx2+)g%p@*k_Y8aUYghurFHl7JJTly3Rw' );
define( 'SECURE_AUTH_SALT',  'Ldh77geb|@j]7h,$RE@m(:r!6P8?Y&Sf?l+$^T;.7<2-o^tY*:bH_s%{-EqA->kW' );
define( 'LOGGED_IN_SALT',    '6I>lKjfNfj=@#+6TTDSUH^PoH@n?;@GR2K{L6%xP>e@4&wR{@:T2B_+NM k-1K-n' );
define( 'NONCE_SALT',        'f3YOX!lT2T^.s(VJU!%[/lmq3:;EB|Nx) FUOTD{^gyj,ERJLlI+!nQ+FnE`S[e~' );
define( 'WP_CACHE_KEY_SALT', 'P9z!W1ehP3!npW:{4=ct^@/;%!16B9rn2TUNe83iS_3ur<J)-C9,O*~=d{=)wGf5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
