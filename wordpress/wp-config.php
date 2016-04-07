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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'student');

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
define('AUTH_KEY',         '{Fp|V}{&ffSieOx<njOzO$|s9$qg3]kC&J4.bxH/3Nb*-+;!t9YFE(9#XH{*U0-N');
define('SECURE_AUTH_KEY',  'H2|Z|hPx9M_n.yE7$X0E^R;{mG41d,Htv8[2;7XJ*P8V+{a&,f7^}orp70*%pV78');
define('LOGGED_IN_KEY',    'Rnctxd6QUfw0<;?v*%)_fmAF<QK2StROu>|SjsnIxkIWS-9!`yCJV+7*pI`mCL5|');
define('NONCE_KEY',        'as.GA@7+}49MEh/||~piJ}V,6</mB627s$wNn~aE+Wb4hw]4x=VWZqcjo(YD6qEO');
define('AUTH_SALT',        '?+xF7v`.HV,FL6--PqYE)X%72F^oO8em4%c1A-O8-[9M:oS(w+R5?=-aQSBlG+M|');
define('SECURE_AUTH_SALT', '%Yn^76c@|-1g2DqQ^qL`1wJb6l<BUt~l03swO|uNM.p^;__=aT?Xh=-4w6dKu|[C');
define('LOGGED_IN_SALT',   '7RFB;sk+C;)Si3s!FU.oax+N~C[`W5:SAf[!I+^dpNUn{SG!+V}mJba^zhY7kQ5M');
define('NONCE_SALT',       '5l>q@u5ye=~3[KriF|B?tDs/?7Ft-J`4L}|LI)I1qKr<},+/[&+{+iG~zgr3owFP');

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
