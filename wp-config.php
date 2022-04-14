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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/vamoscojedes.com/httpdocs/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wp_r9m2x' );

/** MySQL database username */
define( 'DB_USER', 'wp_jn9lw' );

/** MySQL database password */
define( 'DB_PASSWORD', 'q24v@l4?E?WJ@IlM' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '1N8XK7502g|DyCMs5U-Ho#2uWauNXeH&+1@S&o%d(8@3j#@J0yb2_+Cbq!@7*ow7');
define('SECURE_AUTH_KEY', '9Op|2G):_y])&6KhNFY4;e4JK7!2Rk2tfKO~4;sc@I&0j91-0F87&d0:9S~_:F|C');
define('LOGGED_IN_KEY', 'c3bM8zoWmLb[Nk-2+V74+6o|a-dW|vzK[@45EpD3bGjPa4;)P:~e)44~w*9edTl)');
define('NONCE_KEY', '7ef]!wF:[zL8442T]9z92&f9w-Ny2O[4M7f4p[|~FW+-[@UJ*9bOO0je)U62h9(9');
define('AUTH_SALT', '8*Z@%gy3h#!8w*sgU6[-4)5gkQnc5!i79jpT%2&F1kQzw5#1g(X1jP8_1k1L3&WD');
define('SECURE_AUTH_SALT', '_63j6q-9L-qE8(xnfV/59c;k+@lXK50;m#p|&lOfI9:BVw%0+a1Clh279Gz@0#o2');
define('LOGGED_IN_SALT', '6#wP4h7CW2NPyV&yqL7G3W510#gco@%00|wDs&]iL)8gC%5Ou(9EU7tbxB()b33O');
define('NONCE_SALT', '6f5%5QK10Nm5_5W16wi&h2iK90d8#_L49KF7U4JR;3NA5@5J-8O/P3t51B4!G:G5');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Swf6oF4b_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
