<?php
echo " we are going to check with the db";

$error_array = array();
$errorflag=false;
$server = "localhost";
$dbname ="logonDB";
$username ="root";
$password="root";

$conn= new PDO("mysql:host=$server,dbname=$dbname",$username,$password);

$loginname = $_POST['username'];
$loginpassword = $_POST['password'];

//VALIDATE THE ENTRIES WERE NOT BLANK
if ($loginname==" ")
    {   
        $error_array []="You must enter login details" ;
        $errorflag = true;
    }

if ($loginpassword==" ")
    {
        $error_array []="You must enter login details" ;
        $errorflag = true;
    }
//QUERY

    $result = $conn ->prepare("SELECT * FROM loginTable WHERE username = :blabla AND password =:asas ");
    $result->bindParam(':blabla',$loginname);
    $result->bindParam(':asas',$loginpassword);
    $result->execute();

    $rows = $result -> fetch(PDO::FETCHNUM);

    //CHECK RESULTS OF QUERY
    
    if ($row>0)
        {
            header('location: ../html/homescreen.html');
            
        }

        else 
        {
            $error_array[]="Your user account was not found";
            $errorflag =true;
        }

        if($errorflag)
        {
            $_SESSION['ERROR_ARRAY']=$error_array;
            session_write_close();
            header("location:login.html");
            exit();

        }
        ?>

