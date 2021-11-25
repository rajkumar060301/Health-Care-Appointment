
<?php

if(isset($_POST['btn'])){

	$connection = mysqli_connect('localhost','root','','patient_data');
	if (!$connection) {
		echo "connection failed";
	}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$full_name=$_POST['fname'].' '.$_POST['lname'];
$dateOfBirth=$_POST['dateOfBirth'];
$gender=$_POST['gender_male'];


$snumber=$_POST['snumber'];
$married=$_POST['single'];

$allnumber=$_POST['number'];
$mob_number=$_POST['mob_number'];
$address=$_POST['address'];
$email=$_POST['email'];
$district=$_POST['district'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$country=$_POST['country'];
$date=$_POST['date'];
$image=$_POST['image'];
$time=$_POST['time'];
$doctor_name=$_POST['doctor-name'];
$fees=$_POST['fees']; 
$insert_query = "INSERT INTO patient(FULL_NAME,DATE_OF_BIRTH,GENDER,PATIENT_NUMBER,MARRIED,ALTERNATE_NUMBER,MOBILE_NUMBER,ADDRESS,EMAIL,DISTRICT,STATE,PIN_CODE,COUNTRY,REPORTING_DATE,IMAGE,REPORTING_TIME,DOCTOR_NAME,FEES) 
VALUES
('$full_name','$dateOfBirth','$gender','$snumber','$married','$allnumber','$mob_number','$address','$email','$district','$state','$pin','$country','$date','$image','$time','$doctor_name','$fees')";
if(mysqli_query($connection,$insert_query)){
	?>
	<script>
	alert("Data inserted successfully");
	</script>

<?php
}
else{		
	?>
	<script>
	alert("Data Not Inserted Properly");
	</script>
    <script>location.href='patient.html'</script>
	<?php

}

}

?>


