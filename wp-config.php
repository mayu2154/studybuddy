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
define( 'DB_NAME', 'manu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'y2`]ES|D##H[woKZqjxfULN@#E7`+[mn}s!3!MVx>N8GWLvXk{nlW5x^xwO3Y4)Y' );
define( 'SECURE_AUTH_KEY',  'N&t[c18aCE~4_I8/JtutH_vDFU!gbu5jQ>8qve:%9<nBi(~LX`~,$MD)Ee>7.F=f' );
define( 'LOGGED_IN_KEY',    'a$k:%K8cU.32VZkB~]gt4~Tp3*H9^ji ieKS{HPYfSr`gId;ZoI 9c,x 4JoyySR' );
define( 'NONCE_KEY',        '4WOJjz.<Rp5WOq20-e9&H|xXw+c[.:f*J.%]`yq2 tWoMT1c~~}oiP]%oXRIZY!7' );
define( 'AUTH_SALT',        '32+u7QIc+{J(/t;rQ~e|`agb9A-~>_aD?lD*ezzZ/(F,:Mx-^dHq]2bO$(S1D?Z*' );
define( 'SECURE_AUTH_SALT', 'X4Aq{HLL=LA;;6{ax>dL8{r8^yz{ilo.}Qxhz`Zm}[T!g>=jD6LT!7TZU17R[-=(' );
define( 'LOGGED_IN_SALT',   'ss5MuE(pY]N{]*9-5juoz@Cg>[LW0N1uP]k-}i#_HxTa.V$ )~9fBVwbm]@FZ]Lg' );
define( 'NONCE_SALT',       'r=ZM*ky(o^Y*^[!|k!7xErnAQrH`h>OIcM0?R 4tG$[B+pb|<pD]Jx- wiW?Zm#r' );

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
