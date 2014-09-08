<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+|42.:+BLma_-:F8d:-n3`0[8BG<]:!5(:28kC89cMMbqWc*M--uJ&z|!~^_P%Gi');
define('SECURE_AUTH_KEY',  'DGs$J@tm3yr@kA2Bffa!!i9BQj>-Gd}gq)} s59{rWE;(9nSV&uNTx{XOS]EjB@o');
define('LOGGED_IN_KEY',    '-oVx=1/;[$U`!WG}ZPTU1//@#iEr7k FAXca~#@WmgjzXuRsM FJv+XR1c.nGunV');
define('NONCE_KEY',        'lpPx.Qd$YI0N|n(]KG<Lv?Fr<NZW-jN8@5;0#dT.ee!wt67BgDuIjp_+uE7_CI&`');
define('AUTH_SALT',        'eo!VlLMXu&i>MT3Y-%nIA0M$Gu`SjpBH*+ pV]j/CG18wW8QHnai1@x34(#YI kI');
define('SECURE_AUTH_SALT', 'i=Oap$p1i :EUO@Gp7R[Fgr&mcWtMz0ss;=ReVC9+HGQ/{LxDj:AS/I> 9~bK]x1');
define('LOGGED_IN_SALT',   '2T-,xg[#1J^^w?JK(Ix5uW5L>F*EPy!d$A>5c98lh>5lXkmlBg}|I!p;n3#!~ZNc');
define('NONCE_SALT',       '9]]_2!bwjj!*834:Rz-WYvc{n+`F+cr-+H^`VlZe.=#ku.lr<mXbesT8Pq[m]NHN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
