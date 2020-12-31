<?php

include ("dbconnection.php");

    $q = "select * from user";
    $query = mysqli_query($conn,$q);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display</title>
  </head>
<body>
    <br><br>

	<table >
	<tr>
	<th><b><u>ID</u></b></th>
	<th><b><u>FIRST NAME</u></b></th>
    <th><b><u>LAST NAME</u></b></th>
	<th><b><u>EMAIL</u></b></th>
    <th><b><u>RATE</u></b></th>
	    <th>Delete</th>
     <th>Update</th>

               
	</tr>
	
	<?php
		$sql8="select * from user";
	  $result = $conn1->query($sql8);
		while($row=$result->fetch_array())
		{ 
		$id = $row['id'];
        echo "<tr>";
		echo "<td>" .$row['id']. "</td>";
        echo "<td>" .$row['fname']. "</td>";
        echo "<td>" .$row['lname']. "</td>";
        echo "<td>" .$row['email']. "</td>";
        echo "<td>" .$row['rate']. "</td>";
	    
       
        echo "</tr>";
        
		}
    
        
	?>
                    
</body>
</html>