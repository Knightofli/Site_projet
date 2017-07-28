<?php 

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