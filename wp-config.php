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
define( 'DB_NAME', 'TvSeries-Movie' );

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
define( 'AUTH_KEY',         'GkBslI=J6yxW@]5eA6>#;l~IE DFT^2uf-X`|{*b3rm6yg3>U+&ib;QtG4WKf]jF' );
define( 'SECURE_AUTH_KEY',  '#J]c5tjYL^$5)u+Hljb5a/P%l!Yc9b^Pva?LbFU ZV^E!YXXdZ^%$NO=FF.YY68f' );
define( 'LOGGED_IN_KEY',    'Zs>Q-c;f`~[XPMHbj*=t5$4ZK&q&E2<@*|#eS9wnb3c[iWYX>gvCCjq0GRq9#co5' );
define( 'NONCE_KEY',        '5*2(_@#)Zl7E]9R<,jeX ?uPD-^<KA/vco+JW,/J`l(L2p(/U{TyO(=NDSk]u#z=' );
define( 'AUTH_SALT',        '*C(Z Lgoy5yOy0YWfj~kZF]jqP3)^>m-u>K]qW?D4?e2o^M5^U &Pi}uslH$dgA,' );
define( 'SECURE_AUTH_SALT', '5 W2OgNL8-l?;&p-S7od.3Z{jA_:zYr_$w0`PlR:oF.A-Bp8o8=YL4;n!@vE.3(s' );
define( 'LOGGED_IN_SALT',   'PlL;[C}c;h)>8~_*WKeMnh.zG9FjRCicT]7#L(U%e@6s-+Ha 3:u=; igh:tQv1:' );
define( 'NONCE_SALT',       'ru#d`K[:#p[|ugd--0,B)7/o_o?pYJ+C5z!w)@#;t*<,WBbUJk5@&};hF~2ZWASR' );

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
