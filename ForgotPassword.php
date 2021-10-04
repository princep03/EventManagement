<?php
$email=$_POST['email'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_management";
use PHPMailer\PHPMailer\PHPMailer;

require 'C:/xampp/htdocs/autoload.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = $conn->query("SELECT * FROM `users` WHERE Email='$email'");
while ($row = mysqli_fetch_array($result))
{


	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "email";
	$mail->Password = "password";
	$mail->setFrom('email', 'Catering Management');
	$mail->addReplyTo('email', 'Catering Management');
	$mail->addAddress($email, '');
	$mail->Subject = 'Forgot Password';
	$mail->msgHTML('The password for your account in our system is '.$row['Password']);

	if (!$mail->send()) {
	       echo '<script type="text/javascript">
            alert("Forgot Password mail could not be send. Please try again.");
           window.location = "ForgetPassword.html";
      </script>';
	} else {
	       echo '<script type="text/javascript">
            alert("Forgot Password mail send to user");
           window.location = "Login.html";
      </script>';
	}

}