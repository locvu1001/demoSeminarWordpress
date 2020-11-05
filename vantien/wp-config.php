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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '251020' );

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
define( 'AUTH_KEY',         '(a~+P2iVU$_SicFK-xpp|{& VhbvFO_5h.(,dS^1qg0o6%DIY/~jk}0)^S-V]ku[' );
define( 'SECURE_AUTH_KEY',  '+X;K:K|c8tF13p[ZZlyQ&Gy9G*a)@zcwd^98&vsv9P1[LfTOv{5hd[D:cfVx~&&D' );
define( 'LOGGED_IN_KEY',    ' i_2VONxo?0CQK%avAm.cKS}d$|s_#Qz3l1>>4Ulmqwib=ED@%3O]HAC ^T+|tr|' );
define( 'NONCE_KEY',        'a7_E*+kn4bQE| 6og`&c).Dn!%x$dgK1sU=b5M7_E;t7Tj9zCV(R{AUoZ>rVFYkM' );
define( 'AUTH_SALT',        'Z<`S7Iz-zntJB-7#x4kYI9 x>~GDO:NzfGti$52eQ.HL4SY^XppR830|9`4^tEm2' );
define( 'SECURE_AUTH_SALT', 'I2r;_0Svva3bTj0(d)%vtYozl7JVE4c1k<2TX3g=;XjMeX+l>G,$t_`Jg6m>%U$U' );
define( 'LOGGED_IN_SALT',   'll#vqa888`Jfj)ZD[p96g|(W@ kE(~sT]m8.v#EW8P>?JJeoWex$1.wY)H2v#)ZO' );
define( 'NONCE_SALT',       '4~ fN$IySJ.m&e|.ZZfvK;1{v8S`|KjeJ!8a~!c<AnltdB#5LYM5t6}+kaUv~-q1' );

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
