<?php
include('include/config.php');
if(!empty($_POST["doctor"])) 
{

 //$sql=mysqli_query($con,"select * from doctor_shift_master where doc_id='".$_POST['specilizationid']."'");
 $sql=mysqli_query($con,"select * from appointment   where appointmentDate>CURRENT_DATE  and doctorId='".$_POST['doctor']."'");
 //echo "<pre>";print_r($sql);exit();
 if($sql->num_rows > 0) {
  // $bidders =0;
  // $users_list = array();
  while($row = $sql->fetch_assoc()){
    $users_lists[] = array(
      'doctorId' => $row['doctorId'],
      
      'appointmentDate' => $row['appointmentDate'],
     
      'appointmentTime' => $row['appointmentTime']
  );
    //  $total_owed += $row['amount_owed'];
  }
  // $response = array('time' => $users_list);
}

echo json_encode($users_lists);exit;
 
}



?>