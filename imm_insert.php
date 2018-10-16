<?php

session_start();


	$server = "fontbonne.cedmpeumguez.us-east-2.rds.amazonaws.com";
	$username = "fontbonne";
	$password = "fontbonne";
	$dbname = "GlobalHack";
	$port = 55976;


$con=mysqli_connect($server,$username,$password,$dbname,$port);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	error_reporting(0);
  $fname = $_REQUEST['fname'];
  $lname = $_REQUEST['lname'];
  $age = $_REQUEST['age'];
  $gender = $_REQUEST['gender'];
  $country = $_REQUEST['country'];
  $email = $_REQUEST['email'];
  $_SESSION['email']=$email;
  //$GLOBALS['email']=$email;
  $dateofdeparture = $_REQUEST['dateofdeparture'];
  $passport_num = $_REQUEST['passport_num'];
  $password = $_REQUEST['password'];
  $location = $_REQUEST['location'];
  $primary_language = $_REQUEST['primaryLanguage'];
  $purpose = $_REQUEST['reasonForVisiting'];
  $housing_preference = $_REQUEST['housingPreference'];
  $rent = $_REQUEST['rent'];
  $english = $_REQUEST['english'];
  $pet = $_REQUEST['pet'];
  
  $immigrant = "INSERT INTO immigrants (location,rent,pet,dateofdeparture,purpose,housetype,email,fname,lname,age,passport_num,reg_english,country,second_lang,gender,password) VALUES('$location','$rent','$pet','$dateofdeparture','$purpose','$housing_preference','$email','$fname','$lname','$age','$passport_num','$english','$country','$primary_language','$gender','$password');";
  if($con->query($immigrant)==TRUE){}
  else{echo "Error inserting data into database. <br>"; echo "Exiting";exit;}
  header ("Location:results.php");
  exit;
  
  
?>