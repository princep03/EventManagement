<?php
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $categories=$_POST['categories'];
    $subtype=$_POST['subtype'];
    $eventDate=$_POST['eventDate'];
    $eventLoc=$_POST['locations'];
    $eventDesc=$_POST['eventDesc'];

        /*** connect to db ***/
    $dbh = new PDO("mysql:host=localhost;dbname=1529", 'root', '');

            /*** set the error mode ***/
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** our sql query ***/
    $stmt = $dbh->prepare("UPDATE `events` SET `Categories`=?,`SubCategories`=?,`Description`=?,`date`=?,`Location`=? WHERE `Id`=?");

    /*** bind the params ***/
    $stmt->bindParam(1, $categories);
    $stmt->bindParam(2, $subtype);
    $stmt->bindParam(3, $eventDesc);
    $stmt->bindParam(4, $eventDate);
    $stmt->bindParam(5, $eventLoc);
    $stmt->bindParam(6, $id);
    /*** execute the query ***/
    $stmt->execute();
         echo "<script>alert('Your Event is successfully updated.');</script>";
        echo "<script type='text/javascript'> document.location = 'AdminViewEvent.php'; </script>";
}
?>