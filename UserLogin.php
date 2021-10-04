<?php
    $email=$_POST['email'];
    $pass=$_POST['password'];
    session_start();
    echo $pass;
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

	    $result = $conn->query("SELECT * FROM `users` WHERE Email='$email' AND Password='$pass'");
	if ($row = mysqli_fetch_array($result)){

		$_SESSION["UserID"]=$row['UserId'];
		$_SESSION["email"]=$email;
		echo '<script type="text/javascript">
           window.location = "UserHome.html";
      </script>';
	}else{

		echo '<script type="text/javascript">
			alert("Incorrect username or password.");
           window.location = "Login.html";
      </script>';
	}

?>