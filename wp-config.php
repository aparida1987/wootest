<?php
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
define( 'DB_NAME', 'woo_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rock@7861' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'OU1J)2.,URAIi&K5x%^|hk80M4}CyQ?<fX`L?,A9!Oi ~gZC4GVB5=A 5gTYt}?D' );
define( 'SECURE_AUTH_KEY',  'y8,+]YE.8!)%jOlw/Fqw0z#= Nc-JMMQeSm8(kD%5FEE;>BwW_Jqxem3Q8_FUrL;' );
define( 'LOGGED_IN_KEY',    'g>}HQ4#pxzhoRk:1kR>V!t-~beCwUhyMp-Pr~wX[d9~v[`#wxQ+nu{hQ7b2fjP$g' );
define( 'NONCE_KEY',        '$pU!4J~=wKBpF1Hy3a95b+20[flXBM&=50U>Y|*7J[Y| 7z(8g1v|=(~HU%:&VQg' );
define( 'AUTH_SALT',        'nL~QICU6rWuWZ5N./nZ#_;S$UL<F~PddTOH93_]0zbGX{c!h:bF|<bU7rz|4 I8d' );
define( 'SECURE_AUTH_SALT', '!#Js^&q7:9V!tUYL00][bGx8##{T,?*7gq5fESlET|H8mg6(lJa~42;X9a}Ry*,%' );
define( 'LOGGED_IN_SALT',   '+]rxD23LV A.<j/_,<KAt$*j07uCT{Q&lamt=T?eQswNcGT`,*)w#rM.}AIe5~DE' );
define( 'NONCE_SALT',       'DsN&}TF{7IS*:Er6UkaedqNek3.d+-*z=y?%iSVCn|Fu3+]os/gJl:9db[@>kzn>' );

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
