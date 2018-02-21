
<?php
include "connect.php";
if(isset($_POST['sub'])){
    $a=$_POST['search'];
$sql = "SELECT * FROM buss1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    while($row = mysqli_fetch_assoc($result)) {
         if($a==$row['service']){
             echo "<tr>";
             echo "<td>".$row['service']."</td>";
              echo "<td>".$row['phn']."</td>";
                 echo "</tr>";         
         }
    }
    echo "</table>";  

}
}
?>