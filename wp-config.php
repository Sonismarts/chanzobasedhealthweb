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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/dh_3j66v9/chanzobasedhealth.org/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'chanzobasedhealth_org');

/** MySQL database username */
define('DB_USER', 'chanzobasedhealt');

/** MySQL database password */
define('DB_PASSWORD', '7mCR8URX');

/** MySQL hostname */
define('DB_HOST', 'mysql.chanzobasedhealth.org');

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
define('AUTH_KEY',         'a2yFR_hO|98!5X6FQ8p(#6?k+M!zwO#G87EI1K6;S0#nUM!03jd(/D+Hijq&i*Fm');
define('SECURE_AUTH_KEY',  'J6Ap$YhAB0Kt?_Ul?U3owJdw(`biNVTZ";z)udlA|27^/B#xu&9Py2+:GV#:M!?j');
define('LOGGED_IN_KEY',    'Y92L1RseQE#7?(@6&J!~G/WouaLz_ZF(UcQveNeDoEzq@:vMeXZsuPk_chyh5~ko');
define('NONCE_KEY',        '#i^RPEWyZ6$POk~_qdF"cMae&7bHp7_WD)Qj*PbSvT%e`4VDa+b%S@MY$PSS`FlT');
define('AUTH_SALT',        '(tfa)g$S@vOFnh(tq:Trg@A|cCqoTg+X`s%c`M|#K6oN`Zy(iLP7^Ghl!oWcizu:');
define('SECURE_AUTH_SALT', 'oR/JNi@L!&"D$k+6;~cRBYl0;L|DeprMEPviSHB*C"+IGAtxlS9UMo!;MfBEU*Eu');
define('LOGGED_IN_SALT',   'A/bDa(K!5)OeHH_4qRq_g@vv#5TFDYL19UIUyuh%CclbbiA5t0um?qnZf0o$d$/3');
define('NONCE_SALT',       'xAt$wV)5iH+SW!saPu0(GxGHs~)Vb`WGtYNkJ/(68YrL11yM5rx57DSO+gm+RM2v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_nzt2hw_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (isset($_SERVER['HTTP_HOST']) && preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
        define('JETPACK_STAGING_MODE', true);
}

define( 'WP_MEMORY_LIMIT', '128M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
