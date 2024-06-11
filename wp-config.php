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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_work' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Mo!?6}8=Ls)R> rUj;9Ao|o^&t A[;.H6$u37ebrvG5,nB-#+Dl_cz2bBuwF+Xu}' );
define( 'SECURE_AUTH_KEY',  'R.h>qhOp`T!}a8]~>KGmF<& 3WOZcm=>]C8xArAS${S+6+oOou.rfF;S^n%m=b9O' );
define( 'LOGGED_IN_KEY',    '5)VDM_peV:dSlE*S9)tpSCotq3;V {ac3c AB [r1TF`< ,o6?[?kAB`#!r[PI<Z' );
define( 'NONCE_KEY',        '7xJmcxVm/6EVj]or&s=W>D1frPC[)gXIn_Q]yv%DQZ8<uC#3Ze6Q4$jGQ|synR?/' );
define( 'AUTH_SALT',        'F2f=sa(Y@_1euKJP Ug&BMtv9s~m?I&xlk8r<GN|;[:p`2AwSL?/6Y=4iR2xn20b' );
define( 'SECURE_AUTH_SALT', 'GO<`G??DP7OkrHDM@t~+Y(^h4|J ,wP43bf4){]MPijM*b8&$E=qO{2P<}FcnH(_' );
define( 'LOGGED_IN_SALT',   'mr(p?/JqS;S|+A$k0F0<O,XV@_.B]qNNXvu$f{_Y0E`Bx1|f-*5&(?OeBf?I,sRr' );
define( 'NONCE_SALT',       'r.k9ee]gmuxJk]}{KBF/o6@2JIo)|^st}NNC];p[m@xf_!mN`]N[pb|%:8u9yRxt' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
