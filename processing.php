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

		mysqli_query($dbc, "INSERT INTO users(first_name,last_name,email,gender,password,age,comments) VALUES('$fname','$lname','$email','$gender','$password','$age','$comments')");

		$registerd = mysqli_affected_rows($dbc);

		echo $registerd."row is affected"; 
	}	

}else{

	echo "No form has been submit";
}


 ?>