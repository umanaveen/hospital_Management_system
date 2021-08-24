<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	
	
	
$Doctorspecialization=$_POST['Doctorspecialization'];
$patname=$_POST['patname'];
$patcontact=$_POST['patcontact'];
$patemail=$_POST['patemail'];
$gender=$_POST['gender'];
$pataddress=$_POST['pataddress'];
$State=$_POST['State'];
$Country=$_POST['City'];



 
$sql=mysqli_query($con,"insert into users(Doctorspecialization,fullName,PatientContno,email,gender,address,state,city)
values('$Doctorspecialization','$patname','$patcontact','$patemail','$gender','$pataddress','$State','$Country')");
//echo "<pre>";print_r($sql);exit();
if($sql)
{
echo "<script>alert('Patient info added Successfully');</script>";
//header('location:add-patient.php');

}
header('location:manage-patient.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Reception | Add Patient</title>
		
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

	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#patemail").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
<div class="app-content">
<?php include('include/header.php');?>
						
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Billing | Add Billing Payment</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Billing</span>
</li>
<li class="active">
<span>Add Billing</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<div class="row margin-top-30">
<div class="col-lg-8 col-md-12">
<div class="panel panel-white">
<div class="panel-heading">
<h5 class="panel-title">Add Billing For Below Patient</h5>
</div>
<div class="panel-body">
<form role="form" name="" method="post">
<?php
 $eid=$_GET['billing_id'];
$ret=mysqli_query($con,"SELECT patient_appoinment.id as patient_id,doctors.*,patient_appoinment.* FROM `patient_appoinment` INNER JOIN doctors ON patient_appoinment.doctor=doctors.id where patient_appoinment.id='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<div class="form-group">
<label>
 Patient ID
</label>
<input type="text" name="patient_id" class="form-control"  value="<?php  echo $row['patient_id'];?>" readonly='true'> 
</div>

<div class="form-group">
<label>
 Patient Name
</label>
<input type="text" name="patname" class="form-control"  value="<?php  echo $row['patname'];?>" readonly='true'> 
</div>

<div class="form-group">
<label>
 Patient Contact no
</label>
<input type="text" name="patcontact" class="form-control"  value="<?php  echo $row['patcontact'];?>" readonly='true'> 
</div>

<div class="form-group">
<label>
 Patient Emailid
</label>
<input type="text" name="patemail" class="form-control"  value="<?php  echo $row['patemail'];?>" readonly='true'> 
</div>

	<div class="form-group">
<label>
 Doctor specilization
</label>
<input type="text" name="Doctorspecialization" class="form-control"  value="<?php  echo $row['Doctorspecialization'];?>" readonly='true'> 
</div>
<div class="form-group">
<label>
 Doctor Name
</label>
<input type="text" name="doctorName" class="form-control"  value="<?php  echo $row['doctorName'];?>" readonly='true'> 
</div>
<div class="form-group">
<label>
 Doctor Name
</label>
<input type="text" name="docFees" class="form-control"  value="<?php  echo $row['docFees'];?>" readonly='true'> 
</div>
<div class="form-group">
<label>
Money Format
</label>
<select id="money_format" name="money_format" class="form-control" onchange="get_form(this.value)">
<option value="">SELECT FORMAT</option>
<option value="1">Cash</option>
<option value="2">Neft</option>
<option value="3">Insurance</option>
<option value="4">Gpay</option>
<option value="5">IMPS</option>
<option value="6">Card CC</option>
<option value="7">Card Debit</option>
</select>
</div>
<div class="form-group">
<table class="table table-bordered" id="cardcc" style="visibility:collapse !important;">
<tr>
<td> Card Number</td>
<td colspan="5"><input type="text" class="form-control" placeholder="Enter card number" id="card_number" name="card_number"></td>
</tr>
</table>

<div class="form-group">
<label>
 Medical Amount
</label>
<input type="text" name="Med_amount" class="form-control"  value=""> 
</div>

<div class="form-group">
<label>
 GST %
</label>
<input type="text" name="gst" class="form-control"  value="18" readonly='true'> 
</div>

<div class="form-group">
<label>
Total Amount
</label>
<input type="text" name="total" class="form-control"  value=""> 
</div>
<?php } ?>
<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
Submit
</button>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="panel panel-white">
</div>
</div>
</div>
</div>
</div>
</div>				
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
		<script>
		function get_form(value)
{
alert(value);
if(value=='6'||value=='7')
{
document.getElementById('cardcc').style.visibility = "visible";
} 
else 
{
	document.getElementById('cardcc').style.visibility = "collapse";
}

}	
</script>
	</body>
</html>
