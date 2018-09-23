<!DOCTYPE html>

<?php
$var = "Hello World";
$serverName="localhost";
$userName="root";
$password="root";

?>
<html>
<head>

    <meta  charset="utf-8">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="../js/createQuote.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel ="stylesheet" href="../css/hammer.css">
<link rel="stylesheet" href="../css/navbar.css">   
<link rel="stylesheet" href="../css/form.css">
<link rel="stylesheet" href="../css/managejob.css">



    </head>


    <nav>
        <li class="navbariconhomepage">   <a href="landing.html">Blocks.io  </a></li>
        <li class="navbaraboutpage"><a href="about.html">About</a></li>
        <li class="navbarcontactuspage"><a href="contactus.html">Contact Us</a></li>
        <li class="navbarpricingpage"><a href="pricing.html">Pricing</a></li>
        <li class ="iconloginepage"><a href="login.html">Login</a></li>

    </nav>


   <body>


  

        <div class="panel1"></div>

        <div class="panel2">
                <p>
                        Enter a Customer Name, a Worker Name or a Task Name, then hit search!
                    </p>


                <form id="formManageJob" method ="POST">

                
                        <label id="label1">Search</label>
                        <input id="input1" type="text" name="Search"><br>
                        
                        
                        <button  type="submit" class="button1" formaction="../HTML/managejobSearch.php"> Search </button>
                        
                        <!--
                        <button  type="submit" class="button2" formaction="../HTML/job.html"> Mark Complete</button>  
                         <button  type="submit" class="button3" formaction="../HTML/job.html"> Delete </button>
                       
                    -->
                    </form>

            </div>

        <div class="panel3">
         

        </div>

           <?php 
           
           echo "<table style='border: solid 1px black;'>";
           echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";
           
           class TableRows extends RecursiveIteratorIterator { 
               function __construct($it) { 
                   parent::__construct($it, self::LEAVES_ONLY); 
               }
           
               function current() {
                   return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
               }
           
               function beginChildren() { 
                   echo "<tr>"; 
               } 
           
               function endChildren() { 
                   echo "</tr>" . "\n";
               } 
           } 
                    //we connect to the database to enter the search string.
                    //We will have to clean the string before querying the db
                    try
                        {
                            //connect to the database
                            $conn = new PDO("mysql:host=$serverName;$db=myDB",$userName,$password);
                            //set the pdo error mode to exception
                            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                            echo "Connection is successful";
                            $query = $conn->prepare("SELECT * FROM jobTaskTable WHERE jobTaskStatus=open");
                            $query->execute();    
                            
                            echo "connected successfully ";

                            //display all open task sorted by due date.
                            //
                            $result = $query->setFetchMode(PDO::FETCH_ASSOC); 
                            foreach(new TableRows(new RecursiveArrayIterator($query->fetchAll())) as $k=>$v) { 
                                echo $v;
                                echo "This is the end";
                        
                            }
                        }
                    catch(PDOEception $e)
                        {
                            echo "Connection failed: ".$e->getMessage();


                        }   

                    
            ?>  <H2> THIS IS THE SEARCH RESULT <?= $var;?> </h2>


    



   </body> 


</html>