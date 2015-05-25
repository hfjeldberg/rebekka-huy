<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%}tF,}(|iZ]5;}YRn!-O![+{Y|G!?=~a=s].:a)|-Rb5@Iz-FiwJ>0!i(h%>k3&^');
define('SECURE_AUTH_KEY',  ':Qi(Yk?T^pupx0lCP[-K22pCc2?sq`r!A{2~0R`k&Oy`~>F7hFdxpr<ESoVKbfMw');
define('LOGGED_IN_KEY',    'kHY7t^_-ZXLc,4X1U_-&aA=n(ji(eo[Bc-+%3+:-hI/6MFzNO#,[H8Fr(jeHEKq6');
define('NONCE_KEY',        'L_]r2`8f*dZ?G?K.?GqaSbSLCyvNS;Rw|vS4x.`j[%_=Qm<sNAFBOyB$ +jpA7X2');
define('AUTH_SALT',        '4|B,%~wdagJhjq~yP7BH(&UB9MC!=R-wNZZ-HAU-JhJ2!pDg,T_^d`C{-|9]DH(T');
define('SECURE_AUTH_SALT', '@X*=u<~6<9559^|VjP`fGPDqvn,vFT0oK_!T]FjR*iTP:Y/l OeDKZU4FwRFj9}p');
define('LOGGED_IN_SALT',   '!|HzM[Cy?mmSdbFUrFYe3&#||8.}O2Wh!oMa,+,*#^rg<Zx~$A:-NAWL,u3:gg&F');
define('NONCE_SALT',       'OqdcgMEuKGFWOi[*=_ 5fE^yTQ-A28Asft?Fc6,-.deY`t|Ue`I,-Z|}[Te)hC^n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rh_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
