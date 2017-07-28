<?php
/**
* Define constants 
*/
// set a constant that holds the project's folder path, like "/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// set a constant that holds the project's "app" folder, like "/app".
define('APP', ROOT.'app'.DIRECTORY_SEPARATOR);

// set a constant that holds the projet's 'config' folder, like "/app/config".
define('CONFIG',APP.'config'.DIRECTORY_SEPARATOR);

// set a constant that holds the projet's 'core' folder, like "/app/core".
define('CORE',APP.'core'.DIRECTORY_SEPARATOR);

// set a constant that holds the projet's 'controller' folder, like "/app/controller".
define('CONTROLLER',APP.'controller'.DIRECTORY_SEPARATOR);

// set a constant that holds the projet's 'model' folder, like "/app/model".
define('MODEL',APP.'model'.DIRECTORY_SEPARATOR);

// set a constant that holds the projet's 'view' folder, like "/app/view".
define('VIEW',APP.'view'.DIRECTORY_SEPARATOR);

// set constants for different level of access define('VISITEUR',1);
define('INSCRIT',2);
define('MODO',3);
define('ADMIN',4);


/**
 * Configuration
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

/**
 * Configuration for: URL
 * Here we auto-detect your applications URL and the potential sub-folder. Works perfectly on most servers and in local
 * development environments (like WAMP, MAMP, etc.). Don't touch this unless you know what you do.
 *
 * URL_PUBLIC_FOLDER:
 * The folder that is visible to public, users will only have access to that folder so nobody can have a look into
 * "/application" or other folder inside your application or call any other .php file than index.php inside "/public".
 *
 * URL_PROTOCOL:
 * The protocol. Don't change unless you know exactly what you do. This defines the protocol part of the URL, in older
 * versions of MINI it was 'http://' for normal HTTP and 'https://' if you have a HTTPS site for sure. Now the
 * protocol-independent '//' is used, which auto-recognized the protocol.
 *
 * URL_DOMAIN:
 * The domain. Don't change unless you know exactly what you do.
 *
 * URL_SUB_FOLDER:
 * The sub-folder. Leave it like it is, even if you don't use a sub-folder (then this will be just "/").
 *
 * URL:
 * The final, auto-detected URL (build via the segments above). If you don't want to use auto-detection,
 * then replace this line with full URL (and sub-folder) and a trailing slash.
 */

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);


setlocale(LC_TIME, "fr_FR");

// set time 
date_default_timezone_set('Europe/Paris');

