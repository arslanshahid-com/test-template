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
define('DB_NAME', 'test-template');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+-F*,&j)K;Jw<8RQ *OE-DU~Y+.xI3Uvk)B/?t AA8Us*h}E/|wX<r5D*w]XiyU/');
define('SECURE_AUTH_KEY',  'lGE4Kl>t3GyiY6K-(~5?|>X@vYU:~K%wud.S$})y&(V.= 4qPuP@LNL1:gq}nyfC');
define('LOGGED_IN_KEY',    '*A-mNAvC)MGZppNZeAfN(JDjhS5QT[VJi3c`WK=x>2;Z:?@JWHxgCP0P?7I9i,jF');
define('NONCE_KEY',        'Ys@<k5^rxNx-Oh],C=c {j,w,RM4*[{YTP=}_GoY5h?7r6C]|fQ@%>>q~H~%f?B;');
define('AUTH_SALT',        '}<i7D:*8:3Wu6H4eMc>Sh5`Q@TCI5K`2p98~t^d|]BWYN2x|H#3%SrUHW2qSx/{#');
define('SECURE_AUTH_SALT', 'uL?B_^icDZt *!!?(0)VZR&#/[,nTg18G;V){v7BJk!af3^kgNK/mDtVg?DX27lH');
define('LOGGED_IN_SALT',   'U?2ufGL13(a#&D;Xt;%<N?XUy(`)q$}@H7+).^w:@l@OL<<t]Q04&^ QfWX1*r`&');
define('NONCE_SALT',       '1`W@`jAP`Zu6cC0iQ2tSE2KZHlN}SvmLV_sF[|W  4S.b](aa@Ix#P9`L5TV6T]<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
