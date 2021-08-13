<?php

include('include/database_connection.php');
$message = '';
$Success_message = '';
if(isset($_POST['register']))
{
	$username = trim($_POST["username"]);
	$email	  =	trim($_POST['email']);
	$mobile = trim($_POST["mobile"]);
	$comment = trim($_POST["comment"]);


	$check_query = "
	SELECT * FROM tbl_data 
	WHERE username = :username
	";
	$statement = $connect->prepare($check_query);
	$check_data = array(
		':username'		=>	$username
	);
	
		{
			if(empty($username))
			{
				$message .= 'Username is required';
			}
			elseif(empty($email))
			{
				$message .= ' email is required';
			}
			elseif(empty($mobile))
			{
				$message .= ' mobile no. is required';
			}
			elseif(empty($comment))
			{
				$message .= ' comment is required';
			}
			if($message == '')
			{
				$data = array(
					':username'		=>	$username,
					':email'		=>	$email,
					':mobile'		=>	$mobile,
					':comment'		=>	$comment,
					
				);

				$query = "
				INSERT INTO tbl_data
				(username,email,mobile,comment) 
				VALUES (:username,:email,:mobile,:comment)
				";

				$statement = $connect->prepare($query);

				if($statement->execute($data))
				{
					$Success_message .= 'Registration Completed';
				}
			}
		}
	}


?>


<!DOCTYPE html>
<html>
<head>
    <title></title>




<meta charset="utf-8">
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">


    </head>
    <body>
      <style>
      body 
       {
      background-color:rgba(239, 246, 247, 0.904);
      }
   
    </style>
      
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
          <style>
    
            /* Make the image fully responsive */
            { margin:0; padding: 0; box-sizing: border-box;}
            .carousel-inner img {
              align-self: center;
              width: 100vh%;
              height: 90vh%;
            }
            </style>
            <center> 
          <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
              <li data-target="#demo" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner py-4">
              <div class="carousel-item active">
                <img src="image\hospital info 1.jpg" alt="STAR HEALTH" width="1150" height="550">
                <div class="carousel-caption">
                  <h3>STAR HEALTH</h3>
                  <p></p>
                </div>   
              </div>
              <div class="carousel-item">
                <img src="image\bru 3.jpg" alt="2ND " width="1150" height="550">
                <div class="carousel-caption">
                  <h3>EMERGENCY ROOM SERVICES</h3>
                  <p></p>
                </div>   
              </div>
              <div class="carousel-item">
                <img src="image\3rd.jpg" alt="3RD" width="1150" height="550">
                <div class="carousel-caption">
                  <h3>CREATING AN INCLUSIVE ENVIRONMENT AND WORKING AS A TEAM</h3>
                  <p></p>
                </div>   
              </div>
              <div class="carousel-item">
                <img src="image\1st.jpg" alt="New York" width="1150" height="550">
                <div class="carousel-caption">
                  <h3>GENERAL & SPECIALITY SURGICAL SERVICES</h3>
                  <p</p>
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
        
          <section class="my-4">
            <div class="py-4">
              <style>
                h2{color:;font-style: normal;}
                h4{color: rgb(48, 94, 180);}
               
                </style>

              <h1></h1>
              <h2 class="text-center">About Us</h2>
            </div>
            <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <img src="image\about us.jpg" class="img-fluid">
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <h2>STAR HEALTH</h2>
                <h4 class="py-5"  text-color-blue style="font-weight: bold;font-style: italic;"> Our Mission is to bring healthcare of international standards within the reach of every individual.We
                  committed to the achievement and maintenance of excellence in education,reserch and healthcare for the benefit of humanity
                <h4>
                <p>
                  <a href="link2 page.php" style="font-size:35px;" class="btn-outline-success">Click More</a>
                </p>

              </div>
            </div>

          </section>
          <section class="my-1">
            

             <div class="w-50 m-auto">
              <div class="container">
			<br />
			
			
			<br />
			<div class="panel-body">
          <form method="post">
          <?php
            if($message!=''){?>
           <script>
                  swal({
                title: "Oops!",
                text: "<?php echo $message; ?>",
                icon: "warning",
                button: "Ok!",
              });
                     </script>
                  <?php
           }elseif($Success_message!=''){
           ?>
            <script>
            swal({
                title: "Congrulations!",
                text: "<?php echo $Success_message; ?>",
                icon: "success",
                button: "Ok!",
              });
            </script>
          <?php
          }else{
          ?>
            <script>
            swal({
                title: "WELCOME!",
        
              
                button: "Continue !",
              });
            </script>
          <?php 
          }
          ?>

						</script>
					<div class="py-1">
              <h2 class="text-center">Contact Us</h2>
              </div>
						<div class="form-group">
							<label style="bold">Name</label>
							<input type="text" name="username" class="form-control" />
						</div>
						
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" />
						</div>
						<div class="form-group">
							<label>Mobile</label>
							<input type="text" name="mobile" class="form-control" />
						</div>

						<div class="form-group">
							<label>Comment</label>
							<input type="text" name="comment" class="form-control" />
                        </div>
                        


						<div class="form-group">
            <button type="submit" style="font-size:25px;" name="register" class="btn btn-info">Submit <i class="fa fa-sign-in"></i></button></a>
            </div>
           
                        
						
                    </form>
                    </div>
			</div>
		</div>



              </div>
           </section>
           <footer>
             <h3 class="p-3 bg-dark text-white text-center">@starhealth</h3>
           </footer>

        
          
    



     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
