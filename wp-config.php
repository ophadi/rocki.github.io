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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Q-C21b;hY%lJ+ x%$sh5^`1n_Fs,hk,pjCzq.HLdcZ.@]as2`lyYf>)}9fXcMHNG' );
define( 'SECURE_AUTH_KEY',  '@vwK0Yk@33gWiKmAYrt]YP(!{g.]w4GkrlPIJ`l1G0~m2wcrh@rPjTtv87$+ypwc' );
define( 'LOGGED_IN_KEY',    'c5MH.!mTX3Ne*g{ztJh<DM])ihK9){aS}ScSJOnip_I&khY@$)A j3TsO4h;Wq2s' );
define( 'NONCE_KEY',        ')[dIH:EKI4%:]qY03#w/?6&*!?`4~S%>.Z`*rt|W8j`hP#{,;eG>A!D7)ZCXb7$d' );
define( 'AUTH_SALT',        '=chdP,/[nj4SXz=RuM k^Qob$sS1(vp/VCPVrx5VIh_[.Pr%kT6:vZV^uw_9UJ6K' );
define( 'SECURE_AUTH_SALT', '{9?Du_)~7~+yhew5kZ`JNAi;SI}GBmQ/mGf 5`jMN-KEgEF?B~[h509pz&hfQ=m/' );
define( 'LOGGED_IN_SALT',   '(-8FHf?qI^?=*o:FDH8]Ks7D]]UvjHe,k%IL?<5ytEEgbeOOVPm2-+J!i?(TptLz' );
define( 'NONCE_SALT',       '<g;^GdyHpi7+R=pvm) mRgf5FJkRPd%q_7N4~+S]NW S0_oi^BXgKL3{B_/< oM]' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
