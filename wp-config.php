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
define('AUTH_KEY',         'ChY7wcB9aXeW8Ti+SqmZdJXgUuEb3bk8AxCIV5topEAJW/PE+VqBcb/PUthpCOKruSy3KmJz8xk+Lt4AeiEewg==');
define('SECURE_AUTH_KEY',  'p2nCvFCUNYU1MTK5WOfSqUznGCm2AyqVqwfdSw6lNuuxHQOjuEm2aFmyJnttmwdXh/4fmgoW2XsSrEnMiq+5tg==');
define('LOGGED_IN_KEY',    'oXPAg9Oi0su9R2fNfddoehaExvT3FVb5BhCoprYvBqZn/DuX+TcsMYzVHL7DC0kaFnkaFNQzJFUDxqveaUJEYw==');
define('NONCE_KEY',        'nj72dM+Il/QvymLzaMOS0EpgM4NhAh7kQEfj21/xIXdQw+PQabJ8htIq0ZG2yfi4N9bE/GQep8f1bDNXaW8PLw==');
define('AUTH_SALT',        'FrMjW6COWUo3Z5y2QAs7mmMG8lXhZjSZpJxhYB1tdUtZeBJcEUc+XAdgfPmM4Tf7rSic1xrcktXVmolOQ3kHLA==');
define('SECURE_AUTH_SALT', 'mXWUygInX/8XLSKAhW4kI7+4ygJdmFF0SKQqjTVcUpBm3KBm+MoEQjVrCbYpU69KdqSD35RK8/rpy+uQxpzdnw==');
define('LOGGED_IN_SALT',   'qTEKVcUDzhexdSkYAYUjbdcIkZ/hhpcnpq+0/D/0lfOvStPyudMBvhz4nN5WAn0IeCOd7sWqJ9lGewWW0z/AZw==');
define('NONCE_SALT',       'bx7qt4/JevpApdntCzyK4FOo6n54r/c1AD+nJ+ytt1AQBKq+1SSeqBSWcxHbB+vQnkMrkQ/2z33jPMUdEkietg==');

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
