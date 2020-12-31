<?php 

function valid($arr) 
{

 if ( !filter_var($arr, FILTER_VALIDATE_EMAIL))
  { 
	echo("$arr  :- not a valid email address"); 
  } 
else 
 { 
	echo(" $arr  :- a valid email address"); 
  } 
}

$email = "kmk12345@gmail.com";
valid($email);
echo "<br><br>";
$email2 = "1234343kkmk#gmail.com";
valid($email2);

?> 
