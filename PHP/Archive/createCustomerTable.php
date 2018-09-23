<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);    
}
echo "created a successful connection";

$sql ="CREATE TABLE customer ( 
customerID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
customerName VARCHAR(255) NOT NULL,
customerAddress1 VARCHAR(255) NOT NULL,
customerAddress2 VARCHAR(255 NOT NULL,
customerAddress3 VARCHAR(255),
customerAddress4 VARCHAR (255),
customerPhone VARCHAR (255) NOT NULL,
customerEmail VARCHAR(255) NOT NULL,
REG_DATE TIMESTAMP
)";

$result = mydqli_query($conn,$sql);

if($result===false)
{
    printf("error: %s\n".mysqli_erro($conn));
}
else
{

echo "Customer Table Completed ECHO.";
}
?>
