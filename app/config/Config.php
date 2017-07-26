<?php

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
 * Class PDOConfig
 *
 * Configuration for: Connecting to the database
 */
interface PDOConfig
{

     protected $DB_TYPE = 'mysql';
     protected $DB_HOST = 'localhost';
     protected $DB_NAME = 'db';
     protected $DB_USER = 'root';
     protected $DB_PASS = 'root';
     protected $DB_CHARSET = 'utf8';
     
}

?>