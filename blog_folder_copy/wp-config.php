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
define( 'DB_NAME', 'lauren_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'lauren' );

/** MySQL database password */
define( 'DB_PASSWORD', 'laurenpass' );

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
define( 'AUTH_KEY',         'FCrdO3BD2yvCsmcv84;XwWtjZt$VI.,wuisLCFAlj.0@@r<FhVD.dloC.qHoDauL' );
define( 'SECURE_AUTH_KEY',  'k/F/Oj]EB8!%s8gX(I=-K[t9EGbO=Ti)D;K<aqF%iZHG|_i!*[EXr9QuMs4f1-!o' );
define( 'LOGGED_IN_KEY',    '5$~E9M8B&k:d>Ld#OIWccxw:owmNns:EFi!S-4J_`R.OEM8ENGI3t5GH)+i;##BZ' );
define( 'NONCE_KEY',        'u/h,I`2fY4>RAKl)caOQeTh=GCPIPzs+$}|}7MT6twbNxr6AI5qkumRjz54&M6UU' );
define( 'AUTH_SALT',        'LF;]{}14|OKr,K46S(_6tE,e*?<y`/iiBqwy]:}TW(b6pn0jWNH8bU&z]%uIhRJK' );
define( 'SECURE_AUTH_SALT', '=`hl,3KYFi[ A8qJ.]kT5$q}Z!necZc[VlJjEc7CZhutrfT#G7{/DmttL&;&{;3<' );
define( 'LOGGED_IN_SALT',   'I+AkaDxMGBjeD41PkU_O2ln0!YL#.)TCCAy|sLxjpp?U*#faqg63LO-H:zmlDP,h' );
define( 'NONCE_SALT',       'uP(G@ei+nmcyM8ZkAtgkPL=+*HkJ[9Hq|Ghvfeo]F1sEavt*$ 8,&X=YistUH!2/' );

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
