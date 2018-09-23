<?php


/***
 *  This file opens  a PDO Coonection to create the user database.
 *  with the new table connection.
 * 
 * 
 * 
 */
    require config.php;


    try {
            $connection=new PDO("mysql:host=$host", $username, $password, $options);
            $sql = file_get_contents("../DATA/init.sql");
            $connection ->exec($sql);
            echo "DB Successfully created";
        
        }
    catch (PDOException $error)
        {
            echo sql."<br".$error->getMessage();
        }



?>


