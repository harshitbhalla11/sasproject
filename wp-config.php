<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'casproj' );

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
define( 'AUTH_KEY',         'i.6%IYDTf6fvv2Z5,Mc5PPCQ1Bmxp6#Xi%*Y;&02&n-cpivhnpS1#iar6940Kg3~' );
define( 'SECURE_AUTH_KEY',  '^~wdcI<shWRuzVI,PQVY>z*I_ny{>h(>-;|%vk}x yeWjjK?P$-vSMu1^v$hy%SP' );
define( 'LOGGED_IN_KEY',    '.v IOf{jsbAIwqW],^V&Jav6(pH9d9?!Ty3=&9itMd}f2|R_TZ3hI+/NK,`c93q+' );
define( 'NONCE_KEY',        'M@!qmIGmWB>=*z,.!9${ug.P;$F{}GL({kJ{S#3OjWokhsXaAD.@Gf`RUCXokP[#' );
define( 'AUTH_SALT',        '._;A#_WHQ5/(<e|LPwjW7}$H5|`JhLvbLett]%sZPHYXYs9!`<#V@R#f?iOb>ir8' );
define( 'SECURE_AUTH_SALT', '(fa<%1v-#]MY0t[!1/k{jOSACOJe9uA}I{7%dO;kmiZbd.T6qlGQ9`NO(;pys01[' );
define( 'LOGGED_IN_SALT',   '^I `67mu7NpMmHf4 r#yT>=Lm88q_B`S1Ss(7}9WfBq)A;IJj$.BWKv@;75*T{`6' );
define( 'NONCE_SALT',       'ZQq$q+-8nN1e6wk5)0=fXK-ge#;AS*od8-i4jH3NRq{0idwLDgw+40Ke)oW89<wy' );

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


/* Add any custom values between this line and the "stop editing" line. */





//define('WP_ALLOW_REPAIR', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
