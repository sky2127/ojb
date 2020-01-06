<?php
if(isset($_POST['submit']))
{


$db = "ojb";
$host = "localhost";
$passwd= "";
$user = "root";
$con = mysqli_connect($host,$user,$passwd,$db);
$companyname=$_POST['companyname'];
$phonenumber=$_POST['phonenumber'];
$companyemail=$_POST['companyemail'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$website=$_POST['website'];

if($password == $cpassword)
{
$check="SELECT  * from company_registor where company_name= '$companyname'";
$result= mysqli_query($con,$check);
$rows=mysqli_num_rows($result);
if($rows<1)
{
  $qu= "INSERT INTO `company_registor`(`company_name`, `phone_number`, `email`, `password`, `website`) VALUES('$companyname','$phonenumber','$companyemail','$password','$website');";
  $resu= mysqli_query($con,$qu);
  echo $companyname,"  ";
  echo $phonenumber,"  ";
  echo $companyemail,"  ";
  echo $password,"  ";
  echo $website,"  ";
}
else{
  echo "Username exists";
}
}
else {
  echo "Password donot match";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <script src="js/bootstrap.js/"></script>
    <script src="js/jquery-3.4.1.min.js?"></script>
    <script src="js/proper.js/"></script>
    <link rel="stylesheet" a href="css/complete css.css/">

    <title>basic bootstrap claasees</title>
</head>
<body>
 <div class="container">
     <form action="index.php" method="post">
         <div class="form-group-sm">
             <label for="companyname">Name:</label>
             <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Enter Company Name">
         </div>
         <div class="form-group">
                <label for="phonenumber">Phone Number</label>
                <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter Phone Number">


            </div>
            <div class="form-group">
                <label for="companyemail">Email:</label>
                <Input type="email" id="cEmail" name="companyemail" class=
                "form-control"placeholder="Enter company Email">
            </div>
            <div class="form-group">
                <label for="password">Enter Password</label>
                <input type="password" id="logo" name="password"class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                    <label for="Cpassword">Confirm Password</label>
                    <input type="password" id="ConfirmCompanyPassword" name="cpassword"class="form-control" placeholder="Enter Password Again">
                </div>
                <div class="from-group">
                  <label for="website"> website</label>
                  <input type="text" name="website" id="website" class="from-control" placeholder="Enter website">
                </div>
            <div class="form-group">
                <label for="Logo">Company Logo</label>
                <input type="file" id="logo"name="companylogo" class="form-control-file border">
            </div>
            <button class="btn btn-primary bottom-right" name="submit" type="submit"  >Create Account</button>
     </form>
     <a href="C:\Users\kirubel\Desktop\OJB\home\home.html">back to home page</a>
 </div>

</body>
</html>
