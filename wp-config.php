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
define('DB_NAME', 'davebrook');

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
define('AUTH_KEY',         '{]`+9+c6DJ^w:_+D^*^X-|YU.b|W}`nU).2.2QdSmeNDAz;1!wEh#MduC%yr;3v}');
define('SECURE_AUTH_KEY',  'w%qygp/6r=;=>} (Vc:jtV9sV`EN[,j,9baubg--`)YN^r+fbhf*3xo$.%ovmin`');
define('LOGGED_IN_KEY',    'Cvjxz[;I&G5VGTgI{H$(ztY-gN9uu]:VZyltT_x16IUd0Cq@XB!VmnM/-Vlks8aV');
define('NONCE_KEY',        '4$&RJ6w/6mPO#Kp*~=0:J.O6}&FKH&4Oe)8a`Fr#O~hJ[Qu#4%8Y2$(?Fw w5-ra');
define('AUTH_SALT',        '1_?<jaZtu0;|(!.iPN2/#mEL6M3E%SacQno_[ep/eX+o4%Qf#JNiIbIiz^1f+O&O');
define('SECURE_AUTH_SALT', '_63UCGS$4@w0o6kmvkZyacneo67]Ec~#Di!faug36.sZ86gC3$,]5Tt15O0+xJ]L');
define('LOGGED_IN_SALT',   'V:!u<=*v{m4Ei$Q=;>`em]YgNA/~0itZK7u3aJGpO5$ bTZO6?<0,3UdnGizk/`r');
define('NONCE_SALT',       'M`q<cWyIy{uj1~5zRz~<I-a.CC~Pcu{(nGDTBqMbwcV6j{TJZ!U$Q5%zkhaU{uBk');

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
