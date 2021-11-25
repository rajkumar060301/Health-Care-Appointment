<?php
$name = $_POST['username'];
$pwd = $_POST['password'];
//echo "$name and $pwd";
$connection=mysqli_connect('localhost','root','','doctor');

if (isset($_POST['login-but'])) {


//session_start();
//if (isset($_SESSION['username'])){
//    echo "";
//
//}
//else{
//    if ($read_query==$name && $data==$pwd){
//        echo "welcome";
//        $_SESSION['username']=$name;
//    }
//    else{
//        echo "Invalid username and password";
//    }
//}
//    echo "Hello";
    $read_query = "SELECT * from doctor_data";
    $data = mysqli_query($connection, $read_query);

    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_array($data)) {
            if ($row['EMAIL'] == $name || $row['MOBILE_NUMBER'] && $row['PASSWORD'] == $pwd) {
                //echo "welcome to home";
                //header("location:patient.html");
                echo "<script>location.href='doctor.html'</script>";

            }
            else{
                //echo "Wrong data match";
                //header("location:signin.html");
                //echo "<script>location.href='signin.html'</script>";
                echo "<script>alert('You entered Wrong user id or Password')</script>)";
                echo "<script>location.href='doctor_signin.html'</script>";



            }
        }



  }
}
else{
    echo "data not pass";
}



