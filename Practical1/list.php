<?php

$color = array('white','green','red');

sort($color);
echo "<ol type='1'>";

echo "Answer is" . "<br>";

foreach($color as $p)
{
        $q="<li>$p</li>";
        echo $q; 
}

echo "</ol>";

?>