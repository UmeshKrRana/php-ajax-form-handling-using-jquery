<!DOCTYPE html>
<html>
<head>
	<title>Php Ajax Eample</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>

	<!-- jQuery Code for input reading -->
	<script>
		$(document).ready(function(){
			$("#btnSubmit").click(function(){
				// declaring variable for getting input from input controls
				var fName = $("#firstName").val();
				var mName = $("#middleName").val();
				var lName = $("#lastName").val();
				var gender = $("#gender").val();
				var dob = $("#dob").val();
				var city = $("#city").val();
				var address = $("#address").val();
				var country = $("#country").val();



				$.ajax({
					url: 'form-validate.php',
					type: 'POST',
					data: {firstname: fName, middlename: mName, lastname:lName, gender:gender, dateofbirth:dob, city:city,address:address, country:country},
					success: function(data){
						$("#result").html(data);
					}

				});


			});
		});

	</script>



</head>
<body>
	<div class="container mt-4 shadow p-3">
		<h3 class="pt-2 pb-2">PHP Ajax Form Handling Using jQuery</h3>
		<hr/>
		<div class="row mt-4">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 m-auto">
				<div class="form-group">
					<label for="firstName">First Name</label>
					<input type="text" id="firstName" class="form-control" placeholder="First Name">
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 m-auto">
				<div class="form-group">
					<label for="middleName">Middle Name</label>
					<input type="text" id="middleName" class="form-control" placeholder="Middle Name">
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 m-auto">
				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input type="text" id="lastName" class="form-control" placeholder="Last Name">
				</div>
			</div>			
		</div>
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 m-auto">
				<div class="form-group">
					<label for="gender">Gender</label>
					<select class="form-control" id="gender">
						<option selected disabled> Select Gender </option>
						<option> Male </option>
						<option> Female </option>
						
					</select> 
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 m-auto">
				<div class="form-group">
					<label for="dob">Date of Birth</label>
					<input type="date" id="dob" class="form-control">
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 m-auto">
				<div class="form-group">
					<label for="city">City</label>
					<input type="text" id="city" class="form-control" placeholder="City">
				</div>
			</div>			
		</div>
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-10 m-auto">
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" id="address" class="form-control" placeholder="Address">
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 m-auto">
				<div class="form-group">
					<label for="dob">Country</label>
					<input type="text" id="country" class="form-control" placeholder="Country">
				</div>
			</div>					
		</div>
		<input type="submit" id="btnSubmit" class="btn btn-success">

		<!-- div for ajax response after inserting value to the database table -->
		<div id="result" class="col-md-5"></div>
	</div>
</body>
</html>