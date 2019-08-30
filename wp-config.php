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
define( 'DB_NAME', 'projects_wordpress_greenplanet' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#mXpUO@(CX3-D+j1chr.fOUj2pycod~EnRMmQ^LKd$H6xBLAaasjtI[(i#-x?A)<' );
define( 'SECURE_AUTH_KEY',  'Qs2kzvlvF>t<us~d4t<U_~O+`m?;!Gf|MhlP3!RU)W>_`$)YG[fW6WeMHrn]W2%4' );
define( 'LOGGED_IN_KEY',    '#QXNoQ~>:LZq>?sE^LPxV)u%+z6OzF~O_P.mh|QF fdj?k_.;Xva x(Xd6C::Q&3' );
define( 'NONCE_KEY',        'G:=!>jZ.?9OP<pa;xC0`,[nBNcQ^^lf7=6_L{W~v?(/29M*~ez5Em!N~OjSbWfbM' );
define( 'AUTH_SALT',        'mK/-Lu(o[Wy:oC!Z[WHB]_0auUAK]o&RP*Bh!2H.3)X_nM]@XLA^x=v}c[e1i+,u' );
define( 'SECURE_AUTH_SALT', '+5a/@JbJ[vW@E!Z4*h}s/vefR*zjUTU=H~cFa<r2C%eQE|M:,p2&pJh=y=U5)~;o' );
define( 'LOGGED_IN_SALT',   'v!C^zd1#]jz)6p2 S&QxhC~My0_lKYnnt%FX<oYQm9c3(SM9AN80`U^W~e}a%XIx' );
define( 'NONCE_SALT',       'V/#8>RfH+7v<D^B`o=@wj=^`sYzq6sBV6win,GlpH+l}y]u5*tWa*Q7@b*On.ZjF' );

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
