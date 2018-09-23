<?php


$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}


$sql ="CREATE TABLE customer (

             customerName varchar (255)
             customerAddress1 varchar (255) 
             customerAddress2 varchar (255)
             customerAddress3 varchar (255)
             customerAddress4 varchar (255)
             customerPhoneNo varchar (255)
             customerEmail varchar (255)
             
             )";
   
   If (mysqli_query($conn, $sql)){
   
   
   echo "customer table created successfully";         
             }
             else
             {echo "error creating customer table";
             
             
        
             }
             
    $sql = " CREATE TABLE jobs (
            jobCreator varchar (255)
            jobOwner varchar (255)
            jobStatus varchar (255)
            jobDescription varchar (255)
            jobDuration varchar (255)
            jobStartDate varchar (255)
            jobEndDate varchar (255)
    )";
    
     If (mysqli_query($conn, $sql)){
   
   
   echo "customer table created successfully";         
             }
             else
             {echo "error creating customer table";
             
        
             }


$sql =" CREATE TABLE tasks
(
owner varchar (255)
status varchar (255)
description varchar (255)
materials varchar (255)
duration varchar (255)
startDate varchar (255)
endDate varchar (255)
actualStartDate varchar (255)
actualEndDate varchar (255)
prerequisites varchar (255)
dependentTasks varchar (255)
 )";   
    
              If (mysqli_query($conn, $sql)){
   
   
   echo "customer table created successfully";         
             }
             else
             {echo "error creating customer table"
             
        
             }    
             
$sql =" CREATE TABLE staff
(
staffName varchar (255)
staffDescription varchar (255)
staffEmail varchar (255)
staffMobile varchar (255)

 )";   
    
              If (mysqli_query($conn, $sql)){
   
   
   echo "customer table created successfully";         
             }
             else
             {echo "error creating customer table"
             
        
             }  

             $sql =" CREATE TABLE assets
(
staffName varchar (255)
staffDescription varchar (255)
staffEmail varchar (255)
staffMobile varchar (255)

 )";   
    
              If (mysqli_query($conn, $sql)){
   
   
   echo "customer table created successfully";         
             }
             else
             {echo "error creating customer table"
             
        
             }  

mysqli_close($conn);

?>