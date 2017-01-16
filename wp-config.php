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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'RFLgso11');

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
define('AUTH_KEY',         'CFG5=EjC|-Y0Lm|&m9UjWA-q,K2dZ/]%z bK}Y%S+3rk&| p)%q#-+Lcx)> m}}O');
define('SECURE_AUTH_KEY',  'O{|~UG_V7<*:{,VvXbm+7<03hZJzLs +;zi@tZ,fp-q0%}AXJS5j C4J[n-8A_ef');
define('LOGGED_IN_KEY',    '6%u.<P?$k7D8uwU5Z:oSR.eH*vhd%S{]o7@@.-:|Uoyc5!n|8T|U9Hmz!6-2Jg+J');
define('NONCE_KEY',        '$j;_$iz_lH.Sxf1=;oXWEp^(fG&;ylS>v)bd#%-:)n^FC0GFfa&?-^8(3Wi=dt;8');
define('AUTH_SALT',        'V[WC*QZN3Wnv$!Vq@:5XoC?iI],_)@/QHp^rHBGzJc9gTU-FNf5 #rybdtIh+Sl0');
define('SECURE_AUTH_SALT', 'x2toRR)5ge7J0>yy omHTKLIJV1m6P)VN#dF8A:Wb*9(bC`8OUYN,c6?qy)c#g.H');
define('LOGGED_IN_SALT',   '2,(@GO*O^kj+P9*o)!IZfSwFZ?{<=^r!M00&T7Bt6AUp`|8(LpQ)6anp![)d{Z<_');
define('NONCE_SALT',       'Q-./fo<WS2+k>4YyX3K_RXb_/|m&+7Py9U6JDApf tdzD59;<0])[AB6ObUE<vPC');
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

if(is_admin()) {add_filter('filesystem_method', create_function('$a', 'return "direct";' ));define( 'FS_CHMOD_DIR', 0751 );}  
