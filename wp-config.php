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
define( 'DB_NAME', 'labs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'SMTP_USER',   'maxime.herbiet@hotmail.com' );    // Username to use for SMTP authentication
define( 'SMTP_PASS',   'Totoro' );       // Password to use for SMTP authentication
define( 'SMTP_HOST',   'smtp.live.com' );    // The hostname of the mail server
define( 'SMTP_FROM',   'maxime.herbiet@hotmail.com' ); // SMTP From email address
define( 'SMTP_NAME',   'The Labs' );    // SMTP From name
define( 'SMTP_PORT',   '587' );                  // SMTP port number - likely to be 25, 465 or 587
define( 'SMTP_SECURE', 'tls' );                 // Encryption system to use - ssl or tls
define( 'SMTP_AUTH',    true );                 // Use SMTP authentication (true|false)
define( 'SMTP_DEBUG',   0 );                    // for debugging purposes only set to 1 or 2

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uqNL0gJ,DB%7W@$h[/m&u~M,[L)`1/N;<:^fN$$z}{7kfE0/uFP!9-%_jL,}l}->' );
define( 'SECURE_AUTH_KEY',  'tzh#VrJsA5fB|R2B|YyRE-}W`[4W%FKtmY>!E}kBP.%-Ca<&AnoSS`^[4`| E,H>' );
define( 'LOGGED_IN_KEY',    '}(=vDv@M#BrLa3>DAu?S#;++U=YOF_-E_`%@(:ju^XQ|X.vCh{i1V<tFyi;WZfc5' );
define( 'NONCE_KEY',        '!3.?3]04[~wjkqP!+nj35i,_h@=wNFh-V_)3lLO-u7f#vW`m,kKY:t{?@b,#*z7d' );
define( 'AUTH_SALT',        'bZJKYweXw(0Y/o%M/ibyluKD!UUXFWK834)b@YOCB(Rf g(/!6*.sT!-:^,u&35q' );
define( 'SECURE_AUTH_SALT', 'Lw7-BNsc%Qw1|nq7qE_9`L(Y]M2ld$!o;hyI&N(O0rTA3H={A]Q$E}4^%}dWKl:f' );
define( 'LOGGED_IN_SALT',   '|G;B*,txoi9_]rI9}:3aiU60sn=/%3ZXp)]*-xquy]D%nOgU9KgwJ&PVrNT|v`,;' );
define( 'NONCE_SALT',       '=yn!4;WW?l>tU%msrY 3urSxxlx)--HLI5NH=2]/F$|^hf]XF$&x;={Xl&;-sz/S' );

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
