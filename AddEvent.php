<?php
/*** check if a file was submitted ***/
if(isset($_POST['submit']))
    {
    $categories=$_POST['categories'];
    $subtype=$_POST['subtype'];
	$eventDesc=$_POST['eventDesc'];
    $eventDate=$_POST['eventDate'];
    $eventLoc=$_POST['locations'];

        /*** connect to db ***/
        $dbh = new PDO("mysql:host=localhost;dbname=1529", 'root', '');

                /*** set the error mode ***/
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            /*** our sql query ***/
        $stmt = $dbh->prepare("INSERT INTO `events`(`Categories`, `SubCategories`, `Description`, `Date`, `Location`) VALUES (?,?,?,?,?)");

        /*** bind the params ***/
        $stmt->bindParam(1, $categories);
        $stmt->bindParam(2, $subtype);
		 $stmt->bindParam(3, $eventDesc);
        $stmt->bindParam(4, $eventDate);
        $stmt->bindParam(5, $eventLoc);
       

        /*** execute the query ***/
        $stmt->execute();

        echo "<script>alert('Your Event is successfully booked.');</script>";
        echo "<script type='text/javascript'> document.location = 'BookEvent.php'; </script>";
        }
?>