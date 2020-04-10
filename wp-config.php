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
define( 'DB_NAME', 'team-sfw_db' );

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
define( 'AUTH_KEY',         '6|4S32wceb`Lb}t]|{{z-=_zt]CM^I6~1HQ=(IyE1#%(W.2ko O76u0LD+zWlK@)' );
define( 'SECURE_AUTH_KEY',  'J(gYwsU78 J=EV,uNs[H6DOL?~p}*r(CAZ<Y2^7H(y)HZ78r[o,08(;cH? _ec3y' );
define( 'LOGGED_IN_KEY',    '~sSCL,buke8cl<U4Ac9Vt=h]2mb.d|&X.y?C%!n;h0k7SR6oN4v~tt:CJlFvTPX~' );
define( 'NONCE_KEY',        '55]o]AV&1f+.Z$B }E_bqH#e>49<[z)G-`uq]C]pQv>XThfK+JA#xyj6s6A*k1|$' );
define( 'AUTH_SALT',        '5e^oFbxzX7I5*x6P3UE]7=&R`pfEBjg+=?g9 !yD/X7h5F~Zs_T3CoTy}B*UT*ES' );
define( 'SECURE_AUTH_SALT', 'A48B;<//%P!))OP1s,h Mx^StyAx8]3[!A:_q 7S#=bW?y&Z$vJu<!p>PIK1LplQ' );
define( 'LOGGED_IN_SALT',   'JDtp`rG3_xV*xL:zkLmgFWLHno_m(BxRvhqBPJH,VsM|lsK?,F{[&07IG8$cE0WO' );
define( 'NONCE_SALT',       'ak>i+<%^ Af-$,St 2iy&v~#C<;|E8_ZJ!JZXs%;#8Poi_U$~Zb%`40]?&!R,#8{' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
