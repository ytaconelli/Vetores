<?php
$num = $_GET["num"];
$y = 0;
for($x = 1;$x <= $num ; $x++){
    if($num % $x == 0){
        $y++;
    }
   
}
if($y == 2){
    echo $num . " é Primo";
}
else{
    echo $num . " não é Primo";
}