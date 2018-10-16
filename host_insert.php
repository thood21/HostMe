<?php



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
	try{
		error_reporting(0);
  $fname = $_REQUEST['fname'];
  $lname = $_REQUEST['lname'];
  $age = $_REQUEST['age'];
  $country = 'USA';
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $location = $_REQUEST['location'];
  $pet = $_REQUEST['pet'];
  $rent = $_REQUEST['rent'];
  $purpose = $_REQUEST['purpose'];
  $house_type = $_REQUEST['housetype'];
  $reg_english = $_REQUEST['reg_english'];
  $second_language = $_REQUEST['second_lang'];
  $duration = $_REQUEST['dateofdeparture'];
  $gender = "abc";
	}
	catch(Exception $e){
		
	}
  
  $host = "INSERT INTO hosts (fname,lname,email,location,rent,pet,duration,purpose,house_type,reg_english,second_lang,age,pet_type,gender,password_host) VALUES('$fname','$lname','$email','$location','$rent','$pet','$duration','$purpose','$house_type','$reg_english','$second_language','$age','$pet','$gender','$password');";
  if($con->query($host)==TRUE){}
  else{echo "Error inserting data into database. <br>"; echo "Exiting";exit;}
  
  mysqli_close($con);
  echo  "<script type='text/javascript'>\n";
  echo 'window.location="index.html"';
  echo "</script>";
  
?>