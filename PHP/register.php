<?php

/*
This file will be called whenever the user clicks on the register button on the Landing.html page.
The idea is it will handle the call to strip and the result and then create the user on the logindb
Once the user is unique and created on the login page this will then call the homescreen - which is the main page.

Author: WhenTheTideGoesout
Date: 21 August 2018

*/

/*require 'register_stripe.php';*/
require 'connect_login.php';
require 'create_user.php';
if(isset($_POST['user_register_form']))

{

require '../html/homescreen.html';
echo "the isset does work inthe regiser page";
}
header("Location:../html/homescreen.html");


?>

