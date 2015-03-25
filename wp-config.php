<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/vhosts/ceedi.edu.mx/httpdocs/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress_83');

/** MySQL database username */
define('DB_USER', 'wordpress_1');

/** MySQL database password */
define('DB_PASSWORD', 'B2UKrxp40!');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',       'AFfO2uaCmQcc#)G*6g4sBlTbbyyfVi%k(TuN@keQf&W97#wA98qXHcastFkNcT2m');
define('SECURE_AUTH_KEY',       '6Vp$Fvfgt0@!juB9(qrDIq*XTeyPpi@^LCpjk$L%JY#MAZ#6HwGz*VoDu)V$VSaS');
define('LOGGED_IN_KEY',       'ewLeU3dZ$FIYV7UzOTa2)Y@lqyikBUxMAsT(kuKN%5rcVPHKP)JK5tFZozJ7Up!x');
define('NONCE_KEY',       'C3jn$sop1M!HovkRY*(C2MBlBjj7!vd8kqQD5G3CirM1GtzKcV!wM1N%heG@biXM');
define('AUTH_SALT',       'PD2Dn)*W^^DfCd8Wtkpk(Rb*cK9hZIh73GY7AB&e6bqMWKEK82NcCSLyw*QyHQ6O');
define('SECURE_AUTH_SALT',       'HDStBNuI5ZwZK3gc1^3BB)(Rln7EuCrpCcYtt0vrba(nQ25rB3GqU*#p)hiMq#Fj');
define('LOGGED_IN_SALT',       'iBSUpI&9H0M9$tsTtd6dDA&*CptoTG7$fy*TvuNX$UALCwo$v5kYi%LaxwbSfsUd');
define('NONCE_SALT',       'ibM1zLM*jSmE3&Kj*Mk^SYc#LnV4tcf&nBcKCYbl3)iK3f!tGoQxCfTvU(^NzfsF');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
