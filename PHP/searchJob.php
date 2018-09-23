



<?php

/* 
This script is made to take the contents of the job.html file
The script will 
1)Check the session via id token -
2)Clean the text entered
3)Search the DB for the values entered
4)Return the results in a HTML screen.
Date Create: 19 July 2018
Author: WhentheTideGoesOut
Last Modidifed: 19 July 2018
*/

$customerName = htmlspecialchars($_POST['customerName']);
$customerEmail = htmlspecialchars($_POST['customerEmail']);
$customerPhoneNumber = htmlspecialchars($_POST['customerPhoneNumber']);
$customerAddress = htmlspecialchars($_POST['customerAddress']);
$customerStartDate = htmlspecialchars($_POST['customerStartDate']);
$customerFinishDate = htmlspecialchars($_POST['customerFinishDate']);     

foreach($_POST as $element){
        echo "inside the for each ";
                if (is_array($element))
        {
            echo "insude the if ";
            foreach ($element as $item);
            {
                echo "inside the second foreach ";
                echo "This is item " .htmlspecialchars($item);
            }


        }
            else

            {
                echo " ".$element;
            }

    }

/*
try
        {

        }

        catch
        {


        }

?>
*/
