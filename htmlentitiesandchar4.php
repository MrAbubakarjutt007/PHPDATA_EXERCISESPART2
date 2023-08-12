<?php

$str = "a 'quots' is <b>bolt</b> my country is very beautifull."; 

// $str = '<a "hraf= #"> i love my country</a>';

echo $str ."<br>";

echo htmlentities($str);
// echo htmlspecialchars($str,ENT_QUOTES);


 ?>