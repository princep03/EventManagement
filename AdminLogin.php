<?php

    $user=$_POST['email'];
    $pass=$_POST['password'];

    if($user=='admin' && $pass=='admin'){

    	echo '<script type="text/javascript">
           window.location = "AdminViewEvent.php";
      </script>';
    }else{
     	echo '<script type="text/javascript">
          alert("Username or password incorrect");
           window.location = "AdminLogin.html"
      </script>';
    }



?>