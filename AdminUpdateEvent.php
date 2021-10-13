<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Admin Update Event</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    
    <!-- Sweet Alert Css -->
    <link href="js/sweetalert/sweetalert.css" rel="stylesheet" />

</head>

<body>

    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="#"><img src="img/core-img/logo.png" alt="" style="height:100px;"></a>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="AdminViewEvent.php">View Event</a></li>  
                                            <li class="nav-item"><a class="nav-link" href="Logout.php">Logout</a></li>                                   
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Help Line -->
                            <div class="help-line">
                                <a href="#"><i class="ti-headphone-alt"></i> +91 XXXXXXXXXX</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->

     <!-- ****** Checkout Area Start ****** -->
        <div class="checkout_area section_padding_100" style="background-color: #9dccdcb5;">
            <div class="container">
                <div class="row">
                <div class="col-12 col-md-3">
                </div>
                    <div class="col-12 col-md-6">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-page-heading">
                                <h5>Update Events</h5>
                                <p>Event Details</p>
                            </div>
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

    $result = $conn->query("SELECT * FROM `events` where Id='$id'");

/*include 'connection.php';
$sql = "SELECT * FROM Complaint";
$result = $conn->query($sql);*/
$i=0;
while ($row = mysqli_fetch_array($result))
        {
            $i++;

?>
                            <form action="UpdateEvent.php" method="post" enctype="multipart/form-data">
                                <div class="row">                                     
                                    <div class="col-12 mb-3">
                                        <label for="categories">Categories  <span>*</span></label>
                                        <input type="text" class="form-control" id="categories" name="categories" value="<?php echo $row['Categories']; ?>" readonly="">
                                    </div>  
                                    <div class="col-12 mb-3">
                                        <label for="subtype">Sub Type  <span>*</span></label>
                                        <input type="text" class="form-control" id="subtype" name="subtype" value="<?php echo $row['SubCategories']; ?>" readonly="">			
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">		        
                                    </select>
                                    </div>        
                                    <div class="col-12 mb-3">
                                        <label for="eventName">Event Date <span>*</span></label>
                                        <input type="text" class="form-control" id="eventDate" name="eventDate" value="<?php echo $row['date']; ?>">
                                    </div>  
                                    <div class="col-12 mb-3">
                                        <label for="eventPrice">Event Location <span>*</span></label>
                                        <input type="text" class="form-control" id="locations" name="locations" value="<?php echo $row['Location']; ?>">
                                    </div>   
                                    <div class="col-12 mb-3">
                                        <label for="eventDesc">Event Description <span>*</span></label>
                                        <textarea class="form-control" id="eventDesc" name="eventDesc" style="height:100px;" ><?php echo $row['Description']; ?></textarea>                                    
                                    </div>               
                                      <button type="submit" name="submit" id="submit" class="col-12 mb-3 btn karl-checkout-btn">
                                      <!-- <a href="#" class="btn karl-checkout-btn">Place Order</a>  -->
                                      Update Events
                                      </button>                                                               
                                </div>
                            </form>

                        <?php
                        }
                        ?>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-3">
                    </div>
                    

                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->  

      
        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="AdminViewEvent.php">Home</a></li>
                            </ul>
                        </div>
                    </div>
                   
                    
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    
    <!-- Sweet Alert Plugin Js -->
	<script src="js/sweetalert/sweetalert.min.js"></script>
    
    <script type="text/javascript">
	   function getStatus(){
		   var inquiry=document.getElementById("categories").value;
		    if(inquiry.trim() == "" || inquiry.trim() == " "){
		    	 swal({title: '',text: 'Please select the categories', type: 'warning',confirmButtonText: 'OK'});
		    	 $("#subtype").html("<option value=''>Select Sub Type</option>");
		    }
		    else if(inquiry.trim() == "Party"){
		    	$("#subtype").html("<option value=''>Select Sub Type</option>"+		    			
		    			"<option value='Birthday'>Birthday</option>"+
		    			"<option value='House Warming'>House Warming</option>"+
		    			"<option value='Farewell'>Farewell</option>");
		    }
		    else if(inquiry.trim() == "Wedding"){
		    	$("#subtype").html("<option value=''>Select Sub Type</option>"+		    		
		    			"<option value='Sangeet'>Sangeet</option>"+
		    			"<option value='Reception'>Reception</option>"+
		    			"<option value='Wedding Days & engagement'>Wedding Days & engagement</option>");
		    }
		    else if(inquiry.trim() == "Commercial Events"){
		    	$("#subtype").html("<option value=''>Select Sub Type</option>"+		    			
		    			"<option value='Product Launch'>Product Launch</option>"+
		    			"<option value='Felicitation & Award'>Felicitation&Award</option>"+
		    			"<option value='Corporate Meeting'>Corporate Meeting</option>");
		    }
		    /* else{
						$("#prjno").val(response);

		    } */
		    }
	   </script>

</body>

</html>