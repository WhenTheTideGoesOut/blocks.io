<!DOCTYPE html>
<html>
<head>
<title>
</title>



<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>-->
<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- Turn off zooming on Mobile page-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<!--<script src="../js/createQuote.js"></script>-->
<link rel ="stylesheet" href="../css/bootstrap.css">
<link rel ="stylesheet" href="../css/hammer.css">
 

</head>

<body>

        <?php 
        include "../PHP/booter.php";
        $customerName= $employeeName= $taskDescription= $taskHours= $startDate= $finishDate= $job= $relatedTasks= $completeTask="";

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {   foreach($_POST as $stringData)
            {
                $stringData=cleanInput($stringData);
                echo "testing the string";
            }
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
            $seacharray =  array ($customerName,$employeeName, $taskDescription,$taskHours,$startDate,$finishDate,$job,$relatedTasks,$completeTask);
            $searchTable = new searchTask_Class($searcharray);
            */
            $searchTable = new searchTask_Class($_POST);
        }
        function cleantInput($data)
        {
            
            $data=htmlspecialchars(stripslashes(trim($data)));
            $data=implode("",explode("\\",$data));
            $data=implode("",explode("//",$data));
            $data=str_replace("/","",$data);
            return $data;
        }

        ?>

    <div class ="jumbotron">

        <div class="container-fluid">
             <div class="row top-buffer"></div>
                  
        <form class = "form-horizontal" method="POST">

                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Customer Name</label>
                        <div class="col-sm-8">
                            <input type="Text" class="form-control"  placeholder="Customer Name" name="customerName">
                        </div> 
                        </div>

                    <div class="form-group">
                    <label for="employeeName" class"col-sm-2 control-label">Employee Name</label>
                    <div class="col-sm-8">    
                    <input type="text" class="form-control" placeholder="Employee Name" name="employeeName">
                    </div>
                    </div>

                    Task Description: <input type="text" name="taskDescription"> <br>
                    Hours: <input type="number" name="taskHours"> <br>
                    Start Date: <input type="date" name="startDate">
                    Finish Date: <input type="date" name="finishDate">
                    Job: <input type="text" name="job">
                    Related Tasks:<input type="text" name="relatedTasks">
                    Complete:<input type ="checkbox" name="completeTask">
       
       
                        
               
        </div> <!--close the container-->


<button type="submit"formaction ="../PHP/connect.php">Add Task</button> 
<button type="submit" formaction = "../PHP/search.php" name = "tasks">Search Tasks</button>
<button type="submit"formaction ="URI....">Mark Complete </button>

<!--<button type="submit"formaction = "<?php echo"the button has been pressed"; echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Search Tasks</button>
    -->
 </form>

    </div><!--close jumbotron-->
</body>

</html>