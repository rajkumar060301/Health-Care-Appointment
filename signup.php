<?php
$connection=mysqli_connect('localhost','root','','patient_data');
if(!$connection){
	echo "Connection failed";

}
if (isset($_POST['submit'])) {
	// code...


$pass=$_POST['password'];
$confirm_password =$_POST['confirm_password'];
if($pass==$confirm_password){
	$password =$pass;

    $name=$_POST['name'];
    $email=$_POST['email'];
    $mob_number=$_POST['mob_number'];
}
else{
	echo "please enter valid password";
}
$insert_query="INSERT INTO signup(`NAME`,`EMAIL`,`MOBILE_NUMBER`,`PASSWORD`) VALUES('$name','$email','$mob_number','$password')";
if (mysqli_query($connection,$insert_query)){
	// code...?>
	<script>
		alert("registration successfully");
	</script>
    <script>location.href='signin.html'</script>
<?php
    //echo "insert data";

    //header('location:./signin.html');
}
else{
	?>
	<script>
	alert("Data Not Inserted Properly");
	</script>
    //Data Not Inserted Properly
<?php
}
}
?>
