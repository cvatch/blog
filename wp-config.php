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
define( 'DB_NAME', 'blog_db' );

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
define( 'AUTH_KEY',         '*@.R|uOXi30IeoC*4%2hSljx`SqR3b3=SUGopxVGw]`!afb%4m$Q{mDtV1uN=UCH' );
define( 'SECURE_AUTH_KEY',  'rfp`?ZpJuk$l<%0)q_szeuCk2Gwf]k.S^:nq:y15b0%][@_f*JMO; Yv<#8@0=^Z' );
define( 'LOGGED_IN_KEY',    'HUx8=&SGK`h}hRrtj?1YFP)+>Ob4a:0K*?LIRKL`_su6@CWW|7pOdIWb|<RnpX2c' );
define( 'NONCE_KEY',        '%9%B #.fl >IB)JYKI~d{2UlSDq38Pnn&0zI{~{@%>NHKXQqmZ !aApOCWI w)Zg' );
define( 'AUTH_SALT',        'z&q%v}3=2(2g}|:|=I>t`qdDgMaXnJZ(~f ;I:-N5__.ZZ(;F8u<::F/6[=Z28yD' );
define( 'SECURE_AUTH_SALT', ' ahE ~C`hY`e/3+@:0S(]%^Y{v,#w]E5+zn>vqp#*O}To|}G+SJtG~zwZBs=~!:c' );
define( 'LOGGED_IN_SALT',   'OBiv=g~80={(`BZZ)cP1^t&WJuKF8O6ooo*12KE@7PbMs?PYwKx<M7*yV~[xwg:l' );
define( 'NONCE_SALT',       '`[1)[{Clzp<4=42wg+5)>5P0n^<:I0cI6()g*_wRfh4Cd_klVyD:`Ao1^}-=0nnV' );

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
