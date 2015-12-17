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
define('DB_NAME', 'tba3DBzvc0t');

/** MySQL database username */
define('DB_USER', 'tba3DBzvc0t');

/** MySQL database password */
define('DB_PASSWORD', 'ooZLcRD1I7');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'd|oV4pS5[sSC1_hV54>rU3$rU7$jM!kC}!gVF,vkJM{$qPEuiT2<yX7$rQB^fUE');
define('SECURE_AUTH_KEY',  'ApTH#+aP9:!hRG0wkJ4[zZN~pdC1_hVG|-ZK8}@rQF,zYI7$nb}!gRF|zYN7@rQPE');
define('LOGGED_IN_KEY',    'q3*iL9_lO1-oR4@h1-dH5~hK[sWN0,oR4@cF>rG[sV8!kZC|ofI<qT7^jMA.YB^j');
define('NONCE_KEY',        '8nQF,zj4[odN:!sRF0vkJI7<nbA^fQE.yi3>nYM}^fUF,yjXL6+]xI2<mbA{*eTE');
define('AUTH_SALT',        'xZ9:sdS1!wVG4xWH5#laK]~pOD:!rgF0,vUJ4zkY7-oZ8[@dNC}sgF0PA*uTE2.iX');
define('SECURE_AUTH_SALT', 'k|oR|odG[sV4@sVM}vYMuXBuX}!kN}vYM0zYmPD#pS5+eH]eT6*eH]tXA;|pS5~');
define('LOGGED_IN_SALT',   '~OC!wgG4|kZJ-lZ9[~pOC:shR10,jUJ3zjYJ>$nM}scR0!vVF4zkYM6{qbP*ufE;');
define('NONCE_SALT',       '7rQE^RF,zkJrQF0vuiI2<yXL6+maA]rQA$qQA^qPE._xWL5-pO9:tdS1tiH2#x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
