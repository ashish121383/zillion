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
define( 'DB_NAME', 'zillion_aplite' );

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

define('FS_METHOD', 'direct');

define( 'WPCF7_AUTOP', false ); 

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xyH@uAAKeUZhC_jhhIPBLgMhueo6uGWVsIu,).[[8G:tW4Kr.3uA,(Z?=$XLFO&H' );
define( 'SECURE_AUTH_KEY',  '@`Dcb`;AWABUH9V5(a:Cgm#uoex(1MzPvDmT@2u]K,=**UPVD:b/76uv[X~ @!<!' );
define( 'LOGGED_IN_KEY',    '- +Z@*;`EO/9C:>XUZ(,5<4W/<,s&uSp<=Uak=8+ev*i-!FTGI)1iOdhg|TG6_w.' );
define( 'NONCE_KEY',        'C4W0Vn]z(Nn7:c)0tp7u|n;p#3tA:%y!%zhK$6qkYOSzB%W:0J^f6<^>0ldEG`E5' );
define( 'AUTH_SALT',        '?<RKG+3mQv% g)7t|uLnn:,{8-p/sd3Ickl&*oWmE i?v1!?~~~?=y.][}>Vde5H' );
define( 'SECURE_AUTH_SALT', 'lVAF@v;.,~<6!;svpU:K]V5o<MqK(<37aMl$e7b*@!.kkjJ|UzrW[]O[+Q#n{Bx=' );
define( 'LOGGED_IN_SALT',   '[XB/mw3YOS`H_Me hCy@MbZOl|bBTrWS{1)u1=DPlJYB`|@~rj>~g_WQD$9p<alO' );
define( 'NONCE_SALT',       'J#U^{S lKh>ZO/7m]IQaI]S^ZOznw:R]S[XD{SLF5V>E%C/k/5qx1u1w$d8g=I6b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zillion_';

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
