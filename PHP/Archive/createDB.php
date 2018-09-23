<?php
echo "opened connectUser Page <br>";

$createServer = "localhost";
$createUsername = "root";
$createPassword = "root";

echo "created variables bar the connection<br>";
$connectServer = mysqli_connect($createServer, $createUsername, $createPassword);
echo "created Connection Variable<br>";

if (!$connectServer)
{
    die("Connection failed".mysqli_connect_error());
}
echo "connected to server<br>";
$trySQL = "CREATE DATABASE myDB";

echo "created SQL String $trySQL <br>";

$result = mysqli_query($connectServer,$trySQL);


if($result===false)
{
    printf("error: %s\n", mysqli_error($connectServer));
}
else
{
    echo "Done";
}
echo "<H1> Welcome to BLOCKS your database has been created</H1>";?>
