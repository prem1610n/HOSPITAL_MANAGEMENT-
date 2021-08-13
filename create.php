<?php

require_once "config 1.php";
 

$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
   
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }
    
   
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
      
        $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
           
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);
            
     
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            
       
            if(mysqli_stmt_execute($stmt)){
             
                header("location: emp.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
     
        mysqli_stmt_close("1");
    }
    
  
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Create Record</title>
   


    <style>
    .wrapper{
            width: 850px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<style>
body 
{
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

form {
  text-align: center;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 60%;
  border-radius: 80%;
}



</style>

<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   
                      
                <h2 align="center"  style=" font-size: 30px;" >Add the Information</h2>
                    <div class="imgcontainer" class=" align-center" >
    <img src="dr 11.png" alt="Avatar" class="avatar" class="container-fluid">
  </div>

                    <p align="center" style=" font-size: 20px;" >Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label></br>
                            <input type="text" align="center"  name="name"  class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Address</label></br>
                            <textarea name="address"  class="form-control"><?php echo $address; ?></textarea>
                            <span class="help-block"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Salary</label></br>
                            <input type="text" name="salary"  class="form-control" value="<?php echo $salary; ?>">
                            <span class="help-block"><?php echo $salary_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="emp.php" class="btn btn-default">Cancel</a>
                    </form>
                    <p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>