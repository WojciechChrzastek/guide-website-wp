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
define( 'DB_NAME', 'guide-wp' );

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
define( 'AUTH_KEY',         'TkhnfVjuS]rspM6>PGxwJZoibsyfi@A9;^#3Ym]AXPOcBA_Hpg>[(CLaC01?@M:)' );
define( 'SECURE_AUTH_KEY',  'I-M)p1$ `yOqW?V|dKnVCI:no1wHvi02kqE/&?^(}o{2V|Q5he 8QQ_#WP_hGqzJ' );
define( 'LOGGED_IN_KEY',    ' vH%gk/^|E`*tbFFw0BCh4Y6$1.n$|.fv<SLH9$/;V8HCY6%>+9f_Jb5v]E_C#q*' );
define( 'NONCE_KEY',        'rC8zyZznFvL[q?2FfGuy|LEOU~r|LF<5c/F4e(COq)O?~r*2<b$jGe^(qI`c^-@.' );
define( 'AUTH_SALT',        ')bi!z2Zo;2{fd/f:TBdId:;pPf=AH2gt@t$o6L^T`z)pv.C^K}=rz@m>I~/p>v%|' );
define( 'SECURE_AUTH_SALT', 'Il^u[-?&^Q,V^P:RgW 1mh9j8d^;#6_u/y#g@$ax!r$2B$+$ct<6Io#iV3:R<vVl' );
define( 'LOGGED_IN_SALT',   '|2g^znvgP^9_.~@m,]>7iDe_1,ZnR*Heb(_cP-k|V<X^ny|s)zkn@wc>45?^hoYV' );
define( 'NONCE_SALT',       'AanY-W(TE]@}.2G{,~m|HejPVMDJo;[L.4RKzD4-]ba2d|,Zx,sICrsW%9%>L=kL' );

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
