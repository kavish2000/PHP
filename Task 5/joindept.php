
<?php

include ("dbconnection.php");


$nameErr = $emailErr = $passwordErr = $phoneErr = $depErr = "";
$name =   $email =   $password =   $phone =   $dept ="";


	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
    if (empty($_POST["name"])) 
	{
        $nameErr = "Name is required";
    }
    else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    }
    else {
        $email = test_input($_POST["email"]);
    }
	
	if (empty($_POST["phone"])) {
        $phoneErr = "Phoneno is required";
    }
    else {
        $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["pass"]))  {
        $passwordErr = "Password is required";
    }
    else {
	  $password = sha1(test_input($_POST["pass"]));
	  

    }
	
    if (empty($_POST["dept"])) {
        $depErr = "department is required";
    }
    else {
        $dept = test_input($_POST["dept"]);
    }
	}
	
		
	function test_input($data) 
	{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	
	
	
	if(isset($_POST['input1']))
	{
	
		if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["pass"]) && !empty($_POST["phone"]) && !empty($_POST["dept"])  )
	
	{
	
		
	$depid  = (int) test_input($_POST["dept"]);
	
	$dt = date('Y-m-d');
	
	
	$sql="INSERT INTO user(username,email,password,phoneno,create_date,update_date,depart_id) VALUES
	('$name','$email','$password','$phone','$dt','$dt' , '$depid')";
	
	if($conn1->query($sql)==true)
	{
	echo "Data successful" ."<br>";
	}
	else
	{
	echo "Error : at a data insert : ".$conn1->error;
	}
	
  }
	}
	
	
	else if(isset($_POST['sub']))
	{
	?>
	
	<table >
	<tr>
	<th><b><u>DEPARTMENT ID</u></b></th>
	<th><b><u>DEPARTMENT NAME</u></b></th>
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
		echo "<td>" .$row['depart_id']. "</td>";
		$q=$row['depart_id'];
		$sql9 ="SELECT * from department where depart_id=$q";
		$result2 = $conn1->query($sql9);
		while($row2=$result2->fetch_array())
		{ 
	
		echo "<td>" .$row2['depart_name']. "</td>";
		}

		echo "<td>" .$row['id']. "</td>";
	    echo "<td>" .$row['username']. "</td>";
		echo "<td>" .$row['email']. "</td>";
		echo "<td>" .$row['phoneno']. "</td>";
		echo "<td>" .$row['create_date']. "</td>";
		echo "<td>" .$row['update_date']. "</td>";
		echo "</tr>";
		}
	}
	?>
		
	
