<?php
include('include/config.php');
if(!empty($_POST["doctor"])) 
{

 //$sql=mysqli_query($con,"select * from doctor_shift_master where doc_id='".$_POST['specilizationid']."'");
 $sql=mysqli_query($con,"select * from doctor_shift_master where doc_id='".$_POST['doctor']."'");
 //echo "<pre>";print_r($sql);exit();
 if($sql->num_rows > 0) {
  // $bidders =0;
  // $users_list = array();
  while($row = $sql->fetch_assoc()){
    $users_list[] = array(
      'doc_id' => $row['doc_id'],
      'day_id' => $row['day_id'],
      'start_time' => $row['start_time'],
      'end_time' => $row['end_time']
  );
    //  $total_owed += $row['amount_owed'];
  }
  // $response = array('time' => $users_list);
}

echo json_encode($users_list);exit;
 
}



?>