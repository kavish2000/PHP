<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT ARRAY </title>
</head>
<body style="background-color :red">
    
<?php

class Product
{

     public function product_list($product)
     {
        echo "<h2 style=color:green>Product List</h2>";
        $key = array_keys($product);
		for($j = 0; $j < count($product); $j++)
		 {
            foreach($product[$key[$j]] as $k => $v) 
            {
                echo $k . " : " . $v . "<br>";
            }
            echo "<br>";
        }
     }

     public function product_name($product)
     {
        array_column($product,'name');
        asort($product);
        
        echo "<h2 style=color:purple>Product By  Name</h2>";
        $keys = array_keys($product);
		for($k = 0; $k < count($product); $k++) 
		{
            foreach($product[$keys[$k]] as $key => $value) 
            {
                echo $key . " : " . $value . "<br>";
            }
            echo "<br>";
        }
     }



     
     public function product_price($product)
     {
        array_column($product,'price');
        asort($product);
        
        echo "<h2 style=color:blue>Product By  price</h2>";
        $keys = array_keys($product);
		for($i = 0; $i < count($product); $i++)
		 { 
            foreach($product[$keys[$i]] as $key => $value)
             {
                echo $key . " : " . $value . "<br>";
            }
            echo "<br>";
        }
     }

     public function product_date($product)
     {
        
        function comparision($d1, $d2) { 
            $date1 = strtotime($d1['added_date']); 
            $date2 = strtotime($d2['added_date']); 
			$dt =  $date1 - $date2;
			return $dt; 
        }  
        
        usort($product, 'comparision'); 
         
        echo "<h2 style=color:yellow>Product By Date</h2>";
        $keys = array_keys($product);
		for($l = 0; $l < count($product); $l++)
		 {
            foreach($product[$keys[$l]] as $key => $value) 
            {
                echo $key . " : " . $value . "<br>";
            }
            echo "<br>";
        }
     }

     public function product_table($products)
     {
        echo "<h2 style=color:green> Product table</h2>";
        echo "<table style=color:blue border=4><tr><td>Name</td><td>Quantity</td><td>Price</td><td>Added Date</td></tr>";
        
        foreach ($products as $product)
        {
            echo "<tr><td>". $product['name'] . "</td><td>". $product['quantity'] . "</td><td>" . $product['price'] . "</td><td>" . $product['added_date'] . "</td></tr>";
        }
        echo "</table>";

     }
}



$product_array = array(array( "name"=>"Perfume","quantity"=>"3", "price"=>"500","added_date"=>"12-12-2020"  ),
array(  "name"=>"Bottle","quantity"=>"5","price"=>"250","added_date"=>"2-12-2020"),
array( "name"=>"Bag", "quantity"=>"4", "price"=>"169", "added_date"=>"20-12-2020" ));


$pro = new Product();
$pro->product_list($product_array);
$pro->product_name($product_array);
$pro->product_date($product_array);
$pro->product_price($product_array);
$pro->product_table($product_array);



?>






</body>
</html>