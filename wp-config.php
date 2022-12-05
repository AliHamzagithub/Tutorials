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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ProWeb' );

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
define( 'AUTH_KEY',         '<,#H?[FWlu&S2;DyT];CdDZ! )qXw#bA$fJJSP-Tz)X,9R?O]}JIde;_[t,J]*eL' );
define( 'SECURE_AUTH_KEY',  'oxhBi[ByO$]2G!+YNA`xqp$<a-tA>_^`.QGpVO6egH0|a;@405_nk|>4:ze2|h6j' );
define( 'LOGGED_IN_KEY',    '^SG,f!LLNIsqyjbo4=!YTWg>X* O]x>$C7vhNlN;e?WD{:]CL9 ;}n8eu8e3c$,5' );
define( 'NONCE_KEY',        '^48FoS;>*SR7#xTDW30=^nw|S(DS3*|*VV~=}/,Z1[mE$s;7Fe&NqkBPLm8H8u(t' );
define( 'AUTH_SALT',        'U8y/y~/|XgeA-%ySch-s=fK},wnDsY<b)of%JTt[>UbR:ktU$8UhN>{)qM.?1d%&' );
define( 'SECURE_AUTH_SALT', 'T=6hC6[^Bfka`n5fZDzK[(%xv hnPW$#C-J}VhF6B1zXF|~PmF?gz*z-WSsp^ZEi' );
define( 'LOGGED_IN_SALT',   '%*Z=fh%(z?4_`8j1N4h(C ;tgPO!UM|n,Rz(UeU}A;!0cB@#bS3hO{*YA]pK|md)' );
define( 'NONCE_SALT',       ')HShfgQfzS?ear%UK#=~J hr/]jX3|f?)~b^^A5}[*%I@Um<USK9KzQg#Vh,FnhT' );

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
