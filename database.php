<?php 
require 'config/config.php';
$read_data = 'SELECT * FROM `doctor_data`';
$result = $connection->query($read_data);
if($result->num_rows > 0){

}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
	<title>Patient Details</title>
	<style>
			.form-group{
				margin-top: 3%;
				margin-bottom: 5%;
				margin-right: 15%;
				margin-left: 15%;
				background-color: whitesmoke;
				height: 1050px;
				padding-top: 2%;
			}
			.btn{
				color: black;
				font: bolder;
				background-color: green;
				height: 40px;
				width: 100px;
				padding: 0px;
				font-size: larger;
			}
			td {
                width:800px;
                /*text-align:center;
                border:1px solid black;*/
                padding:5px;
                height: 40px;

            }

	</style>
</head>
<body>

	<div class="form-group">
			<h2 style="text-align:center;color: green;">Patient Information(Required)</h2>

		<form action="patient.php" method="POST">
			<table style="font-size: larger;margin-left: 20%; ">
				<td>Patient Name<sup style="color:red;">*</sup></td><br>
				<tr>
				<td><input class="form-control" type="text" name="fname" placeholder="First Name" required="required"></td>
				<td><input class="form-control" type="text" name="lname" placeholder="Last Name" required="required"></td>
				</tr>

				<tr>
				<td>Patient Date of Birth<sup style="color:red;">*</sup></td>
				<td>Patient Gender<sup style="color:red;">*</sup></td>
				</tr>

				<tr>
				<td><input class="form-control" type="Date" name="dateOfBirth" placeholder="MM/DD/YYYY" required="required"></td>
				<td><input class="form-check-input" type="radio" name="gender_male" value="male">Male<input class="form-check-input" type="radio" name="gender_male" value="female">Female</td>
				</tr>

				<tr>
				<td>Patient Social Security Number<sup style="color:red;">*</sup></td>
				<td>Patient Marital Status<sup style="color:red;">*</sup></td>
				</tr>

				<tr>
					<td><input class="form-control" type="text" name="snumber"></td>
					<td><input class="form-check-input" type="radio" name="single" value="single">Single<input class="form-check-input" type="radio" name="single" value="married">Married</td>
				</tr>

				<tr>
					<td>Alternative Patient phone Number<sup style="color:red;">*</sup></td>
					<td>Patient phone Number<sup style="color:red;">*</sup></td>
				</tr>
				<tr>
					<td><input class="form-control" type="text" name="number" required="required"></td>
					<td><input class="form-control" type="text" name="mob_number" required="required"></td>
				</tr>

				<tr>
					<td>Patient Address of Residence<sup style="color:red;">*</sup></td>
					<td>Patient Email<sup style="color:red;">*</sup></td>
				</tr>

				<tr>
				<td><textarea class="form-control" name="address"></textarea></td>
				<td><input class="form-control" type="text" name="email"></td>
				</tr>

				<tr>
					<td><input class="form-control" type="text" name="district" placeholder="District" required=""></td>
					<td><input class="form-control" list="state" name="state" placeholder="State" required="required">
					  <datalist id="state">
					<option value="Andhra Pradesh">
					<option value="Arunachal Pradesh">
					<option value="Assam">
					<option value="Bihar">
					<option value="Chhattisgarh	">
					<option value="Goa">
					<option value="Gujarat">
					<option value="Haryana">
					<option value="Himachal Pradesh">
					<option value="Jharkhand">
					<option value="Karnataka">
					<option value="Kerala">
					<option value="Madhya Pradesh">
					<option value="Maharashtra">
					<option value="Manipur">
					<option value="Meghalaya">
					<option value="Mizoram">
					<option value="Nagaland">
					<option value="Odisha">
					<option value="Punjab">
					<option value="Rajasthan">
					<option value="Sikkim">
					<option value="Tamil Nadu">
					<option value="Telangana">
					<option value="Tripura">
					<option value="Uttar Pradesh">
					<option value="Uttarakhand">
					<option value="West Bengal">
				</datalist></td>
				</td>

				</tr>

				<tr>
					<td><input class="form-control" type="number" name="pin" placeholder="Pin Code/Zip Code" required="required"></td>
					<td><input class="form-control" list="country" name="country" placeholder="country" required="required">
			<datalist id="country">
				<option value="India">
				<option value="China">
				<option value="U.S">
				<option value="U.S.A">
				<option value="Pakistan">
			</datalist></td>
				</tr>

				<tr>
					<td>Appoinment Date<sup style="color:red">*</sup></td>
					<td>Choose Image<sup style="color:red;"></sup></td>

				</tr>

				<tr>

					<td><input class="form-control" type="date" name="date" required="required"></td>
					<td><input class="form-control" type="file" name="image"><td>
				</tr>
				<tr>
					<td>Appointment Time<sup style="color:red">*</sup></td>
					<td>Doctor Name<sup style="color:red;">*</sup></td>


				</tr>

				<tr>
					<td><input class="form-control" type="time" name="time" required="required"></td>
					<td>
				<select name="doctor-name" class="form-control">
					<?php
					while($row = $result->fetch_assoc()){
						echo '<option value="'.$row['NAME'].'">'.$row['NAME'].'</option>';

					}
					?>


				</select>
				</td>

				</tr>
				<tr>
					<td>Fees💰</td>

				</tr>
				<tr>
					<td>Free<sup style="color:red;">*</sup><input class="form-check-input" type="radio" name="fees">Paid<input class="form-check-input" type="radio" name="fees"></td>
					<td><button type="submit" name="btn" value="btn" class="btn btn-warning">SUBMIT</button></td>

				</tr>
				</table>

		</form>

	</div>

</body>
</html>
