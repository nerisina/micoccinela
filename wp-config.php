<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'micoccinela');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '4x*Q%U*1i/V#bS+|C]8!d<*org:}DN>8,P6xdMaN9N:Psf^nzl9C5hB(O9$O9]2K');
define('SECURE_AUTH_KEY',  'S<+NMp##6LMw7A|Dd#t|juxB<5V^W_|d [}V@U+.ZpwU,p^=S-*o*&9P%ybw0V>W');
define('LOGGED_IN_KEY',    'YB*)cXex5[odeL#E|yB7dU*=|l|Ya+DhH[~R=/Hn26 xJqcdRpBCt<L(m[kN%/CG');
define('NONCE_KEY',        'yR/ XhWk%)L,TBckqCetH_?h/@{o_pz.]VqG+*WY-V<5yN]9$5CY1^-m~%K-HV5.');
define('AUTH_SALT',        'SF)jHuGpP}%zhX|?VdX#$<R`fn~O#-6F:O^:2SFM@uYx+._ET/8nN2;n/}uu-D_M');
define('SECURE_AUTH_SALT', 'MyD|NT[g#viowV)q)xZ/dfMxpZutFF}D[xnDe(3wm,h38O3.t_E&+gwL|97)s|3+');
define('LOGGED_IN_SALT',   '`u+ldVB[#gMy+sbMr- f-$w/Y$F?.mAz68_0(aVfsg!2*IHAw-Ap-wN@iR3d-Q)3');
define('NONCE_SALT',       'q}?a*(>Rt|n`^h)yA2tZS$Hz/Kkz5`9Q>G7+CfX&9`H)+97aV^d&[fyO$Kkj,Q3y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mico_';

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
