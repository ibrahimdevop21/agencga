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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'qwe123' );

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
define('AUTH_KEY',         'PMh,V5M4?P.4<^+dg|h=pk&o^-w.xO^rie~|2H~Sh/+r-|.Y<-wQ=un5jg,<Mn)~');
define('SECURE_AUTH_KEY',  '|dK^q5Q@-5n.t$2x6<=~+y0L^t*ulRs+P=MLA3yvx}J@G}N%<zxY`T*P8sm.xbe,');
define('LOGGED_IN_KEY',    '#!S+P:vytKRf}PG rC`LT8$JcvVpL!=>WzV#:KA+R9gsKT%oB}/-r.!Rbb;@!!ek');
define('NONCE_KEY',        'W=*CEko#a:hM4#!mlfl!b$.Ug (^TrKz<U)KoTC)7.<K?=+vlrdK,5suG6$YH]AW');
define('AUTH_SALT',        '~`s41 W~;_?YE7& v0t!Tm<7_s1-uT>i.cBy<G0*<;=4~-mOH+uz,1v&0+]?en-=');
define('SECURE_AUTH_SALT', '@BbSX!}+DPev>+)D`aoPmw~;Bad!b?pD>Ge]Xm HZO0;js|2)F+8F^c=_THsRU-e');
define('LOGGED_IN_SALT',   'g6}uo0mKe/h4w*xBKEUR%k++kHfU+M60ZM63s+ZGAI%#a?7K?#}/2I.BkZQ#suNS');
define('NONCE_SALT',       'W{H0,)OTqf_?;8iGY-k >R(a!6>z8oV)GlN9(u%:C^<T0q%}-}%GhPk+0#:jeMEP');

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
