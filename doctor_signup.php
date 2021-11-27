<?php
$connection=mysqli_connect('localhost','root','','doctor');
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
        $state=$_POST['state'];
        $district=$_POST['district'];
        $area=$_POST['location'];
    }
    else{
        echo "please enter valid password";
    }
    $insert_query="INSERT INTO doctor_data(`NAME`,`EMAIL`,`MOBILE_NUMBER`,`PASSWORD`,`STATE`,`DISTRICT`,`AREA`) VALUES('$name','$email','$mob_number','$password','$state','$district','$area')";
    if (mysqli_query($connection,$insert_query)){
        // code...
        ?>
        <script>
            alert("registration successfully")
        </script>
        <?php
        //header('location:./doctor_signin.html');
        echo "<script>location.href='doctor_signin.html'</script>";


    }

    else{
        ?>
            <script>
                alert("Data not fill properly");
            </script>
        //echo "data not inserted";
        <?php
    }
}


?>

