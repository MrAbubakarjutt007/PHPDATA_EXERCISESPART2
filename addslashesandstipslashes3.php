<?php

$f = "I Love My Country";

echo $f."<br>" ;

$new = addcslashes($f,"A..Z");// this function add slacthes befour single cotes "", ''.

echo stripcslashes($new);


  ?>