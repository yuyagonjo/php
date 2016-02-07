<?php 

//processing



if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$comments = $_POST['comments'];
	$password = $_POST['password'];


	if(isset($fname,$lname,$email,$gender,$age,$comments,$password)){

		include('conection.php');
	}

}else{

	echo "No form has been submit";
}


 ?>