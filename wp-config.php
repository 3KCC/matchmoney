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
define('DB_NAME', 'trangTest');

/** MySQL database username */
define('DB_USER', 'minhtrang');

/** MySQL database password */
define('DB_PASSWORD', 'ezfx0109');

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
define('AUTH_KEY',         '5z+*|;Jh6!iGa+a *f3+nK:r5{Lwmi+kZF~@.nHG?x8/K|c?snfz/z|B8zDa?pzj');
define('SECURE_AUTH_KEY',  'sQ!a>#hPosK`GJ+-k2g>.VnUA+-e/WEfm*aIQdGsc-#^jw[qr[#)>LI4LzY=Ri<{');
define('LOGGED_IN_KEY',    '8x%m2C<:J}tLoZ*HuxN6~G1(D8x;HqZg+$lSO67cw[z=q:@hb=.-qfQd_1PctT$f');
define('NONCE_KEY',        'WDe`J~RAcF2:NgH/b;Q2B8c|>l+*?I+djLsI+)4DF)r/WY(L8%Z?d!k95u7uzO%4');
define('AUTH_SALT',        'J;Q@IaFwAgGe;Mlxe8{Vl-8K 6ir?])I#|Q+aOf[f%U1(hr6FPF{>S$AhVN7ZLqG');
define('SECURE_AUTH_SALT', '/+>@jUT.QQWU4f=c=19gUr-LUU g*I9|-U$Xx98aH(yHb`I~EDb~+1wK9_V%OCI|');
define('LOGGED_IN_SALT',   'up))P)va<#vw<O+|sJa?V$j9@{Ny`Mk`C.-.(w_K^N-10>7b.BPXmGAs7mvi:Swe');
define('NONCE_SALT',       'j!RWNpcVRD?Vn1ZhyVu];e3FKP4`Cp:$Y|~Un|OC6pqQS[cKlp3VX}-)p,]3$~-k');

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
