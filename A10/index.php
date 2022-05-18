<?php

$str = "ayush";
$str1 = ['a','y'];
$str3 = " ayush Rajgor ";
$str4 = "<h1> ayush";

$len = strlen($str);
$rev = strrev($str);
$strstr = strstr($str, "ay");
$strpos = strpos($str,'u');
$str_replace = str_replace('a','b',$str);
$substr = substr($str, 2);

echo "len: ",$len,"<br>","rev: ",$rev,"<br>", "strstr: ",$strstr,"<br>","strpos: ", $strpos,"<br>",
"str_replace: ",$str_replace,"<br>","substr: ", $substr,"<br>";

echo "<br>";
trim($str3);
echo "trim: ",$str3,"<br>";
ltrim($str3);
echo "ltrim: ",$str3,"<br>";
rtrim($str3);
echo "rtrim: ",$str3,"<br>";

echo"<br>";
$strupper = strtoupper($str);
$strlower = strtolower($str);
$ucfirst = ucfirst($str);
$lcfirst = lcfirst($str);
$ucwords = ucwords($str);

echo "str_upper: ",$strupper,"<br>","str_lower: ",$strlower,"<br>","ucfirst: ", $ucfirst,"<br>",
"lcfirst: ", $lcfirst,"<br>","ucwords: ", $ucwords,"<br>";

echo"<br>";
echo "explode: ";
print_r (explode(" ",$str3));
echo "<br>";
echo "implode: ";
print_r(implode("", $str1));
echo "<br>";

$strtok = strtok($str3, " ");
$str_tags = strip_tags($str4);

echo "strtok: ",$strtok,"<br>", "str_tags: ",$str_tags,"<br>";

?>