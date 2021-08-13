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
            .flip-card {
  background-color: transparent;
  width: 400px;
  height: 400px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 1.6s;
  transform-style: preserve-3d;
 
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  
}

.flip-card-front {
  background-color: #bbb;
  
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
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
               
                <li class="nav-item" style="font-size:18px;">
                    <a class="nav-link" href="link2 page.php">Hospital Info </a>

                </li>
                <li class="nav-item" style="font-size:18px;">
                    <a class="nav-link" href="covidroom.php">COVID Sp. Room Booking</a>
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
          <div class="jumbotron">
            <h1>STAR HEALTH</h1>
            <p style="font-weight: bold; font-family:Baskerville Old Face ;font-size:x-large;">Star health of Hospitals represents the realization of dreams and vision of many people, but most importantly, the patient himself. All Multi specialty & Super specialty hospitals of Star health is delivering total patient care in an ethical and open environment with state of the art equipment.

              It is a chain of Hospitals managed and run by expert Medical Professionals with experience of 20 years. Currently we are managing more than 350+ beds and providing qualitative healthcare services to the people of Mumbai and surrounding areas.
               </p>
          </div>
          <section class="my-3">
            <div class="py-3">
              
              <h2 class="text-center">Our Best Team</h2>

            </div>
            
                <div class="container-fluid">
                <div class="row">
                <div class="col-lg-3 col-md-3 col-12 py-5">
                <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                <img src="image\doc 1.jpg" alt="Avatar" style="width:400px;height:400px;" class="img-fluid">
                </div>
                <div class="flip-card-back">
                <h4 class="card-title" style="font-size:50px;padding-top:20px;">Dr.K.P. SAHA</h4>
                <h5 style="font-size:40px;padding-top:20px;">Cardiologist</h5>
                <p class="card-text" style="font-size:30px;padding-top:15px;">MBBS MD. DM Caroliod</p>
                </div>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12 py-5">
                <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                <img src="image\doc 7.jpg" alt="Avatar" style="width:400px;height:400px;" class="img-fluid">
                </div>
                <div class="flip-card-back">
                <h4 class="card-title" style="font-size:50px;padding-top:20px;">Dr.Rajan Borker</h4>
                <h5 style="font-size:40px;padding-top:20px;">Surgeon</h5>
                <p class="card-text" style="font-size:30px;padding-top:15px;">MBBS MS , MCH</p>
                </div>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12 py-5">
                <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                <img src="image\doc 3new.jpg" alt="Avatar" style="width:400px;height:400px;" class="img-fluid">
                </div>
                <div class="flip-card-back">
                <h4 class="card-title" style="font-size:50px;padding-top:20px;">Dr.John Doe</h4>
                <h5 style="font-size:40px;padding-top:20px;">Neurologist</h5>
                <p class="card-text" style="font-size:30px;padding-top:15px;">MBBS,MD, DM.Neuro</p>


                </div>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12 py-5">
                <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                <img src="image\doc 4new.jpg" alt="Avatar" style="width:400px;height:400px;" class="img-fluid">
                </div>
                <div class="flip-card-back">
                <h4 class="card-title" style="font-size:50px;padding-top:20px;">Dr. Naushi Shake</h4>
                <h5 style="font-size:40px;padding-top:20px;">Gynacologist</h5>
                <p class="card-text" style="font-size:30px;padding-top:15px;">MBBS MD.Gynac</p>


                </div>
                </div>
                </div>
                </div>


                <div class="col-lg-3 col-md-3 col-12 py-5">
                <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                <img src="image\doc 5new.jpg" alt="Avatar" style="width:400px;height:400px;" class="img-fluid">
                </div>
                <div class="flip-card-back">
                <h4 class="card-title" style="font-size:50px;padding-top:20px;">Dr. Kaustubh Salagary</h4>
                <h5 style="font-size:40px;padding-top:20px;">Padaetic</h5>
                <p class="card-text" style="font-size:30px;padding-top:15px;">MBBS,MD PAEDS</p>
                </div>
                </div>
                </div>
                </div>


                <div class="col-lg-3 col-md-3 col-12 py-5">
                <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                <img src="image\doc 6new.jpg" alt="Avatar" style="width:400px;height:400px;" class="img-fluid">
                </div>
                <div class="flip-card-back">
                <h4 class="card-title" style="font-size:50px;padding-top:20px;">Dr. Jeeny D'Souza</h4>
                <h5 style="font-size:40px;padding-top:20px;">Physiotherapy</h5>
                <p class="card-text" style="font-size:30px;padding-top:15px;">MPTH , NEURO</p>


                </div>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12 py-5">
                <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                <img src="image\bru 11.jpg" alt="Avatar" style="width:400px;height:400px;" class="img-fluid">
                </div>
                <div class="flip-card-back">
                <h4 class="card-title" style="font-size:50px;padding-top:20px;">Dr. Ajinkya Hange</h4>
                <h5 style="font-size:40px;padding-top:20px;">Dentist</h5>
                <p class="card-text" style="font-size:30px;padding-top:15px;">MDS</p>


                </div>
                </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12 py-5">
                <div class="flip-card">
                <div class="flip-card-inner">
                <div class="flip-card-front">
                <img src="image\bru 22.jpg" alt="Avatar" style="width:400px;height:400px;" class="img-fluid">
                </div>
                <div class="flip-card-back">
                <h4 class="card-title" style="font-size:50px;padding-top:20px;">Dr. Mariano Fernandes</h4>
                <h5 style="font-size:40px;padding-top:20px;">Nephrologist</h5>
                <p class="card-text" style="font-size:30px;padding-top:15px;">MD in Nephrology</p>
                </div>
                </div>
                </div>
                </div>



               

                 </div>
                 </div>
                 
               
        
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
              <h3 class="p-3 bg-dark text-white text-center">@starhealth</h3>
            </footer>






          </section>
    </body>
    </html>