<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	

$Branch_name=$_POST['Branch_name'];
$vendor_code=$_POST['vendor_code'];
$name=$_POST['name'];
$Mobile_number=$_POST['Mobile_number'];
$email_id=$_POST['email_id'];
$Post_box=$_POST['Post_box'];
$Gst_number=$_POST['Gst_number'];
$Pan_number=$_POST['Pan_number'];
$Street=$_POST['Street'];
$Area=$_POST['Area'];
$City=$_POST['City'];
$State=$_POST['State'];
$Pin_code=$_POST['Pin_code'];

$sql=mysqli_query($con,"insert into vendor_masters(Branch_name,vendor_code,name,Mobile_number,email_id,Post_box,Gst_number,Pan_number,Street,Area,City,State,Pin_code) 
values('$Branch_name','$vendor_code','$name','$Mobile_number','$email_id','$Post_box','$Gst_number','$Pan_number','$Street','$Area','$City','$State','$Pin_code')");
if($sql)
{
echo "<script>alert('Vendor info added Successfully');</script>";
header('location:manage-vendor.php');

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pharmacy | Add Vendor</title>
		
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
						
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Pharmacy | Add Vendor</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Vendor</span>
</li>
<li class="active">
<span>Add Vendor</span>
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
<h5 class="panel-title">Add Vendor</h5>
</div>
<div class="panel-body">
<form role="form" name="" method="post">

<div class="form-group">
<label >
Branch Name
</label>
<input type="text" name="Branch_name" class="form-control"  placeholder="Enter Branch Name" required="true">
</div>
<div class="form-group">
<label>
 Vendor Code
</label>
<input type="text" name="vendor_code" class="form-control"  placeholder="Enter Vendor Code" required="true">
</div>
<div class="form-group">
<label for="fess">
 Name
</label>
<input type="text" name="name" class="form-control"  placeholder="Enter Name" required="true">
</div>
<div class="form-group">
<label for="fess">
 Mobile Number
</label>
<input type="text" name="Mobile_number" class="form-control"  placeholder="Enter Mobile number">
</div>
<div class="form-group">
<label for="fess">
 Email ID
</label>
<input type="email"  name="email_id" class="form-control"  placeholder="Enter  Email id" required="true">
</div>
<div class="form-group">
<label for="fess">
Post Box No
</label>
<input type="text" name="Post_box" class="form-control"  placeholder="Enter Post Box No" required="true">
</div>
<div class="form-group">
<label for="fess">
GST Number
</label>
<input type="text" name="Gst_number" class="form-control"  placeholder="Enter GST NO" required="true">
</div>
<div class="form-group">
<label for="fess">
Pan number
</label>
<input type="text" name="Pan_number" class="form-control"  placeholder="Enter Pan Number" required="true">
</div>
<div class="form-group">
<label for="fess">
Street
</label>
<input type="text" name="Street" class="form-control"  placeholder="Enter Street" required="true">
</div>
<div class="form-group">
<label for="fess">
Area
</label>
<input type="text" name="Area" class="form-control"  placeholder="Enter Area" required="true">
</div>
<div class="form-group">
<label for="fess">
City
</label>
<input type="text" name="City" class="form-control"  placeholder="Enter City" required="true">
</div>
<div class="form-group">
<label for="fess">
State
</label>
<input type="text" name="State" class="form-control"  placeholder="Enter State" required="true">
</div>
<div class="form-group">
<label for="fess">
Pin code
</label>
<input type="text" name="Pin_code" class="form-control"  placeholder="Enter Pin code" required="true">
</div>
<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
Add
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
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
