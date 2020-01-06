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
$check="SELECT  * from registor where user_name= '$username'";
$result= mysqli_query($con,$check);
$rows=mysqli_num_rows($result);
if($rows<1)
{
  $qu = " INSERT INTO `registor`(`user_name`, `password`, `catagory`, `email`, `phone_number`, `gender`) VALUES ('$username','$password','$job','$email','$phonenumber','$gender'); ";
  
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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <script src="js/bootstrap.js/"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/proper.js/"></script>
    <link rel="stylesheet" a href="css/complete css.css/">

    <title>basic bootstrap claasees</title>
</head>
<body>
 <div class="container">
     <form action="index.php" method="post">
         <div class="form-group">
             <label for="usr">Name:</label>
             <input type="text" class="form-control" id="usr" name="username" placeholder="Enter username" required>

         </div>
         <div class="form-group">
             <label for="pwd">Password:</label>
             <input type="password" class="form-control"id="pwd" name="password" placeholder="Enter password" required>
         </div>
         <div class="form-group">
             <label for="Cpwd">Confirm password</label>
             <input type="password"class="form-control" id="Cpwd" name="confirmpassword" placeholder="Enter password again" required>
         </div>
                  <div class='form-group' >
            <label for="" class="control-label col-sm-3">
                            Category
                    </label>
                    <div class="col-sm-8"><select multiple="multiple" id="JobCategory" class="search-select search-select-multi form-control input-sm fieldTypeJobCategory" name='job' required>
        <option value='831'   >Accounting and Finance</option>
        <option value='344'   >Admin, Secretarial and Clerical</option>
        <option value='694'   >Agriculture</option>
        <option value='345'   >Automotive</option>
        <option value='346'   >Banking and Insurance</option>
        <option value='347'   >Pharmaceutical</option>
        <option value='373'   >Business and Administration</option>
        <option value='348'   >Business Development</option>
        <option value='350'   >Consultancy and Training</option>
        <option value='352'   >Creative Arts</option>
        <option value='351'   >Customer Service</option>
        <option value='691'   >Development and Project Management</option>
        <option value='695'   >Economics</option>
        <option value='354'   >Education</option>
        <option value='355'   >Engineering</option>
        <option value='359'   >Event Management</option>
        <option value='387'   >Retail, Wholesale and Distribution</option>
        <option value='365'   >Health Care</option>
        <option value='366'   >Hotel and Hospitality</option>
        <option value='367'   >Human Resource and Recruitment</option>
        <option value='368'   >Information Technology</option>
        <option value='371'   >Inventory and Stock</option>
        <option value='372'   >Legal</option>
        <option value='395'   >Logistics, Transport and Supply Chain</option>
        <option value='832'   >Management</option>
        <option value='374'   >Manufacturing</option>
        <option value='375'   >Sales and Marketing</option>
        <option value='376'   >Media and Journalism</option>
        <option value='362'   >Environment and Natural Resource</option>
        <option value='692'   >Natural Sciences</option>
        <option value='382'   >Purchasing and Procurement</option>
        <option value='383'   >Quality Assurance</option>
        <option value='385'   >Research and Development</option>
        <option value='389'   >Science and Technology</option>
        <option value='693'   >Social Sciences and Community</option>
        <option value='392'   >Warehouse, Supply Chain and Distribution</option>
        <option value='393'   >Telecommunications</option>
        <option value='361'   >Travel and Tourism</option>
        <option value='396'   >Veterinary Services</option>
        <option value='364'   >Water and Sanitation</option>
        <option value='901'   >Advertising and Media</option>
        <option value='902'   >Architecture and Construction</option>
        <option value='903'   >Civil Service and Government</option>
        <option value='904'   >Communications, PR and Journalism</option>
        <option value='905'   >Community Service</option>
        <option value='906'   >Entertainment</option>
        <option value='907'   >Languages</option>
        <option value='908'   >Maintenance</option>
        <option value='909'   >Security</option>
        <option value='910'   >Strategic Planning</option>
        <option value='947'   >Energy</option>
    </select>
</div>
            </div>
         <div class="form-group">
             <label for="email">Email:</label>
             <input type="email"class="form-control" id="email" name="email" placeholder="example@ojb.com" required>
         </div>
         <div class="form-group">
             <label for="Phone Number">Phone Number</label>
             <input type="tel" class="form-control" id="Phone Number" name="phonenumber" placeholder="Enter Phone Number" required>


         </div>
         <div class="form-check">
         <label class= "form-check-label"for=" radio1">
         <input type="radio" class="form-check-input" id="radio1" name="gender" value="Female"> Female</label>
         <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male"> Male</label>

         </div>


         <div class="form-group">
             <label for="Cv">Upload Cv</label>
             <input type="file" class="form-control-file border" name="file">
         </div>
         <button type="submit" name="submit" class="btn btn-primary">Create account</button>
     </form>
     <a href="C:\Users\kirubel\Desktop\OJB\home\home.html">back to home page</a>
 </div>
</body>
</html>
