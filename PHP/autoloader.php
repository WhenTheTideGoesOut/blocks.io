<?php
echo "in autoloader file<br>";
function autoloader($class)
{       
        require_once ('../php/'.$class.'.php');
        
        
}




?>
