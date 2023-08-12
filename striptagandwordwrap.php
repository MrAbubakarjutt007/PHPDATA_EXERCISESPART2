<?php

$str = "i love my <b>world</b> becouse he is very <i>beauifull</i>.";
echo $str;
// after using
// echo  strip_tags($str,"<i>");//use for removing tags
echo  wordwrap($str,2,"<br>");//use for removing tags

?>