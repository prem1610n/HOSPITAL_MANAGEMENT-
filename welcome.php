<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login 1 page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login 1.php");
    exit;
?>
<?php    
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    body{ font: 14px sans-serif; text-align: center; }
     
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
            <a class="navbar-brand" href="#">STAR HEALTH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
              <li class="nav-item active" style="font-size:18px;">
                  <a class="nav-link" href="firstpage.php">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item"  style="font-size:18px;">
                  <a class="nav-link" href="link1 page.php">Our Team</a>
                </li>
                <li class="nav-item"  style="font-size:18px;">
                    <a class="nav-link" href="link2 page.php">Hospital Info </a>

                </li>
                <li class="nav-item"  style="font-size:18px;">
                    <a class="nav-link" href="covidroom.php">COVID Sp. Room Booking</a>
                  </li>
                  <li class="nav-item"  style="font-size:18px;">
                    <a class="nav-link" href="inform.php">Information</a>
                  </li>

                  
                
                
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
              
            </div>
 </nav>

<style>
body 
{
  background-image: url("dr wc 22.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  background-color:rgba(239, 246, 247, 0.904);
}
#twiti{
  

}
img {
  opacity: 0.5;
}

h5{
font-style:italic;
font-weight: bold;
color: white;
opacity: 0.8;


}
h2{
font-style:italic;
font-weight: bold;
color: white;
opacity: 0.8;
}
p{
font-style:italic;
font-weight: bold;
color: white;
}

form {
  text-align: center;
}
.inputbox{
    width:calc(100% - 40%);
}
h4{
    
    font-size:22px;
    font-style:italic;
    font-weight: bold;
}
p{
    font-weight: bold;
    font-style:italic;
}






</style>




<div class="page-header">
        <h1 class="my-3" style="text-align: center;color: white;padding-top:20px">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Star Health Hospital</h1>
    </div>
    

    <h2 class="my-2" style="text-align: center; ">This is our History</h2>

    <h2 class="py-5;"   style="font-weight: bold;font-style: italic;"> 
    Star Health Hospital
</h2>
    <p  style= "font-weight: bold;font-style: italic;font-size: 27px;opacity: 0.8; width:1200px; margin-left:250px; text-align: justify;"> 

   

Its offer comprehensive and quality medical care under one roof . It equipped with ultra modern facilities to give better health care. the medical team consists of highly qualified consultants and surgeons who are well supported by skilled and qualified paramedical staff.
The hospital operates under the standard of Hygiene and Medical Care. It is clean, spacious and well lit.  The diagnosis and treatment of the patients are carried out by highly qualified Senior Physicians assisted by the team of doctors and paramedical staff.
 The whole effort goes about maintaining the delivery of personalized patient care in a quiet, efficient, exclusive and competent manner.
 Star Health Hospital provides a depth of expertise in the spectrum of advanced medical & surgical interventions, comprehensive mix of inpatient and outpatient services.
  Star Health Hospital has put modern technology in the hands of renowned from across the country and abroad to set new standards in healthcare. 
 

</p>
<div class="my-4">
    <h2> For Doctor information</h2><p>
                  <a href="emp.php"  style="font-style:italic;font-weight: bold; font-size: 25px;"  class="btn-outline-success">Click Here</a>
                </p>
</div>








<div align="center">
    <p>
    </br>
        <a href="reset-password.php"  style="font-style:italic;font-weight: bold; font-size: 20px;" class="btn btn-warning" class="py-2">Reset Your Password</a></br>
</br>

<p></p> 

        <a href="logout.php" style="font-style:italic;font-weight: bold; font-size: 20px;" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>