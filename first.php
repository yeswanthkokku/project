<?php
include "connect.php";
if(isset($_POST['sub'])) {
        $phn=$_POST['phn'];
        $spec=$_POST['spec'];
        $sql = "INSERT INTO buss1 (phn,service)
        VALUES ($phn,'$spec')";
        $qry=mysqli_query($conn,$sql) or die("Connection failed: " . mysqli_error($db));
    }
?>


