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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'github' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a' );

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
define( 'AUTH_KEY',         'CNqAeRFRvgEgCRhcPhnjzXNmOd75lxVmHWq9yena5uRWuSwmKOTO9cgZh23gGtMO' );
define( 'SECURE_AUTH_KEY',  'NGMc2CMAkzszIZO0boEjJ9VBlKUB0Z42Q33hNee7tsNcf569sXTcA3SsLmgDWLxt' );
define( 'LOGGED_IN_KEY',    'v91KQGf0l2nWfOQKLpEMIdd1ne1s0oaNMRAG89bdQ4VSLNw77nbslqaBzdcaUcuI' );
define( 'NONCE_KEY',        'Axk0ruPf1l1s3gGQLihGrLAFpltgBfigGuBiairMfVjqgHswZYep4aI1kgyb7k6v' );
define( 'AUTH_SALT',        'pjVYQ9FEeqvcFYFVaWtC1keu7mGrqs5WhgYL4XanCXworuoYnM8zt1Lz8QYSOFBf' );
define( 'SECURE_AUTH_SALT', 'C3CE2yCA7nH7wjqwYsjZkoXAO2gyF8RjPQMrHTdq2gZeCrQR2MLqOc5nRDO3LFKy' );
define( 'LOGGED_IN_SALT',   'PLjkdXzwYkU1oDc7MZanDrFGvGRFVMEGnqB7kPfsrAs4NphLFMqiaoncBpEdIGTQ' );
define( 'NONCE_SALT',       '1EFW1IGfMCIiuKK487rnOCNV3dFdJeMkwxdfzO7oQxojyBRxnVqFCeZE7KSBYYEv' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
