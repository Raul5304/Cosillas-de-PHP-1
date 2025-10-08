<?php
    function esFactorial(int $num){
        if($num < 0){
            return null;
        }
        $cont = 1;
        for($i = $num; $i > 0; $i--){
            $cont*=$i;
        }
        return $cont;
    }

    function suma($a, $b){
        echo $a+$b;
    }

    function saludo(){
        echo "Hola, buenas";
    }
?>