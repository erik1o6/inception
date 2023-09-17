<?php
/** The base configuration for WordPress
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 */

/** The name of the database for WordPress */
define('DB_NAME', 'Base');

/** MySQL database username */
define('DB_USER', 'queso');

/** MySQL database password */
define('DB_PASSWORD', 'cheese');

/** MySQL hostname */
define('DB_HOST', 'mariadb');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

//** Redis cache settings. */
define('WP_CACHE', true);
define('WP_CACHE_KEY_SALT', 'aquesada.42.fr');

//** Try Redis container */
define('WP_REDIS_HOST', 'redis');
define('WP_REDIS_PORT', 6379);
// define( 'WP_REDIS_PASSWORD', '$REDIS_PWD' );
define('WP_REDIS_TIMEOUT', 1);
define('WP_REDIS_READ_TIMEOUT', 1);
define('WP_REDIS_DATABASE', 0);


/** Authentication Unique Keys and Salts.
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */

 define('AUTH_KEY',         '1d+$QNA+szoW/1x8+jOTy~>>B{oel2Rr?roNF__mRJfnfs0zn6DCL)Bt$h$zdSDV');
	define('SECURE_AUTH_KEY',  'bg1])3c^~ZgTT=Ba1BXPq])_:?BsP:44mMl4mqBw_?AWEszN<I>Xrozn.boB8Utz');
	define('LOGGED_IN_KEY',    'pNJ4cRdF#!9yB&Zfk>,{wK32En30qhkhM{c8v-g#C},m%:ix+>%]Cwe-f)3WGu]?');
	define('NONCE_KEY',        '4gnWrM^b1*rlZwu]Yokcs%S<-U:#^~.e6{9m#Ux],2r^I_-i-Q+HyI6lYY2R3vE5');
	define('AUTH_SALT',        '|e-5-|uUKko>fx8oNMQ5^Rm6s0#gZ XXIlIm)Ra]Z#RN(Y$.zJv7Tl;EszvKgEg8');
	define('SECURE_AUTH_SALT', 'FA*w&GaF|K`9Qa0_Mqx5+7GI-jhjzMo_RB4Iq<P=wWVnNB{`^~_f[.0SBt+~hUW)');
	define('LOGGED_IN_SALT',   'b_kVEFrp{jBh.N*zCk{H?~.]|^[xnU5Wu{r2?A];/ Bs=L#YrC0m,Yu%<nAyF1++');
	define('NONCE_SALT',       'X>BK!G5D/46NX;6= DX`?Ya|n5=_x1%(gP| }}avvrj!hL7o|0k&<11:^x]~tUDY');
	
/** WordPress Database Table prefix. */
$table_prefix = 'wp_';

/** For developers: WordPress debugging mode. */
define( 'WP_DEBUG', false );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>
