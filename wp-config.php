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
define('DB_NAME', 'real_bride');

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
define('AUTH_KEY',         '-t|2iT&Z)Gt-1&q))fu7d!b.TLsBj+Z_?]vH@H%WIg*j0T(l%Yaomdz4fh@6<8wd');
define('SECURE_AUTH_KEY',  '_*<yW-n&t9M_E+_Kevg5%dEw]V[khn=~a)F1*i^GUZ+31,+.vI=M!=^+m:DJv8Z8');
define('LOGGED_IN_KEY',    '(<$Lv@(#l)~`.o0N*- F9+~=M@t+E`_1uZESw|)*TBt>&*G?]4:G~#.{mylLReg~');
define('NONCE_KEY',        'j*@7jg.sS{&vuG)yD+fs@>bcU87F;iSyl:hDcV_+LJHR~?H_Cz3)q1`1zP?&F+YN');
define('AUTH_SALT',        'fG`7E0u(f0Uaz9a:e-hn}A^,Css%t1i+)GSRa4G;M?aT-gq`KBz;f5-N:)HnX-~ ');
define('SECURE_AUTH_SALT', 'iW=)`*+-.bu +r4vV3/+3q.FV _SR*8d+F}I=&G?C|D^g:jCq(8D+ewecY*c>T],');
define('LOGGED_IN_SALT',   'Ir6A=]5`tdotNHR+1OI3e}pZnMR(nAr)gFP{q=Ai}&f6URLvM6[+Zl+zMv+JB=aE');
define('NONCE_SALT',       '43OO+E4--<Jc1y(}bho+y2Z0/WJIyM>jY^3%%?BwMdA]b-ObFe|(1XMJAtJ-W/Ei');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
