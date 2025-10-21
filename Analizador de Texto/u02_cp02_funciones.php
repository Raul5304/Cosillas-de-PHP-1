<?php

function deleteChars($texto){
    $texto = str_replace("\n", " ", $texto);
    $array = explode(" ", $texto);
    foreach($array as &$arr){
        $arr = preg_replace("/[[:punct:]]/", "", $arr);
        $arr = trim($arr);
    }
    $array = array_filter($array, fn($v) => $v !== '');

    return array_values($array);
    
}

function deleteWords($array, $arraydel){
    foreach($array as $key => $obj){
        foreach($arraydel as $del){
            if ($obj === $del){
                unset($array[$key]);
            }
        }
    }
    $array = array_values($array);

    return $array;
}

function countValues($array){
    $counter = [];
    foreach($array as $word){
        if(isset($counter[$word])){
            $counter[$word]++;
        } else{
            $counter[$word] = 1;
        }
    }
    return $counter;
}

function maxWords($array){
    arsort($array);
    return array_slice($array, 0, 5, true);
}

?>