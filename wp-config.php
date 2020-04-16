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
define( 'DB_NAME', 'fonsyf_db' );

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
define( 'AUTH_KEY',         'q2:=iDD~B[_YWVcP<aeNJt{,C[L@;V/=L+7+I=znWIG]LMONnoukj_+3M>r+.eVp' );
define( 'SECURE_AUTH_KEY',  '.u~GYLhwKQJtGqs>Vm(QrVygL~<9pw0{cd9Tso7H5g8_MIJp:Kp[<fXdND|q]grk' );
define( 'LOGGED_IN_KEY',    ')%Xv`2b41dk*!>{{G$n>U$>SNEI!rv0uZ:wXe_XUm8.hIs30>S>r<lN>]@m/WJ8s' );
define( 'NONCE_KEY',        'Hw2{r_+i|CN?/w&6uX *XG;*g.?5}yd[GPq?BM*t+~-%Ph04_yGdyY~T?N8rxF9:' );
define( 'AUTH_SALT',        ' 6>_y{/_@bUdwaSdxsAD/Uo-d44!KMZ,Df4}GB?gY:M r7@syi>qIpU!:?rtGCdK' );
define( 'SECURE_AUTH_SALT', '?`%5j)@<.W*dCco_rEx /+Ewy^4KmjXqYQFAl|x*IUl-:Y5FXRK-d|ri$#8bz=eU' );
define( 'LOGGED_IN_SALT',   'rj[)|7J:_]f7iQqwXK130u[]y6:Y<pi~RY-fT(*1I-^tWR1u*K<ZNN.NwCa2?tlD' );
define( 'NONCE_SALT',       '2xQ*)ga4Qqr3cUm%o!. 8m6c7TfOD9-7EF:P{3p=XFjljb_3_az~!k;S!~:-q?*f' );

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
