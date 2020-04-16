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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         'Go,Y4zx,qiwu1_E>$fSW+G 4xkg@+2uWPHIuW 45f-.h<ki/61{H^?A8jC YthUI' );
define( 'SECURE_AUTH_KEY',  '^Q1a$<0wn`ml> L_K(PA.W/_Jo?1) H/eqjbIQe._iORJM8-QxpO70D#:T;BKtYF' );
define( 'LOGGED_IN_KEY',    '!#R^wZYs# q/&DX5soOl=TI%eU4A/ZX8r_{ALo<aTwvBNkWHBls=:qw>A20*dL)Y' );
define( 'NONCE_KEY',        '%Vm35E3HC0i2E%)uwacjwl-6{J*6W1dk%_vvu<Ej.I6Lw~A;xM]N%uUn@NO2[wqA' );
define( 'AUTH_SALT',        '4+ehT@@;<z6f~+w|-1|~Vw&A]prWZRP4X~[,^^aA]`fr4|?}qig-l&CJii2dg-/R' );
define( 'SECURE_AUTH_SALT', '-]yQA`!F=Ivb!|.,y.<u]1B(S|wsaA#Tjf*%P/KB^wcbRU]Cl-w2}7woU)~FOs %' );
define( 'LOGGED_IN_SALT',   '1-U+vk2Vq_2?Z=X.M3-k2!axB|gvUt6gGurx.rT/Oe#6Fo.Jc^U&%,$MdP{*/Zy]' );
define( 'NONCE_SALT',       '!SCFapcapYMjmc)Aw@(1(Z3.BDk49m?R{@37.o,:aRc*<=:p:reA4]/Q7a:`Hs%@' );

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
