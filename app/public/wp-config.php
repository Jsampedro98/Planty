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
define( 'AUTH_KEY',          'F_@JGq%y7FTba>J6m6vPV!9<p?84Z-%TWLFsvihmD7>*j:PWkD*Lz~qZeyvSyR77' );
define( 'SECURE_AUTH_KEY',   '^)>e+g^X<Y&e-;G>JV!2WSBv% ^azhKm7=w*O]ADk{1<t!+{p^Lp+Hwia>.TEJaN' );
define( 'LOGGED_IN_KEY',     '4/~wXkRBh=:66uwRVY9rMSWNL0dX% cah- `1(&xqAhz5r]O{BGe%T[Q%#jv);E*' );
define( 'NONCE_KEY',         '({;l!.4`T>#%l$5_qWcSPYCiEG7#k%I*!oH;}%J6GSw%5z8+3$+<qHOoP+eHx%T-' );
define( 'AUTH_SALT',         '7x-Kg_k`DX.Er I][mlI}<>]RPXZxSQA6mWK)MM2ye)umemCz&~sl>ltfrnGGi6R' );
define( 'SECURE_AUTH_SALT',  'b%}3~;.QVP<G#kCcKU+k+.I*N4@/R|[@ yUFRp=ck+UV(<TpC5gWk/)SuEIp,pe5' );
define( 'LOGGED_IN_SALT',    ' *]|N!ciG(6BgA*meYs5~q|,IprZbj7Ju}1c_YQP6^V`9GFy2^k&5U:2@Kv`4Ug2' );
define( 'NONCE_SALT',        'DxA71sEDX}05]<$ClaJHs8H?k]y,[LHN(}=!;E+5sxqpAUB@1,qrd=CeDIk:?x$3' );
define( 'WP_CACHE_KEY_SALT', ' ;P`.Oq(+sP:Q|`SoI&+!mIqaJ!bwFB`jq@<~VB86J.d[mC&4z=/b|oI/sz*X3MX' );


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
