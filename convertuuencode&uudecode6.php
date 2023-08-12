<?php 

$ste = "hello world";
echo $ste ."<br>";

$encode = convert_uuencode($ste);// output "+:&5L;&\@=V]R;&0"` 

echo $encode."<br>";

$decord = convert_uudecode($encode);// output "hello world"

echo $decord."<br>";


?>