<?php
include('include/config.php');
if(!empty($_POST["specilizationid"])) 
{

 //$sql=mysqli_query($con,"select * from doctor_shift_master where doc_id='".$_POST['specilizationid']."'");
 $sql="select * from doctor_shift_master where doc_id='".$_POST['specilizationid']."'";
 echo "<pre>";print_r($sql);exit();
 ?>
 <option selected="selected">Select Doctor </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['doctorName']); ?></option>
  <?php
}
}



?>