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
define( 'DB_NAME', 'goosehotel_db' );

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
define( 'AUTH_KEY',         'ud`klk65+iCk`.NBXnMju+=WEk|;p#$tB,?Pu*?b?x1 )dd<gm1=2J;v% (c %<@' );
define( 'SECURE_AUTH_KEY',  'eTlHCNzGr{[!,6M}R|4@AZyO>2-Q>@r&We)}8&D[tnwm*M[9<n[y,Q5GSmXf#]X*' );
define( 'LOGGED_IN_KEY',    '3<B7Q3U8![fx)cAbZh{#ZfWK~1dDZdh?E@@02H|-fzmGwyf8/:~*ZG^07@v6Z!F@' );
define( 'NONCE_KEY',        '`:_p,x~rVAtZf+T1>k(Q3t)Di&]vP68I~QlE)br?ia4B6|xqWxrkG;%MiY:s=nig' );
define( 'AUTH_SALT',        '$TG&H<-%g$aeGK.hEkaR/t)Vyx$?;9$EO^k<}q:dpw[ZDlU.[$T>]BBIJQ&aLPs:' );
define( 'SECURE_AUTH_SALT', 'r4ND]e6G!|NaM{[!bKQF3tqtgS5[-<pgQs%2kTD?81m](qliixo/K_h0j.N%U $d' );
define( 'LOGGED_IN_SALT',   'tF+-sBFFp+HT:[Tyx2nT6r:3KTQ2<YRMSSn# rh;9eJ!~:*er>eKrtqx.<uRRSGJ' );
define( 'NONCE_SALT',       'nNpk5+hSVS_^,&C!oC-n9/ilmn)fG~7cnY>$_ *T3BK@dTzdw:[F)k;F%q-e3k>Z' );

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
