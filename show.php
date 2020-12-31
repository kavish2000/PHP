<?php

    include ("dbconnection.php");

    $q = "select * from user";
    $query = mysqli_query($conn,$q);

?>


	<table >
	<tr>
	<th><b><u>ID</u></b></th>
	<th><b><u>NAME</u></b></th>
	<th><b><u>EMAIL</u></b></th>
	<th><b><u>PHONE</u></b></th>
	<th><b><u>CREATED DATE</u></b></th>
    <th><b><u>UPADTED DATE</u></b></th>

               
	</tr>
	
	<?php
		$sql8="select * from user";
	  $result = $conn1->query($sql8);
		while($row=$result->fetch_array())
		{ 
		$id = $row['id'];
        echo "<tr>";
		echo "<td>" .$row['id']. "</td>";
	    echo "<td>" .$row['username']. "</td>";
		echo "<td>" .$row['email']. "</td>";
		echo "<td>" .$row['phoneno']. "</td>";
		echo "<td>" .$row['create_date']. "</td>";
        echo "<td>" .$row['update_date']. "</td>";
        
       
        echo "</tr>";
        
		}
    
        
	?>
