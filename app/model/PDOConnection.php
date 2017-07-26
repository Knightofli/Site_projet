<?php 

require CONFIG.'Config.php'; 

class PDOConnection implements PDOConfig
{

     protected function connectPDO() 
     {
          try
          {
               $options= array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,PDO::ATTR_ERRMODE = PDO::ERRMODE_EXCEPTION;);
          
          
             //generate a database connection, using the PDO connector
             // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
               $DB = new PDO($DB_TYPE . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME . ';charset=' . $DB_CHARSET, $DB_USER, $DB_PASS, $options);
          }
          catch (Exception $e)
          {
               die('Erreur : ' . $e->getMessage());
          }
          
     }
     
     protected function create_users()
     {
          $sql = CREATE TABLE IF NOT EXISTS 'Users' (
            id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            password VARCHAR(200) NOT NULL,
            email VARCHAR(100) NOT NULL,
            reg_date DATETIME
            ) 
            ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;;
     
     }
     
     protected function create_


}

?>