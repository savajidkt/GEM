<?php
ob_start();
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

 * * ABSPATH

 *

 * @link https://wordpress.org/documentation/article/editing-wp-config-php/

 *

 * @package WordPress

 */



// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "gem" );
/** Database username */

define( 'DB_USER', "root" );
/** Database password */

define( 'DB_PASSWORD', "" );
/** Database hostname */

define( 'DB_HOST', "localhost" );
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

define( 'AUTH_KEY',         ')i|p8GvtwaWwApP6ol/U@DTIoku(ro0C4^neTaU<:ctJ.UT*Y4uM7>(a:%&<K}eV' );

define( 'SECURE_AUTH_KEY',  'X4PiN~,C Zm)po<V7{~b0/|p,E*dpx)Au>cr(u!bN6V,o={2XN1dWBz.O(;+EE`-' );

define( 'LOGGED_IN_KEY',    'j44oN^m(wG<VW]<F8?nh!T}=?jI%FZ%o|+ cf/j}(_YEk(O.26/&~s(g6kYeH:i@' );

define( 'NONCE_KEY',        'Z=|`)Q}jxJ_.QxIntA1hCqYWN[VhDz,9a<uK9EH2RLebn9a,w:-&eLi[lK#QjNQ/' );

define( 'AUTH_SALT',        'T5(n3-Cp16a4gixjZk0oNYcEk3n^&Oa(}K:}}Z1G<`u|XTU$t8AN2]REN]/uy0d{' );

define( 'SECURE_AUTH_SALT', 'a=D:qbCZm_zxc~>_47DyZ &ht$>m{VDaJozjoknpoWajPe8!Q2wYabA}N2%AC3]r' );

define( 'LOGGED_IN_SALT',   'yZz%gM~G58,:ruC=]bBD-sIjT&uYBy/dpcfXNlTx-~hYqZ~`f6xQXxIZ?Y-npMkz' );

define( 'NONCE_SALT',       'WX4B$L|eMzQOFu=/[.v&ezI!i7@P9hg^H_U;*.(?i=8TGo9`WO,M]6MIc/LMAW5u' );



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

 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );



/* Add any custom values between this line and the "stop editing" line. */



 define( 'WP_MEMORY_LIMIT', '512M' );



//define( 'WP_SITEURL', 'http://localhost/gemain.cda-development3.co.uk/' );
/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname(__FILE__) . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

