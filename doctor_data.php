<!DOCTYPE html>
<html>
<head>
    <title> Doctor Data</title>
    <style>
        div{
            margin-left: 3%;
            margin-right: 10%;
            margin-top: 3%;
            background-color: whitesmoke;
            height: 750px;
            padding-top: 1%;
            border-radius: 5%;
        }
        table, th, td{
            border: 1Px solid black;
            border-collapse: collapse;
            text-align: center;
            background-image: linear-gradient(to bottom right, #0052b0, #b340b3);
        }

        table{
            margin-left: 10%;
            font-size: x-large;
        }
    </style>
</head>
<body>
<div>
    <h2 style="color: blue;text-align: center">DOCTOR DATA</h2>
    <?php
    if(isset($_POST['display'])){

        $myConnection = mysqli_connect("localhost", "root", "", "doctor");

        $read_query = "SELECT NAME,EMAIL,MOBILE_NUMBER,STATE,DISTRICT,AREA FROM doctor_data";

        $data = mysqli_query($myConnection, $read_query);

        if(mysqli_num_rows($data)>0){

            echo "<table style= border: 1ps solid black>

            <tr>
            <th>DOCTOR NAME</th>
            <th>EMAIL</th>
            <th>CONTACT</th>
            <th>STATE</th>
            <th>DISTRICT</th>
            <th>AREA</th>";

            while($row = mysqli_fetch_array($data)){

                echo"<tr>";

                echo "<td>".$row['NAME']."</td>";

                echo "<td>".$row['EMAIL']."</td>";

                echo "<td>".$row['MOBILE_NUMBER']."</td>";

                echo "<td>".$row['STATE']."</td>";

                echo "<td>".$row['DISTRICT']."</td>";

                echo "<td>".$row['AREA']."</td>";

                echo "</tr>";
            }
        } else {
            echo "Record Not found";
        }
    }
    ?>
</div>

</body>

</html>

