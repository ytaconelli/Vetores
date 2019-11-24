<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

if($num1 <= $num2){
    echo "<h1>Soma dos valores entre $num1 e $num2</h1>";
    $soma = $num1 + $num2;
    for($i=$num1;$i<=$num2; $i++){
        $soma + $i;
    }
    echo "$soma";
}

else{
    echo "<h1>Soma dos valores entre $num2 e $num1</h1>";
    $soma = $num2 + $num1;
    for($i=$num2;$i<=$num1; $i++){
        $i + $soma;
    }
    echo "$soma";
}

