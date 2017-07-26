<?php

// set a constant that holds the project's folder path, like "/var/www/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// set a constant that holds the project's "app" folder, like "/var/www/app".
define('APP', ROOT.'app'.DIRECTORY_SEPARATOR);

// set a constant that holds the projet's 'config' folder, like "/var/www/app/config".
define('CONFIG',APP.'config'.DIRECTORY_SEPARATOR);

// set a constant that holds the projet's 'core' folder, like "/var/www/app/core".
define('CORE',APP.'core'.DIRECTORY_SEPARATOR);

// set a constant that holds the projet's 'controller' folder, like "/var/www/app/controller".
define('CONTROLLER',APP.'controller'.DIRECTORY_SEPARATOR);

// set a constant that holds the projet's 'model' folder, like "/var/www/app/model".
define('MODEL',APP.'model'.DIRECTORY_SEPARATOR);

// set a constant that holds the projet's 'view' folder, like "/var/www/app/view".
define('VIEW',APP.'view'.DIRECTORY_SEPARATOR);

// set constants for different level of access define('VISITEUR',1);
define('INSCRIT',2);
define('MODO',3);
define('ADMIN',4);

?>