<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pizza_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^!!Ok/TmxM?ZM),4wi=?dE?:*0*k,YWzb=Xy,7]KHWZ/-sIQ?Cr0<h-6?B#er}w?' );
define( 'SECURE_AUTH_KEY',  '?j]KX6f^.4|N$,*.n>H8AKMM*OeC8QOSn77AjHJES5*,Z(J2YuaGj.0{N&g>v]UR' );
define( 'LOGGED_IN_KEY',    'Fgk_1<~44^$%3<3C?3qR1Z2yFX,Aw{1)12c}QP`S`*WUJzhz&^CU`Mcc2~O}nSgV' );
define( 'NONCE_KEY',        'R^#Tx@<[nq avo^O.o>[^5@&:W}!;;}0aPR[->8<j*p6F~ 7.(hg# ?-Oial>lRY' );
define( 'AUTH_SALT',        ';bPcLQ=MK/%ja<BF,-)##)~T4}GTHtV-`6nz2a4sf5A 9 <q/zbOYO>!;X&#Velt' );
define( 'SECURE_AUTH_SALT', 'K7F=xSr@pT/&{.F6#?6]NC4}6SVyXn!gD)&l1_oPCP{|@q1$.0F32t}o$b,hvBPk' );
define( 'LOGGED_IN_SALT',   'whvusl|D{!&bVtU#Japr;-z8w O_}4+e!Tw:KVe^Ja{2-oZ.N@o8B@!|ga;Z{@c%' );
define( 'NONCE_SALT',       'lY4qI/<}L %FIHg(>3dmXM2jG7uwY-NSN $&9qV%%[g3 R2+X#h]GwR[I*DiITqz' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
