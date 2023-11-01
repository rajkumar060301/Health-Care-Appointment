<?php
session_start();
$name = $_SESSION['doctor_name'];

$connection=mysqli_connect('localhost','root','','patient_data');
if(!$connection){
    echo "Error connecting";
}


?>
<html>
<head>
<style>
a{text-decoration:none; color:white}
a:hover{text-decoration:none; color:white}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="styleseet" type="text/css" href="./css/css/bootstrap.min.css"> 
<script>
$(document).ready(function () {
    $('#example1').DataTable();
});

</script>

</head>
<body>
  
<table id="example1" class="display" style="width:100%;text-align:center;border:2px solid black;border-collapse:collapse">
    <thead>
        <tr>
            <th style="width: 10%;">Patient.ID</th>
            <th style="width: 10%;">FULL_NAME</th>
            <th  style="width: 10%;">DATE_OF_BIRTH</th>
            <th  style="width: 40%;">GENDER</th>
            <th  style="width: 10%;">PATIENT_NUMBER</th>
            <th  style="width: 10%;">MARRIED</th>
            <th  style="width: 10%;">ALTERNATE_NUMBER</th>
            <th  style="width: 10%;">MOBILE_NUMBER</th>
            <th  style="width: 10%;">ADDRESS</th>
            <th  style="width: 10%;">EMAIL</th>
            <th  style="width: 40%;">DISTRICT</th>
            <th  style="width: 10%;">STATE</th></th>
            <th  style="width: 10%;">PIN_CODE</th>
            <th  style="width: 10%;">COUNTRY</th>
            <th  style="width: 10%;">REPORTING_DATE</th>
            <th  style="width: 10%;">IMAGE</th>
            <th  style="width: 10%;">REPORTING_TIME</th>
            <th  style="width: 10%;">FEES</th>
        </tr>
        
    </thead>
    <tbody>

        <?php
        $query = 'select * from `patient` where `DOCTOR_NAME` ="'.$name.'" ';
        $result = mysqli_query($connection,$query);
        $varible_encode = array();
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                <tr>
                    <td><?php echo $row["ID"];?></td>
                    <td><?php echo $row["FULL_NAME"];?></td>
                    <td><?php echo $row["DATE_OF_BIRTH"];?></td>
                    <td><?php echo $row["GENDER"];?></td>
                    <td><?php echo $row["PATIENT_NUMBER"];?></td>
                    <td><?php echo $row["MARRIED"];?></td>
                    <td><?php echo $row["ALTERNATE_NUMBER"];?></td>
                    <td><?php echo $row["MOBILE_NUMBER"];?></td>
                    <td><?php echo $row["ADDRESS"];?></td>
                    <td><?php echo $row["EMAIL"];?></td>
                    <td><?php echo $row["DISTRICT"];?></td>
                    <td><?php echo $row["STATE"];?></td>
                    <td><?php echo $row["PIN_CODE"];?></td>
                    <td><?php echo $row["COUNTRY"];?></td>
                    <td><?php echo $row["REPORTING_DATE"];?></td>
                    <td><?php echo $row["IMAGE"];?></td>
                    <td><?php echo $row["REPORTING_TIME"];?></td>
                    <td><?php echo $row["FEES"];?></td>
            </tr>

            <?php
                    }
 
            echo "</tbody>";

        echo "</table>";

                }

                ?>

  </div>
</div>
</body>
<script type="text/javascript" src="js/script.js"></script>

</html>