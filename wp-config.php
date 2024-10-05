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
define( 'DB_NAME', 'maryam' );

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
define( 'AUTH_KEY',         '$/*Dcd5U3H44A8a@N@_%2Fj7*bFqwP?}E}=E1~`$rtL5.ejN!(P_]hqy^ntly/Qg' );
define( 'SECURE_AUTH_KEY',  'g$o/KHG)+e/504,<A=uQO6WU ]^v[`DL0,{.eqooHf&Yx4wkYrs&zriM7i/mUUq4' );
define( 'LOGGED_IN_KEY',    '|&kSpUC(Tm9<86rXE_=cD;+{<@_d<.fhbf%]?2lxFm-sbT7`21loG,bmBj]{,NUh' );
define( 'NONCE_KEY',        'SA#LdSEmf(,=qupkt`?B^<$&xz,WsJQ_Hj%GrqinE]+?=sK^u;}AC)g9J^0=K>OK' );
define( 'AUTH_SALT',        '_nXX^IN}RD}P>7=*@2VaOOla=yvzw]+gKp*/@7rZ?;bX=fXX{kSQ1`ra5%S-Z?du' );
define( 'SECURE_AUTH_SALT', 'Q7=U{dC=kGm}^m)fd>SznqxBJlXzNR?e-rJqR()!ONN!(9<y?Dg>&n1rr?/sG9)>' );
define( 'LOGGED_IN_SALT',   '-kr7tdwN`R:b.FmH-QV:ZR?^h]0/pp1# !cM46f*|FLoY4rveqyZGXxs%ElYj?}+' );
define( 'NONCE_SALT',       'Us{6DF~(sqzz/E#<<-&M|-DY[HY+s|;$Cxk.hW+_xLj)_$V0o(X5K_#51;SD3 w$' );

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
