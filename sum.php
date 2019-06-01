<?php

// 13　関数



function sum($max) {
    $result = 0;
    
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }

    return $result;
    
    
}
echo sum(100);

echo "\n";

function print_number(){
    for($i = 0; $i < 100; $i++){
        echo $i;
    }
}

$string = "ABCDEF";
echo strlen($string);

echo "\n";
$string = "I love Ruby!";

$new_string = str_replace("Ruby", "PHP", $string);

echo $new_string;

echo "\n";

$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);

echo "\n";

$array = array(2,5,9,7,3,1,8,6,4);

arsort($array);

print_r($array);








?>