<?php
echo "at the beginning of booter program<br>";
require_once ('autoloader.php');
spl_autoload_register(autoloader);
echo "at end of booter prgoram<br>";

?>



