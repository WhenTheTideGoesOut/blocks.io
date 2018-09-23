
<?php

/******* 
 * 
 *      This is the configuration file for connecting to login database.
 *      We connect to this and check if the user exists
 * 
 * 
 * 
*/
$host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "logindb"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );

?>