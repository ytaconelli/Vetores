<?php

echo "<h1>Tabuada</h1>";

$tabuada = $_GET["tabuada"];

for($i = 0; $i<=10; $i++){
   $resultado = $tabuada * $i;
   echo "$tabuada x $i = $resultado <br>";
}