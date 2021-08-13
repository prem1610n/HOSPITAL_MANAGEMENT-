<?php

include('include/covidroom_connection.php');
$message = '';
$Success_message = '';
if(isset($_POST['register']))
{
	$username = trim($_POST["username"]);
	$mobile  =	trim($_POST['mobile']);
	$gender   =	trim($_POST['gender']);
	$age      =	trim($_POST['age']);
	$email	  =	trim($_POST['email']);
	$room     =	trim($_POST['room']);
	$diabetes =	trim($_POST['diabetes']);
	$hypertension = trim($_POST["hypertension"]);
	$ckd      =	trim($_POST['ckd']);
	$copd     =	trim($_POST['copd']);
	$hiv      =	trim($_POST['hiv']);
	$ihd      = trim($_POST["ihd"]);
	$cancer   =	trim($_POST['cancer']);
	$other    =	trim($_POST['other']);
	

			if($message == '')
			{
				$data = array(
					':username'		=>	$username,
					':mobile'		=>	$mobile,
					':gender'		=>	$gender,
					':age'		    =>	$age,
					':email'		=>	$email,
					':room' 		=>	$room,
					':diabetes'		=>	$diabetes,
					':hypertension' =>	$hypertension,
					':ckd'		    =>	$ckd,
					':copd' 		=>	$copd,
					':hiv'			=>	$hiv,
					':ihd'		    =>	$ihd,
					':cancer' 		=>	$cancer,
					':other'		=>	$other,
					

				);

				$query = "
				INSERT INTO tbl_employee_data
				(username,mobile,gender,age,email,room,diabetes,hypertension,ckd,copd,hiv,ihd,cancer,other) 
				VALUES (:username,:mobile,:gender,:age,:email,:room,:diabetes,:hypertension,:ckd,:copd,:hiv,:ihd,:cancer,:other)
				";

				$statement = $connect->prepare($query);

				if($statement->execute($data))
				{
					$Success_message .= 'Registration Completed';
				}
			}
		}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>




<meta charset="utf-8">



<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    </head>
    <body >
        <style>
            body {
            background-color:rgba(239, 246, 247, 0.904);
            }
            h5{
              font-style:italic;
              font-weight: bold;
            }
            h2{
              font-style:italic;
              font-weight: bold;
              
            }
			p{
              font-style:italic;
              font-weight: bold;
            }
        </style>


      
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
            <a class="navbar-brand" href="#">STAR HEALTH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto" style="font-size:18px;">
			  <a class="nav-link" href="firstpage.php">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item" style="font-size:18px;">
                  <a class="nav-link" href="link1 page.php">Our Team</a>
                </li>
                <li class="nav-item" style="font-size:18px;">
                    <a class="nav-link" href="link2 page.php">Hospital Info </a>

                </li>
                
                  <li class="nav-item" style="font-size:18px;">
                    <a class="nav-link" href="inform.php">Information</a>
                  </li>

                  <li class="nav-item" style="font-size:18px;">
                    <a class="nav-link" href="login 1.php">Login</a>
                  </li>
                
                
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
         
          <div class="jumbotron bg-gray">
            <h1>STAR HEALTH</h1>
            <p style="font-weight:bold; font-family:Baskerville Old Face ;font-size:x-large; font-size: 25px;">Star health of Hospitals represents the realization of dreams and vision of many people, but most importantly, the patient himself.<br> All Multi specialty & Super specialty hospitals of Star health is delivering total patient care in an ethical and open environment with state of the art equipment.

              It is a chain of Hospitals managed and run by expert Medical Professionals with experience of 20 years. Currently we are managing more than 350+ beds and providing qualitative healthcare services to the people of Mumbai and surrounding areas.
               </p>
          </div>
          <section class="my-5">
            <div class="py-5">
            <h2 class="text-center">COVID ROOM </h2>
            <style>
    
                /* Make the image fully responsive */
            { margin:0; padding: 0; box-sizing: border-box;}
            .carousel-inner img {
              align-self: right;
              
            }
        
            </style>
          <div class="container-fluid">
           <div class="row">
                <div id="demo" class=" carousel slide col-lg-6 col-md-6 col-12 align-right py-5" data-ride="col-lg-6 col-md-6 col-12">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
              <li data-target="#demo" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image\hospital info 1.jpg" alt="STAR HEALTH" class="img-fluid">
                <div class="carousel-caption">
                  
                </div>   
              </div>
              <div class="carousel-item">
                <img src="image\cd 22.jpg" alt="2ND " class="img-fluid">
				<div class="carousel-caption">
                
                </div>   
              </div>
              <div class="carousel-item">
                <img src="image\cd 33.jpg" alt="3RD" width="1100" height="500" class="img-fluid">
                <div class="carousel-caption">
                  
                </div>   
              </div>
              <div class="carousel-item">
                <img src="image\cd 44.jpg" alt="New York" width="1100" height="500" class="img-fluid">
                <div class="carousel-caption">
                 
                </div>   
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
                </div>
            
            <div class="col-lg-6 col-md-6 col-12 align-right py-5">
              <div class="container fluid">
              <h2 class="py-2">STAR HEALTH</h2>
              <li style="font-size: 25px;list-style:fild circle;" class="py-2 font-weight-bold"> Fully equipped intensive care units</li>
              <li style="font-size: 25px;list-style:circle;"class="py-2 font-weight-bold">Ventilators and beds with oxygen support </li>
              <li style="font-size: 25px;list-style: fild circle;"class="py-2 font-weight-bold">Essential non-COVID medical services for pregnant women and newborns</li>
              <li style="font-size: 25px;list-style:circle;"class="py-2 font-weight-bold">Dedicated basic life support ambulance(BLSA) equipped with sufficient oxygen support</li>
              
    
               
              </div>

            </div>
          </div>
		  <style>
		  h3{
			text-align: center;
			  font-weight: bold;
		  }
		  label{
			  font-weight:bold;
		  }
		  p{
              font-style:italic;
              font-weight: bold;
            }
		  </style>
		  <h3 class="py-3"> Covid Special Room booking </h3>
          <div class="w-50 m-auto">
              <div class="container">

        <form  method="post">
					
						
						<script>
						function popUp(){
							swal({
								title: "FORM IS Success",
								text: "<?php echo $Success_message; ?>",
								icon: "success",
								
							});
						}
						</script>
					
						<div class="form-group">
							<label style="bold">Name</label>
							<input type="text" name="username" class="form-control" />
						</div>

						<div class="form-group">
							<label>Enter mobile</label>
							<input type="text" name="mobile" class="form-control" />
						</div>
						
						<div class="form-group">
							<label>Select Gender</label><br>
							<input type="radio" id="male" name="gender" value="male" checked>
							<label for="male">Male</label>
							<input type="radio" id="female" name="gender" value="female">
							<label for="female">Female</label>
							<input type="radio" id="other" name="gender" value="other">
							<label for="other">Other</label>
						</div>

						<div class="form-group">
							<label>Age</label>
							<input type="text" name="age" class="form-control" />
						</div>


						<div class="form-group">
							<label>Enter Email</label>
							<input type="email" name="email" class="form-control" />
						</div>

						<div class="form-group">
							<label>DO you want to stay in a ventilated single room with</label><br>
							<input type="radio" id="yes" name="room" value="yes" checked>
							<label for="yes">yes</label>
							<input type="radio" id="no" name="room" value="no" >
							<label for="no">no</label>
							
						</div>


						<div class="form-group">
							<label>DO you have  Diabetes</label><br>
							<input type="radio" id="yes" name="diabetes" value="yes" >
							<label for="yes">yes</label>
							<input type="radio" id="no" name="diabetes" value="no"checked>
							<label for="no">no</label>
							
						</div>

						<div class="form-group">
							<label>DO you have Hypertension</label><br>
							<input type="radio" id="yes" name="hypertension" value="yes" >
							<label for="yes">yes</label>
							<input type="radio" id="no" name="hypertension" value="no"checked>
							<label for="no">no</label>
							
						</div>

						<div class="form-group">
							<label>DO you have CKD(Chronic Kideny Disease)</label><br>
							<input type="radio" id="yes" name="ckd" value="yes" >
							<label for="yes">yes</label>
							<input type="radio" id="no" name="ckd" value="no"checked>
							<label for="no">no</label>
							
						</div>

						<div class="form-group">
							<label>DO you have have any breathing problem Diseases like(COPD/Asthama/Pnumonia)</label><br>
							<input type="radio" id="yes" name="copd" value="yes" >
							<label for="yes">yes</label>
							<input type="radio" id="no" name="copd" value="no"checked>
							<label for="no">no</label>
							
						</div>

						<div class="form-group">
							<label>DO you have have HIV</label><br>
							<input type="radio" id="yes" name="hiv" value="yes" >
							<label for="yes">yes</label>
							<input type="radio" id="no" name="hiv" value="no"checked>
							<label for="no">no</label>
							
						</div>

						<div class="form-group">
							<label>DO you have have IHD(Heart Disease)</label><br>
							<input type="radio" id="yes" name="ihd" value="yes" >
							<label for="yes">yes</label>
							<input type="radio" id="no" name="ihd" value="no"checked>
							<label for="no">no</label>
							
						</div>
						
						
						<div class="form-group">
							<label>DO you have have Cancer</label><br>
							<input type="radio" id="yes" name="cancer" value="yes" >
							<label for="yes">yes</label>
							<input type="radio" id="no" name="cancer" value="no"checked>
							<label for="no">no</label>
							
						</div>

						<div class="form-group">
							<label>Do you have any other disease please mention </label>
							<input type="text" name="other" class="form-control" />
						</div>
						

						
						
						
						
						
						
						<div class="form-group">
							<button onclick="popUp()" type="submit" name="register" class="btn btn-info">Submit<i class="fa fa-sign-in"></i></button>
						</div>
					
					</form>
                    </div>
                    </div>
					<div class="jumbotron" style="background-color: rgb(182, 218, 240);">
              <h1>STAR HEALTH</h1>
              <p style="font-weight: bold; font-family:Baskerville Old Face ;font-size:x-large;">
                Call Us Now
                Anderi Location: +91- 9136665105<br>
                Vile parle Location: +91- 9136665305<br>
                Our Locations<br>
                starhealth, Chandavarkar Road, andheri (W)<br>
                starhealth Superspeciality Hospitals, L.T.Road, vile parle (W)<br>
                
              </p>
            </div>
        <footer>
          <h3 class="p-0 bg-dark text-white text-center">@starhealth</h3>
        </footer>
        </section>
    </body>
</html>