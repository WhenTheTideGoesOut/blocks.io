<?php
function dataCleanser($string){

    echo "inside the data cleanser ".$string1."<br>";
    $string1=implode("",explode("\\",$string1));
    $string2=implode("",explode("//",$string1));
    $string3=str_replace("/","",$string2);
    $string4=htmlspecialchars(stripslashes(trim($string3)));
    echo "at the end of data cleanser string 4 is ".$string4."<br>";
    return $string4;


}
?>