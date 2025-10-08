<?php
    $a = 10;
    $b = 2;

    function intercambia(&$a, &$b){
        $temp = $b; // temp = 2, b = 2, a = 10
        $b = $a; // temp = 2, b = 10, a = 10
        $a = $temp; // temp = 2, b = 10, a = 2

        echo $a . $b;
    }

    intercambia($a, $b);
?>