<?php

// 課題1
$name = "Kimiko";
if ($name == "Kimiko") {
    echo "わたしは Kimiko です。";
    } else {
    echo  "Kimiko ではありません。";
    }

    echo "\n";

// 課題2

$total = 0;
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
    }
    echo $total;
 
    echo "\n";
 
 //課題3
$fruits = array("banana", "apple", "pair","strawberry", "melon");

foreach ($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}
    
 // 課題4
 
 $start = 1;
 $end = 100;
 
 for($i = $start; $i < $end; $i++){
     
 if($i % 5 == 0)
     echo $i;
 }
 



 //課題完了
 
?>