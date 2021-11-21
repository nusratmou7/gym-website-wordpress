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
define( 'DB_NAME', 'word3' );

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
define( 'AUTH_KEY',         ']deqq12-4BW?)CD-GuiaY7<W:3OwjSddl%$d}@8y@lELbw&;k9JRVr84$AX=>OSE' );
define( 'SECURE_AUTH_KEY',  'g*p(By7]l8dh~W(BLR5bqkN|#[hGCR7#+(|QO ,V|@Y0)q95@<{FxIFVjC0k[ucm' );
define( 'LOGGED_IN_KEY',    'WiwF&@_zz4*%+Svbwa/!C2PUHmqS7z;|yO$nK1#h*#!vk,Mm~+f7d*GDUUoXZATI' );
define( 'NONCE_KEY',        'yHC>`!CI#Ss9Y3C&wr&?yeE;|%N+O6X/M[Fk/04}b$H<cOk9HS#I08Wx2@q&ya.f' );
define( 'AUTH_SALT',        '1gU04l9c$+sX?V/U/8!E@+JubUL]uq>4gsQ-&rd8,@6K9v?m|%?cUU}v^aKr}o0e' );
define( 'SECURE_AUTH_SALT', 'ezu/;w>;x~XN)H&Gi:GE9fCZInW>eOXX{!KHk9$8BiIOfNkd)D{HdgjWY9twDM~B' );
define( 'LOGGED_IN_SALT',   'G&=ds.eM/%&Nl{2{#Ze@kwI9+?;AwA}(_!oSDR+WOrw`A;=sKEnz~pU4_I_|(.An' );
define( 'NONCE_SALT',       'w8fk7ayPT$c#]o=!NI/VCj%6JCohg{!?Q5v|!Rx=PS5v8JgCj3|H`Zgs4IzoVVRj' );

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
