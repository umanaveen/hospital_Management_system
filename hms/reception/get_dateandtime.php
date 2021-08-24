<?php
include('include/config.php');




if(!empty($_POST["doctor"])) 
{

 $sql=mysqli_query($con,"select time_and_day from doctors where id='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['time_and_day']); ?>"><?php echo htmlentities($row['time_and_day']); ?></option>
  <?php
}
}
?>

