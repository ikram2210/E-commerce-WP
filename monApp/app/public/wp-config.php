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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JBww9gdgGLqgjmCJfjbNhPS4kmJqogcx2+exxMUAY1lQCTse91qM/EQll5XlejhvtLY2uT2U9J/VIE+U1ZPZ5w==');
define('SECURE_AUTH_KEY',  'e9Phvv+53CSNJVFwE+tjozcX3VOtJub9xmbaDmh08dmVqQfdp2RuG3NiyyP4wXdIWCLHN6+mkPwzBRkIq6jmUg==');
define('LOGGED_IN_KEY',    'qoovz/p7zSCUCHYBPy3RTKi/jvxXNlXzCq9dKouPO2OuKWC0EZtHRHcMZmxaCk8hEMhS3O0r6BPdrfiSc8rZbw==');
define('NONCE_KEY',        'n4oKPWZDl1vdeVYGXx2AHuz3x5Ha7Yu8Ev8ZMcdAs93GISLInU+9gxzoslvhjlBYFDO/JQuc1tb7uweuvbi6Qg==');
define('AUTH_SALT',        'rG3j+LFzaWhHtnwW8LUvLHV5BQcAF3f8NulAdVY9QcamZuKS1i6QRL384NXgbWwxyvfe23DX/JeoGncYak9oMw==');
define('SECURE_AUTH_SALT', 'WQZq9V3b4LVDdcvLSA/jBE2tMB35AkpNyedK3LQqMm0ExhUggReMNf3e7ZgZg9W5lX1Hhn3zsnWp/0LuOo5wBg==');
define('LOGGED_IN_SALT',   'MkjkVnC1oHsWsGf9fOx7EETl/cWxwk2ZwqV86bqjQ5wwyuttSDhJmpfh3mBSgiIqS3g6EEmjUCyo8hM1wH56CQ==');
define('NONCE_SALT',       '8Nxi9RgUd9wfq+t5/AQ/DtriV313iTHateoMFfaetB8J9kgc5S1E9dKWHZSUhD/riVBraVYqvPSt7JRDl0J5tQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
