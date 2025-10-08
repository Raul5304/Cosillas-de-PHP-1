<?php

echo esFactorial(5);

    function esFactorial(int $num){
        if($num <= 1){
            return 1;
        }
        return $num * esFactorial($num -1);
    }

?>