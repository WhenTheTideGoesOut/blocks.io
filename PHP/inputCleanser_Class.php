<?php

class inputCleanser_Class{



public function __construct()
{

   echo "I am a false method";

    //return $string4;
}

function getValue($postarray){

    foreach ($postarray as $stringtoclean){
            $stringtoclean = implode("",explode("\\",$stringtoclean));
            $stringtoclean = implode("",explode("//",$stringtoclean));
            $stringtoclean = str_replace("/","",$atringtoclean);
            $stringtoclean = htmlspecialchars(stripslashes(trim($stringtoclean)));

    }
    return $postarray;
                            
}
}

?>