<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Nurse | Appointment History</title>

<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="stylesheet" href="assets/css/plugins.css">
<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>
<body>
<div id="app">		
<?php include('include/sidebar.php');?>
<div class="app-content">


<?php include('include/header.php');?>
<!-- end: TOP NAVBAR -->
<div class="main-content" >
<div class="wrap-content container" id="container">
<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Nurse  | Appointments</h1>
					</div>
<ol class="breadcrumb">
<li>
<span>Reception </span>
</li>
<li class="active">
<span>Appointments </span>
</li>
</ol>
</div>
</section>

<div class="container-fluid container-fullw bg-white">


<div class="row">
<div class="col-md-12">

<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
<?php echo htmlentities($_SESSION['msg']="");?></p>	
<table class="table table-striped table-bordered" id="example1">
<thead>
<tr>
<th>Patient ID</th>
<th>Patient  Name</th>
<th>Patient  Contact Number</th>

<th>Doctor Department</th>
<th>Doctor Name</th>
<th>Appointment Date </th>
<th>Appointment Time  </th>
<th>Current Status</th>


</tr>
</thead>
<tbody>
<?php
$nurse_id=$_SESSION['id'];
$sql=mysqli_query($con,"select nurse.id,patient_appoinment.id,patient_appoinment.patcontact,patient_appoinment.patname,patient_appoinment.patemail,patient_appoinment.appdate,patient_appoinment.apptime,patient_appoinment.gender,patient_appoinment.pataddress,patient_appoinment.creation_date,patient_appoinment.Doctorspecialization,patient_appoinment.userStatus,patient_appoinment.doctorStatus,patient_appoinment.doctor,doctors.doctorName from patient_appoinment
INNER JOIN doctors ON patient_appoinment.doctor = doctors.id 
INNER JOIN nurse ON patient_appoinment.doctor = nurse.doctor_id where nurse.id = '$nurse_id'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['patname'];?></td>
<td><?php echo $row['patcontact'];?></td>
<td><?php echo $row['Doctorspecialization'];?></td>
<td><?php echo $row['doctorName'];?> </td>
<td><?php echo $row['appdate'];?> </td>
<td><?php echo $row['apptime'];?> </td>
<td>
<?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
{
echo "Active";
}
if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
{
echo "Cancel by Patient";
}

if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
{
echo "Cancel by you";
}



?></td>
<!--	<td >
<div class="visible-md visible-lg hidden-sm hidden-xs">
<?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
{ ?>

	
<a href="appointment-history.php?id=<?php echo $row['id']?>&cancel=update" onClick="return confirm('Are you sure you want to cancel this appointment ?')"class="btn btn-transparent btn-xs tooltips" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">Cancel</a>
<?php } else {

echo "Canceled";
} ?>
</div>
</td>-->
</tr>

<?php 
$cnt=$cnt+1;
}?>


</tbody>
</table>
</div>
</div>
</div>

<!-- end: BASIC EXAMPLE -->
<!-- end: SELECT BOXES -->

</div>
</div>
</div>
<!-- start: FOOTER -->
<?php include('include/footer.php');?>
<!-- end: FOOTER -->

<!-- start: SETTINGS -->
<?php include('include/setting.php');?>

<!-- end: SETTINGS -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
$('#example1').DataTable();
} );
</script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/modernizr/modernizr.js"></script>
<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="vendor/switchery/switchery.min.js"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="vendor/autosize/autosize.min.js"></script>
<script src="vendor/selectFx/classie.js"></script>
<script src="vendor/selectFx/selectFx.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CLIP-TWO JAVASCRIPTS -->
<script src="assets/js/main.js"></script>
<!-- start: JavaScript Event Handlers for this page -->
<script src="assets/js/form-elements.js"></script>
<script>
jQuery(document).ready(function() {
Main.init();
FormElements.init();
});
</script>
<!-- end: JavaScript Event Handlers for this page -->
<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>
</html>
