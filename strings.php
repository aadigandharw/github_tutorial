<?php

$str = "This is A Str ";
echo $str;
echo "<br>";
$lenn = strlen($str);
echo "The Lenght Of this String Is : " . $lenn . ": Thankyou SO Much ."; 
echo "<br>";
echo "The Lenght Of Words In String Is : " . str_word_count($str) . ": Thank You So Much.<br>";
echo "The Reverse String is String Is : " . strrev($str). ": Thank You So Much.<br>";
echo "The Search for is in this string is  " . strpos($str ,"is"). ": Thank You So Much.<br>";
echo "The Replace String is String Is : " . str_replace("is" , "at" ,$str). ": Thank You So Much.<br>";
echo "<script>alert('Hello This IS Aditya And Aditya Is Learning  A Php.');</script>";
?>
