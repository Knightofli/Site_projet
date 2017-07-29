<?php 
// start a session for the user.
session_start();

// set variable session for user : visitor$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1; 
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0; 
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

// load application config (error reporting etc.)
require 'config/Config.php';

// If you want to load pdoDebug via Composer, then have a look here: https://github.com/panique/pdo-debug
//require CONFIG.'helper.php';

// load application class
require CORE.'Application.php';

// start the application
$application = new Application();

