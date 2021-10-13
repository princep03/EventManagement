<?php
$id=$_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1529";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("Delete FROM `events` where id='$id'");

echo '<script type="text/javascript">
           window.location = "AdminViewEvent.php";
      </script>';

?>