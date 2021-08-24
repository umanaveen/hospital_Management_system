<?php
include('include/config.php');

$doctor = $_REQUEST["docid"];
$date = $_REQUEST["date"];
$time = $_REQUEST["time"];

 $sql=mysqli_query($con,"select * from appointment   where  doctorId='".$doctor."' and appointmentDate='".$date."' and appointmentTime='".$time."'");
  
 if($sql->num_rows > 0) {
  echo "1";
 }
 else{

 echo "0";
}


 




?>