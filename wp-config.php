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
define('WP_DEBUG', 'true');
define('WP_DISABLE_FATAL_ERROR_HANDLER', true);


define('AUTH_KEY',         'uUlV30alqxLjbEI4BX7hclQk8N0a7i9aPmPYs5VpLnyg+P9lYZTw0fo1BGnj/JsRvss6nvf/4xYSu/VEOuOweA==');
define('SECURE_AUTH_KEY',  'xh9vWjljS0gSiG5iQRjBrpdPjjiUPB+8u+dBcbwSIdX+dLdxcYEl+qOAXrINcy7wmU40lpuM1k7XbN40fjdwGw==');
define('LOGGED_IN_KEY',    '3nDkr7aCLfxRdtMOxg2KmKpqLlRtZZkDKoR7/UygzCLZovuqrDIFqdR7IHFeZ/r+OnwWGMSMjWioqW64yh9m8A==');
define('NONCE_KEY',        'fScp1nV7mPYXQXEzQitfOE66vb5wJLYmh0dM8BYrB0PhVx8Duar24BX01OVMyF2w+p7+xocyoj4L0jaRMK5RbA==');
define('AUTH_SALT',        'a5qYGPhepXtDRugFDjHfOYyMDSKKkMnh3k2QuN+gqfwNkWpLePZCZCfdcklrAToUjHKOFRGG8UY1dvowoodXfA==');
define('SECURE_AUTH_SALT', 'vaYQXgYaXS0YEP+yLuIrENPeFlr8C1KeX9N9FRipEQNwuv+jreQyhyzaMqOkhtt35x0raed0QLOS4WyKgMJ8xA==');
define('LOGGED_IN_SALT',   'dJ4dAw30z9ZodFosEr8tlDilfc5hoTdl4vbk2aXpXGbTC+vPJ4S0mPBCbzqBBEwcAddKPCruJD2W0qLJ8IoSVg==');
define('NONCE_SALT',       'Aik3tbG86/+4L+MXtZhnUisxRW4AxLpBZ/oEj5Guat+SBH6wMcv0CZXLAJKj4lIUy+V7BtOvNqjsIbJ6c3WtwQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
