<?php


        try{

            $connection = new pdo("mysql:host=$host",$username,$password,$options);
            $sql=file_get_contesnts("../data/logindb.sql");
            $connection->exec($sql);


            }
        
            catch (PDOException $error)
            {
                echo sql."<br".$error->getMessage();
            }

            
            ?>

