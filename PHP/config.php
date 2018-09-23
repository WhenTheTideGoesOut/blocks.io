

<?php

/******* 
 * 
 *      This is the configuration file for connecting to the database.autoloader
 * 
 * 
*/
$host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "test23"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );

?>
