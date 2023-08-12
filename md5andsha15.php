<?php 

$str = "my country";

echo " our string : ".$str."<br><br>";
echo  md5 ($str);
// echo sha1($str);// md5 and sha1 both perform same work but sha1 is more affective then md5 it use for password secure in form.

echo "<br><br><br>";

if (md5 ($str) == "6402f7b9421466d9e89af3659a72869d") {


	 echo "our password is matched";
}
else
{
	echo "password is not matched";
}

?>