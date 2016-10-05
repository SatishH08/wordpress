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
define('DB_NAME', 'target_opentext_training');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Target@1234');

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
define('AUTH_KEY',         'm9=@Px7e5SgLS>n]>BJ]1%idAzT}D~mf!~qoNtriM,vDBACz{uT+tYYzv+d/7Rj8');
define('SECURE_AUTH_KEY',  '^.Cb{fr?-NHW#/B8jpy[WuozBzBb$:ppY{foMTKyr]<gkjt8Uc9!|6J3C+~ubTX:');
define('LOGGED_IN_KEY',    '1fFlm5_NV:5_~ o<+_JHVT%wvB-Q*bYsI&ko)?D0PUtb.6]Qf}S23rLDeQ)oz|_T');
define('NONCE_KEY',        ']g;wiZgr2MI&o6!L2rFK3Ke}|$P$wSk :T=dW^0|EVtrt7iXeAism$?N1[yJFm)%');
define('AUTH_SALT',        'x>E??i&`?)T>Cij#(E,9k!<<B@>@$,3L8($Ild6)0y@d2nEb2RkU5ur5#rK^F6T~');
define('SECURE_AUTH_SALT', '^7eFpbYpv5uUKiKJVB$~O#6D[=>vc=SC$Rp=_)K5FOjn0(*AV*oWCIb]luF=$9y~');
define('LOGGED_IN_SALT',   'V|r;}oyU],9L{bmA.MOm74yn2U8=@`lJBsGN]RGp(I5GiO+1^bt+C5r0EDV8AtB&');
define('NONCE_SALT',       'ma3.x2yi`b^b*PkR?n~Cx>&bn 2W.fC[kSb[4?;eSOY_,Q.<krUG&IeLUIxC>A;E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ot_';

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
