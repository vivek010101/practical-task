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
define( 'DB_NAME', 'practical-task' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',[r0-pbkib+&$gpm%yoDQK<k}I20M_DLV^QYiU-Q/C~xBv:z%{DfGAHZJ`U ).9H' );
define( 'SECURE_AUTH_KEY',  'Rik(F-$PeS3DwCGmEEu+hyy)C;kLTDp/(`M?rGEN;)Z1SHcdDAN6]|BQZ,PjU>5o' );
define( 'LOGGED_IN_KEY',    '}MuzZ~SDYCwZ:c!HBiqhOVmkL2_lfN4l2V$V{Q;:B%5:CfB#FBT(6`KrA`t<2Hx8' );
define( 'NONCE_KEY',        '`V(l;K+epa&h@6OUw]h.lV+>!kc5:Va;j|k%~4C&ec7dV$J[O^:)2Qe_{ +B,nhW' );
define( 'AUTH_SALT',        'JW!5eTp <m (Oo1D~P;}+MDm]Uc9B|1:mkp,l!0o2r-(a >p5|5uZ?yA6l}X:g~{' );
define( 'SECURE_AUTH_SALT', 'Hos3mNBV6HWjbYVzU:::HxK1_i(I tDqM[7c2S7!F4#^6%DTNTi|hZ|Xx7f;:b ^' );
define( 'LOGGED_IN_SALT',   'zEG[N26 oFHv0;+pp>@m3;dH^GFe~-`nP`wU)3+FdsD,AY7 Z8A<lD&&09{EzELO' );
define( 'NONCE_SALT',       'j26GORY9{Y%&A(22=[`R+J- EWevheC:Wx]* 81jpN9E$lAAons>c({k|`:Rn)>9' );

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
