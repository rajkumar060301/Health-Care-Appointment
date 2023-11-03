<?php
$connection=mysqli_connect('localhost','root','','patient_data');
if(!$connection){
	echo "Connection failed";

}
if (isset($_POST['submit'])) {
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
	echo '<script>
		alert("registration successfully");
	</script>';
    echo "<script>location.href='signin.html'</script>";

}
else{
	echo '<script>
	alert("Data Not Inserted Properly");
	</script>';
}
}
?>
