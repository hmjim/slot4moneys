<?php
define( 'WP_CACHE', true );
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "moneyslots" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "23134" );

/** MySQL hostname */
define( 'DB_HOST', ":/cloudsql/slot4moneyslots:europe-west2:slot4moneyslots" );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'DvepYMYSo4vSJ;W$1tAE)B`pDer%@@7sFI#?9lO/KMWBh9vWJpbr459}+9J1g#oM' );
define( 'SECURE_AUTH_KEY', '*C)Hm>B$6VKqhw,~jsw%X}WB+p+Q@[u`*PUnH<W[-3#vN-z<a-ay]biR4{ys$]xZ' );
define( 'LOGGED_IN_KEY', 'DT~BI-#.%OPqYZF]_a>hJ.MZ=wv/Dx9a+Y]%,Yo2xUdfH)UISGWu7%U0~4LuaH@=' );
define( 'NONCE_KEY', '%cbXkYVmTlgY|Ll^=c31;MP2@65W)UK-s9VO[016l+:ePl@SUWBofmB2E=Gduu%>' );
define( 'AUTH_SALT', '{2QpNV-?S#{w9Cc,}Z]59l:#yGMM%p)@hQb0,_2AC}]EymVM9obT Fkj ;S-F+Lh' );
define( 'SECURE_AUTH_SALT', 'ZhM*Z?8%;7CRs!M_DVIwz#8y1pys?gsc|{d%D(P%]4m ^JA] i3jT_~iSUUSk9-!' );
define( 'LOGGED_IN_SALT', ':*y^UgjC-0CzbU6Plxo{[g[(>l-R*|*4%,Zmv :>SMm+!97ta I{&_yp[{nlc1l9' );
define( 'NONCE_SALT', ':2dl}{I:Wq-,tzx@R),&W;cH5PxD2Ap_DblAd~wiTYLQlI.:*0Bt^d1O:>[Rn~Lg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


define( 'FS_METHOD', 'direct' );

