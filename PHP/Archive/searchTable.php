<?php
echo "break point 1 -  in search class<br><br>";


/*This class was created to allow a one place to search for any item.
In essence every search button will use this class to search the background database.
*/
class searchTable {
    /*define the three variables of the class - we have not inclused the connection or database.
  
    public $searchString;
    public $tableSearch;
    public $searchResults;
  */
public function __construct($searchString,$tableSearch)
    {

        $this->searchString = $searchString;
        $this->tableSearch = $tableSearch;
        
        
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "myDB";
        $dsn = "mysql:dbname=myDB;host=localhost";
        
        echo "break point 2 -  just before the try ".$searchString."<br><br>";

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

