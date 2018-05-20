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
define('DB_NAME', getenv('MYSQL_DATABASE') ?: 'coolmat');

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USER') ?:  'root');

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD') ?:  'root');

/** MySQL hostname */
define('DB_HOST',  getenv('MYSQL_HOST') ?:  'localhost');

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
define('AUTH_KEY', getenv('AUTH_KEY') ?: '#$7=/H7<*PrSo~?VnWzTk~^0Ffalsk7|z eZC,q(~{8^k9doX%q<GI[wK_M|U?bo');
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY') ?:' <r^Rd)mRR5<$|FEJ!)v>v-s1@rf1)ZE.x=7VkK6zS4Bca?xV8v[xhzr3g/9zA:9');
define('LOGGED_IN_KEY',  getenv('LOGGED_IN_KEY') ?:' 0Wi:b5_H]hB%$>AE4T8EAPa#h0D*xCVq(y;5TJeg} {3]/|A=g)ul-lX$`}s.i_');
define('NONCE_KEY',  getenv('NONCE_KEY') ?:'b1~6<S6-J2YhMz<XZ/K`2LlPxM`Lu/ol%fTYAi_l$}D_(O}QxQyX}m![peFISag}');
define('AUTH_SALT',  getenv('AUTH_SALT') ?:'W)Xjlf,?vt*1sFa{fXJC?]!$(!o6@^o1LwkJ-Pvrhtw$y!vKg%,++Gu(+90`=pnt');
define('SECURE_AUTH_SALT',  getenv('SECURE_AUTH_SALT') ?:'NMK@e;Hg:XfZ5}yXYpa$}L2Ugzw_S#i#9EM$<{}%b[Fe-zm;.D|^&30.x%WI4$SA');
define('LOGGED_IN_SALT',  getenv('LOGGED_IN_SALT') ?:'Jf/v-kf!%$o4NH4^KT <]Fy_ix+-cXqkbUy!00ieo<RF&  Sh`W|iq<TU4LGtAEF');
define('NONCE_SALT',  getenv('NONCE_SALT') ?: 'pdR-$RH(CXLDkWxnBMq_Fqb/hQEM5C)5kiS@}4T*FX|-%ON[5 pk$yYNee:)W+AG');

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
