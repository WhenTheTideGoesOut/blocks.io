<?php
//Connect.php
/**
 * This file is used to connect to the datbase to allow the login and registration process to work
 * Author: WhenTheTideGoesOut
 * Creation Date: 16 August 2018
 * 
 * 
 * 
 * 
 */
        //Create the PDO Variables and Assign the Values
     
        define('MYSQL_USER','root');
        define('MYSQL_PASSWORD','root');
        define('MYSQL_HOST','localhost');
        define('MYSQL_DATABASE','logindb2');
      

        //Create the Option 
        $pdoOptions = array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_EMULATE_PREPARES => false
                          );



        //Create the PDO Connection                  
        $pdo = new PDO(
                         "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE, //DSN
                         MYSQL_USER, //Username
                         MYSQL_PASSWORD, //Password
                        $pdoOptions //Options
                        );

                        echo ' in the connect_login at the end ';
?>