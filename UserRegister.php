<?php

	$name=$_POST['name'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $mobileNo=$_POST['mobileNo'];
    $gender=$_POST['gender'];
    $pass=$_POST['password'];
    $address=$_POST['address'];


    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "event_management";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	    $result = $conn->query("SELECT * FROM `users` WHERE Email='$email'");

	/*include 'connection.php';
	$sql = "SELECT * FROM Complaint";
	$result = $conn->query($sql);*/
	$i=0;
	if ($row = mysqli_fetch_array($result)){
		echo '<script type="text/javascript">
			alert("This email is already registered. Please try with another email.");
           window.location = "Register.html";
      </script>';
	}else{
		$conn->query("INSERT INTO `users`(`Name`, `Email`, `MobileNo`, `Password`, `City`, `Gender`,address) VALUES ('$name','$email','$mobileNo','$pass','$city','$gender','$address')");
		echo '<script type="text/javascript">
			alert("Registration Successful!!!");
           window.location = "Register.html";
      </script>';
	}

?>