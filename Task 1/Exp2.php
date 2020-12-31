
<?php

$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
print_r($month);
$index=array_search('June',$month);
unset($month[$index]);
echo "<br>";
print_r($month);

?>
