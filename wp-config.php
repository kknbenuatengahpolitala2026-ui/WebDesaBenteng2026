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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '@{?.Osg`Ghop)C~!nR!T0qUOr$9NZMD) =La%p>i?Ul6nzUj$t`t_BUqr58<@x5A' );
define( 'SECURE_AUTH_KEY',   '@uDRW$>M4FTp Pwf:Vsh>Y|<5}Ok!Rg4R1|@THT{$B+4;!e}zmmTheg8$E[J<5PS' );
define( 'LOGGED_IN_KEY',     'wvX=M%HM6AQy|5UC^Ld+CE>UY+4.m%)&Bs?5~/EP6Q)vR)E59#E#1ib`aYOj1L3T' );
define( 'NONCE_KEY',         'z+6+J(.aiCL-cekQZp:U;Xq2tg=5_k6 ? :k(Ea3O9_Q;?}!sw*dCDOavt~R+xdX' );
define( 'AUTH_SALT',         'rmqf<&6Q,D(y.,znx&wot_m,]>(-n=amL&8=v#-MSQas`D dFn3>6|aUhJ1L]6>A' );
define( 'SECURE_AUTH_SALT',  ':_%!~a=L~Yd#vm[n1~D;/-HW)6r8rQ`,5S1ejEQCL,L7*%=^s<L<3HZqa;~+)n<S' );
define( 'LOGGED_IN_SALT',    '`%lhDn=:[Gr,8hSY=P`6y_iLzp>1NLAi:qN{`vA,k8T$6yM`lupUt*/:~4ga5h_0' );
define( 'NONCE_SALT',        'PUOr{<.w_heO12[vHoT@?q].3*.v5_.t-0Q>dLZ ][bKO|=*3zu1nUHr1b V0Hko' );
define( 'WP_CACHE_KEY_SALT', 'Loh;SOP2yr_es7-G)D{d,NqE($Q`Ih%_PqrpcF,Y8DkkD1]1VR1gj|x]Za-o;6]c' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
