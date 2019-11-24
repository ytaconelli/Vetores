<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

if($num1 <= $num2){
    echo "<h1>Valores entre $num1 e $num2</h1>";
    for($i=$num1+1;$i<$num2; $i++){
        echo "$i <br>";
    }
}

else{
    echo "<h1>Valores entre $num2 e $num1</h1>";
    for($i=$num2+1;$i<$num1; $i++){
        echo "$i <br>";
    }
}

