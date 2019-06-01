<?php
echo 'hello php!';


$a = 3;
$b = 7;
echo $a + $b;
echo $a + $b;
?>
<?php
$integer = 20;
$string = "abc";
echo $integer;
echo $string;
$new_integer = $integer + 10;
echo $new_integer;
$red_fruit = "apple";
$yellow_fruit = 'Banana';
echo $red_fruit;
echo $yellow_fruit;
$array = [2017, 2018, 2019, 2020];
echo $array[0];
echo $array[2];
$array2 = ["spring", "summer", "autumn", "winter"];
echo $array2[2];
$animals = [
    "cat" => "猫",
    "dog" => "犬",
    "bird" => "鳥",
    ];
    echo $animals["cat"];
    
    $result = true;
    if ($result == true){
        echo "成功しました";
    } else {
        echo"失敗しました。";
    }
    
    $value = 6;
    echo $value + 2;
    
    $value = 6;
    echo $value - 2;
    
    $value = 6;
    echo $value* 2;
    
    $value = 6;
    echo $value / 2;
    
    $value = "AAA";
    echo $value . "BBB";
    
    $value = 10;
    $result = $value == 20;
    var_dump($result);
    
    $value = 10;
    $result = $value < 20;
    var_dump($result);
    
    $value = 10;
    $result = $value > 20;
    var_dump($result);
    
    $a = "20";
    $b = 20;
    
    $result = $a == $b;
    var_dump($result);
    $result = $a === $b;
    var_dump($result);
    
    $value = 10;
    ++$value;
    echo $value;
    $value = 10;
    --$value;
    echo $value;
    
    $value = 10;
    $value += 5;
    echo $value;
    
    $value = 10;
    $value -= 5;
    echo $value;
    
    $value = 'apple';
    $value .= ' orange';
    echo $value;
    
    $value = 10;
    $result = ($value < 20) ? '$valueは20より小さい' : '$valueは20と等しいかまたは大きい';
    
    echo $result;
    
    $value = 10;
    $result = ($value < 20) ? "$value は 20より小さい" : "$value は 20と等しいかまたは大きい";
    
echo $result;

$a = 3;
$b = 7;
echo $a + $b;
echo "\n";


$height = 230;
if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200){
    echo "200cm　以上の方はご乗車できません。";
}else {
    echo "ご乗車になれます。";
}

echo "\n";

$weekday = "木曜";

switch ($weekday) {
case "月曜":
case "木曜":
echo "可燃ごみの日です。";
break;
case "水曜":
echo "資源ごみの日です。";

default;
echo "回収はありません。";

}

echo "\n";
$a = 3;
$b = 3;
$c = "3";

var_dump($a == $b);
var_dump($a != $b);
var_dump($a > $b); 
var_dump($a >= $b);
var_dump($a >= $b);

echo "\n";

// 13　関数

function sum(){
    $result = 0;
    
    for($i = 1; $i <= 10; $i++){
        $result += $i;
    }
    }
    echo $result;
    


echo "\n";

// 練習　12

$total = 0;
echo $total;
//=> 0 と表示される。

// $iが0から始まり、$iが１００以下の間繰り返し処理を行う。
for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;


?>
