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
define('DB_NAME', 'dev');

/** MySQL database username */
define('DB_USER', 'dev');

/** MySQL database password */
define('DB_PASSWORD', 'dev');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '6kQYDdMPu} H;Ex{axg)`9iQ!_^EISs]U15*<@7r@w%^^`+5ve^_cEgqpg~eOk#l');
define('SECURE_AUTH_KEY',  'X}nLLYx{i(_$PBB#z uL}}Z%p= jbZD~<[B@[<<bQJUjLGJ^YGV$<FZY}|p%3YC0');
define('LOGGED_IN_KEY',    'Kb95d=R}AOmgPBiVqp2Nei)=*HIxI.(9U%@U&^ew3mh.m%:Cd!MRSj{Kb4a}q:/d');
define('NONCE_KEY',        'hu;`/0`(DY{W_PeS0HIuo<n.hLL_s=[w_EO-H%g&*J1]_TaK1ohzA%Y87*_S:c# ');
define('AUTH_SALT',        'mJ3)[PWg`m(fDc.jbHiEP*|P%U/tp2/uc%gmIzN#0m,ZZPEy8h^.c7K[K(wq{(O6');
define('SECURE_AUTH_SALT', 'W19~R~b#,>a>V0u+9LO^vYRL8$HC>EWSZKA`@=N5Z|ck8o@6*uX=^l%QI<,eX;5g');
define('LOGGED_IN_SALT',   '5hJs.{6e1$CLzQ:~shWHzoz0c]Tmzy[M_,}DJb_=B6|DP@:e~oEl@ig HDf4HLjV');
define('NONCE_SALT',       'YXy/`r);#G35w57wk:_@2N:r>dDsu`=4?5dB)(vtptOOu3ISmCayQzB-4Zr;e}yX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ks23_';

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

