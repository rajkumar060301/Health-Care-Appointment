<!DOCTYPE html>
<html>
<head>
    <style>datalist</style>
    <style>

    </style>
</head>
<body>
<?php
$connection=mysqli_connect('localhost','root','','doctor');
$read_query="SELECT NAME FROM doctor_data";
$data = mysqli_query($connection, $read_query);

if (mysqli_num_rows($data) > 0) {
    while ($row = mysqli_fetch_array($data)) {
        //echo "<input list='$row["NAME"]'>";
        echo "<td>".$row['NAME']."</td>";


    }



}
?>

</body>
</html>
