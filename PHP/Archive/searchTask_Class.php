<?php
echo "break point 1 -  in search class<br><br>";


/*This class was created to allow a one place to search for any item.
In essence every search button will use this class to search the background database.
*/
class searchTask_Class {
    /*define the three variables of the class - we have not inclused the connection or database.
  
    public $searchString;
    public $tableSearch;
    public $searchResults;
  */
public function __construct($_POST)
    {

        $this->searchString = $searchString;
       
        
        
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "myDB";
        $dsn = "mysql:dbname=myDB;host=localhost";
        $stringTOSearch;
        echo "break point 2 -  just before the try ".$searchString."<br><br>";

        /*

        $customerName=cleanInput($_POST["customerName"]);
        $employeeName=cleanInput($_POST["employeeName"]);
        $taskDescription=cleanInput($_POST["taskDescription"]);
        $taskHours = cleanInput($_POST["taskHours"]);
        $startDate=cleanInput($_POST["startDate"]);
        $finishDate=cleanInput($_POST["finishDate"]);
        $job=cleanInput($_POST["job"]);  
        $relatedTasks=cleanInput($_POST["relatedTasks"]);
        $completeTask =cleanInput($_POST["completeTask"]);  
        */
        $customerName=$_POST["customerName"];
        $employeeName=$_POST["employeeName"];
        $taskDescription=$_POST["taskDescription"];
        $taskHours=$_POST["taskHours"];
        $startDate=$_POST["startDate"];
        $finishDate=$_POST["finishDate"];
        $job=$_POST["job"];  
        $relatedTasks=$_POST["relatedTasks"];
        $completeTask =$_POST["completeTask"]; 

        if (empty($customerName)!=true)
        {
            $stringTOSearch="'name';

        }

        try
        {
            echo "break point 3 -  inside the try<br><br>";
            $pdoConnection= new PDO($dsn,$username,$password);
            echo "break point 4 -  connect to the PDO<br><br>";
            echo " the details are ".$searchString;
            $trySQL ="SELECT $searchString FROM $tableSearch";
            echo "break point 5 -  trySQL is set up".$trySQL."<br><br>";
            $return = $pdoConnection->query($trySQL);
            echo "connected to the PDO";
                if($return->num_rows>0)
                     {
                    while($row = $return->fetch(PDO::FETCH_ASSOC))  
                        {
                            echo $row['field1'];

                        }
                    }

                else{
                    echo "No Results";
                    }
            }

        catch (PDOException $e)
        {
            print "Error!: ".$e->getMessage." <br/>";
            die();

        }

       
        }



    }

?>

