<?php
error_reporting(0);
include 'db_connect.php';
	
	// Assigning value to the php variables

	 $fname = $_POST['firstname'];
	 $mname = $_POST['middlename'];
	 $lname = $_POST['lastname'];
	 $gender = $_POST['gender'];
	 $dob = $_POST['dateofbirth'];
	 $city = $_POST['city'];
	 $address = $_POST['address'];
	 $country = $_POST['country'];

	 // sql query for inserting values to the database table

	$sqlQuery = "INSERT INTO student VALUES ('', '$fname', '$mname', '$lname', '$gender', '$dob', '$city', '$address', '$country') ";
	$myData = mysqli_query($con, $sqlQuery);
	if($myData){
		echo "<div class='alert alert-success alert-dismissible'>
		<button type='button' class='close' data-dismiss='alert'>&times;</button>
		<strong>Success!</strong> Registration completed.
		</div> ";
	}
	else{
		echo "<div class='alert alert-danger alert-dismissible'>
		<button type='button' class='close' data-dismiss='alert'>&times;</button>
		<strong>Alert!</strong> Failed to save.
		</div> ";
	}
?>
