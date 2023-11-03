<?php
$name = $_POST['username'];
$pwd = $_POST['password'];
session_start();
$connection=mysqli_connect('localhost','root','','patient_data');
if (!$connection){
    echo "<script>alert('data base not connected')</script>";
}
if (isset($_POST['login_but'])) {

    $read_query = "SELECT * from signup";
    $data = mysqli_query($connection, $read_query);
    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_array($data)) {
            if ($row['EMAIL'] == $name || $row['MOBILE_NUMBER'] && $row['PASSWORD'] == $pwd) {
                $_SESSION['patient_id']=$row['ID'];
                header("location:patient_dashboard.php");
            } else {

                echo "<script>alert('You entered Wrong user id or Password')</script>)";
                echo "<script>location.href='signin.html'</script>";


            }
        }

    }

}

