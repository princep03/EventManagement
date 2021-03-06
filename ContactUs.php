<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title  -->
    <title>Contact Us</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    
    <!-- Sweet Alert Css -->
    <link href="js/sweetalert/sweetalert.css" rel="stylesheet" />
    
    <!-- JQuery DataTable Css -->
    <link href="js/dtable/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    
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
                                            <li class="nav-item active"><a class="nav-link" href="home.html">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="Login.html">Login</a></li> 
                                            <li class="nav-item"><a class="nav-link" href="Register.html">Register</a></li>                                       
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

    <!-- contact -->
    <section class="wthree-row pt-3 pb-sm-5 w3-contact" style="background-color: #9dccdcb5;">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>C</span>ontact us</h5>
            <div class="row contact-form pt-lg-5">
                <div class="col-lg-6 wthree-form-left">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        <img src="img/ContactUs.png">
                    </div>
                    <!--  //contact form grid ends here -->
                </div>
                <!-- contact details -->
                 <form  method="post">
            <div class="w3pvt-wls-contact-mid">
              <div class="form-group contact-forms editContent" style="outline: none; cursor: inherit;">
                <input type="text" name="name" class="form-control" placeholder="Name" required="">
              </div>
              <div class="form-group contact-forms editContent" style="outline: none; cursor: inherit;">
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
              </div>
              <div class="form-group contact-forms editContent" style="outline: none; cursor: inherit;">
                <input type="text" name="phone" class="form-control" placeholder="Phone" required=""> 
              </div>
              <div class="form-group contact-forms editContent" style="outline: none; cursor: inherit;">
                <textarea class="form-control" name="message" placeholder="Message" rows="3" required=""></textarea>
              </div>
              <button type="submit" name="sendmail" class="btn sent-butnn" style="outline: none; cursor: inherit;">Send</button>
            </div>
          </form>
                </div>
            </div>
            <!-- //contact details container -->
			 <?php
                  if(isset($_POST['sendmail'])) {
                      require 'PHPMailerAutoload.php';
                      $mail = new PHPMailer;
                      //$mail->SMTPDebug = 2;                               // Enable verbose debug output
                      $mail->isSMTP();                                      // Set mailer to use SMTP
                      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                      $mail->SMTPAuth = true;                               // Enable SMTP authentication
                      $mail->Username = "predictionarenateam@gmail.com";                 // SMTP username
                      $mail->Password = "8898834801";                           // SMTP password
                      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                      $mail->Port = 587;                                    // TCP port to connect to
                      $mail->setFrom('Website-User');
                      $mail->addAddress('shahaastha8@gmail.com');     // Add a recipient
                      $mail->addReplyTo($_POST['email']);
                      // print_r($_FILES['file']); exit;
                      //for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
                          //$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
                      //}
                      $mail->isHTML(true);                                  // Set email format to HTML
                      $mail->Subject = $_POST['subject'];
                          $mail->Name = $_POST['name'];
                      $mail->Email  =  $_POST['email'];
              $mail->Body =  '<h3 align=left>Name: '.$_POST['name'].'<br><br>Email: '.$_POST['email'].'<br><br>'.'Phone:'.$_POST['phone'].'<br><br>Message: '.$_POST['message'].'</h3>' ;
                                      
                  
                      
                      if($mail->send()) {
                          
                          echo "<script>alert('Thank You your message has been sent'); </script>";
                          echo "<script>window.location.href ='ContactUs.php'</script>";

                      } 
                      else {
                      
                          echo 'Message could not be sent.';
                          echo 'Mailer Error: ' . $mail->ErrorInfo;
                      }
                  }
              ?>
        </div>
    </section>
    <!-- contact -->

      
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
                                <li><a href="home.html">Home</a></li>
                                <li><a href="AboutUs.html">About</a></li>                             
                                <li><a href="ContactUs.php">Contact</a></li>
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
    

	   <!--===============================================================================================-->
<script src="js/dtable/DataTables/datatables.min.js"></script>
<script type="text/javascript">
	  $(document).ready(function(){
   $('#datatables-example').DataTable();
 });
</script>

</body>

</html>