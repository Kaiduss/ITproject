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
define( 'DB_NAME', 'ITproject_db' );

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
define( 'AUTH_KEY',         '*9tY|T2xZ3;R5U_kB<pPfZyPdc0Y-d*`Bh[iJy+}t^$dT5]w.ydw}o;wqp9D7EXW' );
define( 'SECURE_AUTH_KEY',  'H/&80J-M LqJ9`-y#LFsf@TJnbeJ4^ MW{5()a#5&f{Al*bIJO|jK.=(C{k<]V]Y' );
define( 'LOGGED_IN_KEY',    'D_lR:yXJ@TMLndKtea]Pk~6`>#1],R Jn5~B3lj<0nZUo/GOG0A5{#24_#EwK!9b' );
define( 'NONCE_KEY',        'i0no@L),Ss.%+[vd@%qBUp$qHnr6}Q5xCRGf4~,#~R>lYFqO%%!Z(n|qbeI&)~K*' );
define( 'AUTH_SALT',        ')PVGC[rZ7{PGf`~+NV!Ej2F97b77Cw(kJg;JF1^Qf=37vf6<F,^^716#{V!B*2IT' );
define( 'SECURE_AUTH_SALT', '2{/&@,zgSib-sz[u-fb&#4b;OKP,Z,uKxZ7X{{M}C!=_22sN11%%Au=>,nn6d8u>' );
define( 'LOGGED_IN_SALT',   'VaMn:Kh*6X_fMqh8g]BJhV+C(~;rik28X:wa912Tf;{ka^p*Tn!$G;>;e35-46sI' );
define( 'NONCE_SALT',       '3U;z8$>H|6dqjC<X{3W3H@LoEcKwgN$>Y3D(&!(^)U}1i)Z kr|Y7)gsm<}1>>t=' );

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
