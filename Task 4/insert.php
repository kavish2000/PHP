<?php

  include ("dbconnection.php");

  $nameErr = $emailErr =  $passErr = $phoneErr = "";
  $username = $email  = $password =  $phone  = "";


  if(isset($_POST['submit']))
  { 
     
    $username=$_POST['name'];
    $email=$_POST['email'];
    $password=sha1($_POST['pass']);
    $phone=$_POST['phone'];
    $dt=date('y-m-d');

    $que= "INSERT INTO user(username,email,password,phoneno,create_date,update_date) VALUES('$username','$email','$password','$phone','$dt','$dt')";

    if ($conn1->query($que) === TRUE) {
        echo "Data inserted successfully";
      } else {
        echo "Error in insert: " . $conn1->error;
      }

  }

   
	else if(isset($_POST['sub']))
	{
    ?>
    
	<table >
	<tr>
	<th><b><u>ID</u></b></th>
	<th><b><u>NAME</u></b></th>
	<th><b><u>EMAIL</u></b></th>
	<th><b><u>PHONE</u></b></th>
	<th><b><u>CREATED DATE</u></b></th>
    <th><b><u>UPADTED DATE</u></b></th>
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
	    echo "<td>" .$row['username']. "</td>";
		echo "<td>" .$row['email']. "</td>";
		echo "<td>" .$row['phoneno']. "</td>";
		echo "<td>" .$row['create_date']. "</td>";
        echo "<td>" .$row['update_date']. "</td>";
        $c="delete.php?id=$id";
        echo "<td><a  href=$c >delete</a></td>";
        $t="update_form.php?id=$id";
        echo "<td><a  href=$t >update</a></td>";
        
       
        echo "</tr>";
        
		}
    
  }    
	?>