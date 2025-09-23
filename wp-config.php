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
define( 'DB_NAME', 'visualbibit' );

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
define( 'AUTH_KEY',         '-n{1-@0;XPP;`ah)8Hg_i1=M`)(<vJ0=!q$^T<0awQFLx5n;NPy8Y*^T2S0s*`K1' );
define( 'SECURE_AUTH_KEY',  '4W:&]3fi9ERDeDhT8zdXyeURPiG<]Op)KLaOTnIVAlb<.?I(i_z$;+Gr2teT4E5_' );
define( 'LOGGED_IN_KEY',    'Ij=o[wuh>{_X(52!jF#gtCk1$8nGU,|u>oecE?Ga]?ny|5yYULOc}46aN%cZt07(' );
define( 'NONCE_KEY',        'xQc V$d_XB_,N|.$1L$qj,wMGlV:KWjB&ituX`OY<w_<}WYH^9NTiT142KSrqc=K' );
define( 'AUTH_SALT',        'Wl+^CMvm*VJ1]*sy_=+XyH]{A>WYCY5a?oBAo&}J|b1g<|PO2QfL-$Q2eFb W<*>' );
define( 'SECURE_AUTH_SALT', '~n&BVA-CFz{0Hfb7<F)y&w+*GL$}rH>_~gWQe%XoK5aanaM~jFo`1+57Me_J@?FU' );
define( 'LOGGED_IN_SALT',   '[xs,?[#@!<@LhkNAc%]P?=8g,?8D,4768ae]<-+f+*y9]UErydMLLYj%sWy>uvZi' );
define( 'NONCE_SALT',       'p]{&;enAO6gzF2Cc5;=Y#w<gLwiKo.x^SXNSNjm:-pizHGk&-.nYxP:9Zr,z,iuH' );

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
$table_prefix = 'vbb_';

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
