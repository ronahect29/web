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
define( 'DB_NAME', 'ecobelleza' );

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
define( 'AUTH_KEY',         '>GSSA!n22#JS!3]6$=/9>-7jf,m,-dn.G,q|w;c^Ce:d7NUCRDnZ!l1!_,]c/fiW' );
define( 'SECURE_AUTH_KEY',  ',8,>zxxs:8pb>q-`+6)+VXM~H,?9|n-LYr3v<Gp$yuP/PrX|~z`.e1=xjUWQb8)k' );
define( 'LOGGED_IN_KEY',    'v.Dw`?;;]T>smj_Zr=!O@{1H.z}-NOnnn`g?XuI0p,1m-(vw*#v3liC+q_[gnWP+' );
define( 'NONCE_KEY',        'Z8PbVU/cQvn^9(:rJFJ9t|Pniyp42@34YW+{uMX.bCv6jU$kAC;|P!4*&bz@^Wc>' );
define( 'AUTH_SALT',        ')I+]+p{Vw),nE~62m1m[(o.tngABv*0S>A!!fOfF;>N2Dzb?0v^bS;OM>:+Q*S5E' );
define( 'SECURE_AUTH_SALT', '*$UG>52a=Cx^|:5WZk8b;wK9_R./bM^.oi|G*3La%~gQs8E$alJmDplea?3eLHpx' );
define( 'LOGGED_IN_SALT',   'PWlp_)qr!}h1S<s`>{ER93FiDTz[N}oZ@xPtvW]^dk+_YTAU;(`A>>DS,91up%]S' );
define( 'NONCE_SALT',       'Hn@!paBSY8az_}b|`U[yL)JB^ # cEezg)FaK`r]o=h>`d6e[?L>suU5l[xy?c{V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
