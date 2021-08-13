<?php

$con = mysqli_connect('localhosr','root');
$connect = new PDO("mysql:host=localhost;dbname=employee_registration__source_code", "root", "");

if($con){
    echo "conection succesfull";
}else{
    echo "no connection";
}


?>

