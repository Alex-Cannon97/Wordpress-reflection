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
define( 'DB_NAME', 'wordpress_reflection' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         't501~SC?k1g_Nioh5Qx=OL}g~0Axeco*:~Qo5]5Y|D65`V[bsR;i2@L*8kH[@`k%' );
define( 'SECURE_AUTH_KEY',  '}ENnehC?PzEWg(6KyN5N_2CQ|am `8i:^D%Mcn-Q%*@=+u#BZ&|(GSFfbo ::Nrt' );
define( 'LOGGED_IN_KEY',    'c7>D]~BDgDm>MZ9^2P0DN# xK0`4)S>vz?1e2W5;XdIFa#H{+;K$m*dzeOm6#5JA' );
define( 'NONCE_KEY',        '*x|=Yjqd@:=xH0Pp3j15+GqsZNE#(55RBA>KKu^CbQHR2=4M6&< qE8,!|;2`@l^' );
define( 'AUTH_SALT',        'Ywyw!|-4s^Mi$%Of0E,zHRe PYVdj5 E=S,g+RN/IF`DV&+`?o0R i0mcJ$D]~*0' );
define( 'SECURE_AUTH_SALT', '^dsD9wj1zL*2K5^-zmA_t41^Q_vI]T9rB:tX W[7kCMudk,A>Y`VG[RLy8bSL%qu' );
define( 'LOGGED_IN_SALT',   'xGh<s]J*f,FGC%wT[Tm]5hB0(r7|O}B%P_:[!s$xv<SpWT7X&wphRVMhd;4FM+jb' );
define( 'NONCE_SALT',       'OnPledU4o9BpPgJ4Z5t7S,>b^_9I/a6}@;u&Ny7a+MV`RH? ~bq EI-BE+pO2HO^' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
