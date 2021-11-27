<?php
$name = $_POST['username'];
$pwd = $_POST['password'];
//echo "$name and $pwd";
$connection=mysqli_connect('localhost','root','','patient_data');
if (!$connection){
    echo "<script>alert('data base not connected')</script>";
}
if (isset($_POST['login_but'])) {

//    session_start();
//    if (isset($_SESSION['username'])) {
//        echo $_SESSION['username'];
//        echo "<script>.location.href='patient.html'</script>";
//        echo "<a href='logout.php'><input type='button' value='logout' name='logout'></a>";
//    } else {

        $read_query = "SELECT * from signup";
        $data = mysqli_query($connection, $read_query);
        if (mysqli_num_rows($data) > 0) {
            while ($row = mysqli_fetch_array($data)) {
                if ($row['EMAIL'] == $name || $row['MOBILE_NUMBER'] && $row['PASSWORD'] == $pwd) {
                    //$_SESSION['username']=$row['EMAIL'];

                    //echo "welcome to home";

                    //echo "<script>location.href='patient.html'</script>";
                    header("location:patient.html");
                } else {
                    //echo "Wrong data match";
                    //header("location:signin.html");
                    echo "<script>alert('You entered Wrong user id or Password')</script>)";
                    echo "<script>location.href='signin.html'</script>";


                }
            }

        }
   // }
}

