<?php
session_start();


if(isset($_POST['submit']))
{


$db = "ojb";
$host = "localhost";
$passwd= "";
$user = "root";
$con = mysqli_connect($host,$user,$passwd,$db);
$username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['confirmpassword'];
$job=$_POST['job'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$gender=$_POST['gender'];

if($password == $cpassword)
{
$check="SELECT  * from register where user_name= '$username'";
$result= mysqli_query($con,$check);
$rows=mysqli_num_rows($result);
if($rows<1)
{
  $qu = " INSERT INTO `register`(`user_name`, `password`, `catagory`, `email`, `phone_number`, `gender`) VALUES ('$username','$password','$job','$email','$phonenumber','$gender'); ";
  
  $resu= mysqli_query($con,$qu);
  //header("Location: ?insernted sdfpkmsd;lfkgs;ldfgm;lsfdmg;sfmgs;l;");
echo $username,"  ";
echo $password,"  ";
echo $cpassword,"  ";
echo $job,"  ";
echo $email,"  ";
echo $phonenumber,"  ";
echo $gender,"  ";

  //exit();
}
else{
  //header("Location: ?suername exists               it exists");
  echo "Username exists";
//  exit();
}




}
else {
  //header("Location: ?sfklmsdv;lsvlsdmv;ls");
  echo "Password donot match";
  //exit();
}



}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job Board</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">home</a></li>
                                            </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Register</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

  
    <!-- featured_candidates_area_end  -->
<div class="container" style="background-color:     #0066ff; width: 200%; margin: 0;">
     <form action="#" style="width: 100%;margin: 0; ">
         <div class="form-group">
             
                <label for="usr">Name:</label>
             <input type="text" class="form-control" id="usr" name="username" placeholder="Enter username">
             
         </div>
         <div class="form-group">
             <label for="pwd">Password:</label>
             <input type="password" class="form-control"id="pwd" name="password" placeholder="Enter password">
         </div>
         <div class="form-group">
             <label for="Cpwd">Confirm password</label>
             <input type="password"class="form-control" id="Cpwd" name="confirm password" placeholder="Enter password again">
         </div>
         <div class="form-group">
             <label for="email">Email:</label>
             <input type="email"class="form-control" id="email" name="email" placeholder="example@ojb.com">
         </div>
         <div class="form-group">
             <label for="Phone Number">Phone Number</label>
             <input type="tel" class="form-control" id="Phone Number" name="Phone Number" placeholder="Enter Phone Number">
            

         </div>
         <div class="form-check">
         <label class= "form-check-label"for=" radio1">
         <input type="radio" class="form-check-input" id="radio1" name="radio1" value="option1"> Female</label>

         </div>
         <div class="form-check">
             <label class="form-check-label"for="radio2">
                 <input type="radio"class="form-check-input"id="radio2"
                 name="radio2"
                 value="optio2" >Male
             </label>
         </div>
         
         <div class="form-group">
             <label for="Cv">Upload Cv</label>
             <input type="file" class="form-control-file border" name="file">
         </div>
         <button type="submit" class="btn btn-primary">Create account</button>


    <!-- footer start -->
   
   
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
</body>

</html>