<?php

include "../PHP/booter.php";


        ///if($_POST["formid"]=="task")
       // {
              //  $objToCleanString = new inputCleanser();
              //  echo "out of the creator input cleanser";
              //  $cleanarray= $objToCleanString ->getValue($_POST);
              // echo "ran the getValue array";

                foreach ($_POST as $stringtoClean){
                  echo "in the for each look in the search php file ";
                  $stringtoclean = implode("",explode("\\",$stringtoclean));
                  $stringtoclean = implode("",explode("//",$stringtoclean));
                  $stringtoclean = str_replace("/","",$atringtoclean);
                  $stringtoclean = htmlspecialchars(stripslashes(trim($stringtoclean)));
                }
                if (isset($_POST["tasks"]))
                
                {
                        $searchTasks= new searchTask_Class($_POST);
                }
            //    elseif (isset($_POST["anotherTable"]))




?>
