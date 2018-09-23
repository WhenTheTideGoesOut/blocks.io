<?php

class inputCleanser{



public function __construct($string1)
{

   echo "I am a false method";

    //return $string4;
}

function getValue($string1){

    echo "inside the input cleanser ".$string1."<br>";
    $string1=implode("",explode("\\",$string1));
    $string2=implode("",explode("//",$string1));
    $string3=str_replace("/","",$string2);
    $string4=htmlspecialchars(stripslashes(trim($string3)));
    echo "at the end of input cleanser string 4 is ".$string4."<br>";
    return $string4;

}
}

?>