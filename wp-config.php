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
define( 'DB_NAME', 'tehuruk' );

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

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MwhMDRyoIYQMW6dHHk6g0S7TJn64KhKHIk3NKvMjy9SqlEXZ2SrmreAdrjF555ml' );
define( 'SECURE_AUTH_KEY',  'dgfEzUlFITFYzMCFPtZ1UKyqaV9sjvtF7IMdWJVAPmOLHq5NkYgiceqS2Si9LUPz' );
define( 'LOGGED_IN_KEY',    'Wth96MIPcJ1w9q7f1hS6ZujF8Gd5WzdbdslhHoNX9NrfO55E5HVubvrJPlvjDeMr' );
define( 'NONCE_KEY',        'y3UMdtFhvi6Jk3bo9c3DduuxCsc6oub7o96T1XumdN9GbE5hbZSlmZncW1SoIjse' );
define( 'AUTH_SALT',        'V9bvmeL9pU8Jqh78mxQDGCLmJJGl3jzDXxqipifoui3SHTrPCnpkihP03IgS3Gac' );
define( 'SECURE_AUTH_SALT', 'br2bF6tSNT0p6Fzjcf91gdx0vO3NnOEt6xt8SVpOQOv5TxlJiy6BLIy22w1uzjGK' );
define( 'LOGGED_IN_SALT',   'sLSSXXbCbSb6J33v3YrmPOiWhTngJkJidxvXmzzeblZg6ceDZIMSe9hTZkK78Wcj' );
define( 'NONCE_SALT',       '8R0tsfQ7gpjvpgxOKYVxjLIReLSfYtuyIRcvYpedzveSHNw7SVTlyiXn0LxYzXK2' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
