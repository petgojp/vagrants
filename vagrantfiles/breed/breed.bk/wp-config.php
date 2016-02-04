<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'rz-%toqD~~|JOjU+HJ8bjv})nxS3|tyKwMbo)I1u;%VBg+2Z>Sq*Okaa_%bhb9Yg');
define('SECURE_AUTH_KEY',  '+lbn0-WM~.O9,}N_V<Lu+Z!_3MY:JH(MNH9&E!prIg^jmzXQcZ/pBpt!G?u:^T}#');
define('LOGGED_IN_KEY',    'mXx|n$/.UXOJ8e(,N<SI,b4]e6Z/|x+, %cOi+g?!*B+df?=>c?6V-U*v|yhOOIY');
define('NONCE_KEY',        'gd;d-ZUL/4 Ti( c5-[{ovtiQr0qOcR^Z=BCJYo0a+J`=48!OPrlO0.5E-Pek%@M');
define('AUTH_SALT',        ',5+VNhdeFKkNhAIuxUz{)WlQ!j45#5:?fa3lDPq}^f9$#*fi_V=%a_gT3FuJ~j[d');
define('SECURE_AUTH_SALT', 'BA:Wz6uR#$1]AC{y<SuEK-X-/Yy:bX-.(]6 +JF$!i6y&EBzTPq07Oo[ZZ4j7>)q');
define('LOGGED_IN_SALT',   'b/|9-mga9;3H+|Auha-$&gok|PR[(/k((T&Z$K+)kI;18tv34aM(4<CfALq27::4');
define('NONCE_SALT',       '/u2@qokc+L|4QqLXAN?[{uE*s]YThZP,Hy;aa]-^zzHDiaRV?G5u9y@Tu5z%htxu');


$table_prefix = 'wp_';


define('FS_METHOD', 'direct');
define('WP_DEBUG', false);
@ini_set('log_errors', 'On');
@ini_set('display_errors', 'Off');



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
