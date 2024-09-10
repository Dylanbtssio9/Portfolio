<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ACJD?$WcS49:|N@tyyzj27oZ]CWD:5j8:y[U[v2I[N{cnV<@MTS_4y &zoP-#eER' );
define( 'SECURE_AUTH_KEY',  '-SWsyvicRFN5kN=%8IT}r^FCIj H#{~8Qg#ux~i:w)w;q3EEyhl_W!2[}t-)0+5/' );
define( 'LOGGED_IN_KEY',    'T~Ah|/99EfvgSTd5|9%/3%fD[_)k.?cqkIT1B-^:-zi2[UHVF0lu$_4_y`~> jyK' );
define( 'NONCE_KEY',        'c)pA,}|:]$VGsr-I*|Mh*!kqz&Vg@dBN,?a<+ 1dd4Dgog-37|{<j6:2gh]?Sj?O' );
define( 'AUTH_SALT',        '9(wZRLQsvEfJ1`l*4khzq0n:<fx3ewg|}gBwg}U?ehmS0^+I,`EzuEr}NAYw9*qu' );
define( 'SECURE_AUTH_SALT', '7X8Z~ELaW!M=PMwMm#xm)ldOy t-8WB17y:,eVV?6<hCsVx7way>n]0z^+Oyu($t' );
define( 'LOGGED_IN_SALT',   'nJ>sG7vpb(FJVhA)|u;(-)0+BN9?uy5!hh2v2v)$$bwcvREd)Tx0<cOA1j=y~][g' );
define( 'NONCE_SALT',       '1#XctnR^Xq5agRZZH}(=y6dJp2f3*qNn`. VwTu4TP,K7bUe{|;al7Y^MiveYNf9' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
