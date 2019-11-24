<?php
$i = $_GET["num"];
$num = 1;
for($i;$i > 1;$i--){
  $num = $num*$i;
}
echo $num;