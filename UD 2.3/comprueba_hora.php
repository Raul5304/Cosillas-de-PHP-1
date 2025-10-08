<?php
$horatexto = "23:39:23";
if (preg_match("/^([0-23]{2}):([0-59]{2}):([0-59]{2})$/", $horatexto) == 1){
    echo "Hora válida";
}
else{
    echo "Hora inválida";
}

?>