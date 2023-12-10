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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demobase' );

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
define( 'AUTH_KEY',         'yV(}r4nZJa5LNy6yb&M!ym_stM.|V}C>B~9QB;C06?pK/f{5~sVC5,q)n2rU}{,K' );
define( 'SECURE_AUTH_KEY',  'V*+J6]?Y==0e85T5;;;C@md!MaL4:Mz` ?EIXNZ!P9!n]mq5?EwZn_aXk7!<A;t8' );
define( 'LOGGED_IN_KEY',    'gsE#{*?`Di-ud#I:>ZxMXQQ8J%PCy`rARdbbXt9a%wtK0?$3 R70.Y-2lgco4T12' );
define( 'NONCE_KEY',        'AA]~HTFI~-t_L+X>z)cu_cpL~8xXC34rT$NEg)COPH/Npa--ie92$ExoYQ-:XL1)' );
define( 'AUTH_SALT',        'uv#{61  b2r{@^BoB-L@ B%e}=Qe22b$ JGrSu|see[;hnTzzj2^&X6vSbJ[aYXm' );
define( 'SECURE_AUTH_SALT', '_LOkUVFfG6lB+O/[RWE6Beb|ne0Kt6tEV}Rm-/%{|N0G_TNG|fFv$d_8jwdCuv+W' );
define( 'LOGGED_IN_SALT',   ':yTpflK[y^^Db89~|#lpN9atR4PpTT$x)%c8!@`Bl{ R+_BN|ijJ_a~/EaoI4pE+' );
define( 'NONCE_SALT',       '[t${s%dmF>o~[jcn>sWrL?eFWz].cx]ve!-XOl,H&65H??h~7Syzd%.:]HU{H3x3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'www_';

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
