<?php
$name = $_POST['username'];
$pwd = $_POST['password'];
//echo "$name and $pwd";
$connection=mysqli_connect('localhost','root','','doctor');
session_start();

if (isset($_POST['login-but'])) {

    $read_query = "SELECT * from doctor_data";
    $data = mysqli_query($connection, $read_query);

    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_array($data)) {
            if ($row['EMAIL'] == $name || $row['MOBILE_NUMBER'] && $row['PASSWORD'] == $pwd) {
                header("location:doctor.php");
                $_SESSION['doctor_name']=$row['NAME'];
              
            }
            else{
   
                echo "<script>alert('You entered Wrong user id or Password')</script>)";
                echo "<script>location.href='doctor_signin.html'</script>";



            }
        }



  }
}
else{
    echo "data not pass";
}



