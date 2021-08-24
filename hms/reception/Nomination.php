				<?php
				session_start();

				include('include/config.php');
				include('include/checklogin.php');
				check_login();

				if(isset($_POST['submit']))
				{
					//echo '<pre>';print_r($_POST);
				$shift_times=$_POST['shift_times'];
				$twothousand=$_POST['twothousand'];
				$twothousandtotal=2000*$twothousand;
				$fivehundred=$_POST['fivehundred'];
				$fivehundredtotal=500*$fivehundred;
				$twohundred=$_POST['twohundred'];
				$twohundredtotal=200*$twohundred;
				$hundred=$_POST['hundred'];
				$hundredtotal=100*$hundred;
				$fifty=$_POST['fifty'];
				$fiftytotal=100*$fifty;
				$twenty=$_POST['twenty'];
				$twentytotal=100*$twenty;
				$ten=$_POST['ten'];
				$tentotal=100*$ten;
				$five=$_POST['five'];
				$fivetotal=100*$five;
				$coins=$_POST['coins'];
				$sql="INSERT INTO `nominations`(`shift`, `twothousand`, `fivehundred`, `twohundred`, `hundred`, `fifty`, `twenty`, `ten`,`five`,`coins`) VALUES('$shift_times','$twothousand','$fivehundred','$twohundred','$hundred','$fifty','$twenty','$ten','$five','$coins')";
				
				//echo "<pre>";print_r($sql);exit();
				$query=mysqli_query($con,$sql);
				
				if($query)
				{
				echo "<script>alert('Your Nomination booked');</script>";
				}

				}
				?>
				<!DOCTYPE html>
				<html lang="en">
				<head>
				<title>Reception  | Book Appointment</title>

				<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
				<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
				<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
				<h1 class="mainTitle">Nomination | Nomination </h1>
				</div>
				<ol class="breadcrumb">
				<li>
				<span>Nomination</span>

				</li>
				<li class="active">

				<span>Nomination</span>

				</li>
				</ol>
				</section>
				<!-- end: PAGE TITLE -->
				<!-- start: BASIC EXAMPLE -->
				<div class="container-fluid container-fullw bg-white">
				<div class="row">
				<div class="col-md-12">

				<div class="row margin-top-30">
				<div class="col-lg-8 col-md-12">
				<div class="panel panel-white">
				<div class="panel-heading">
				<h5 class="panel-title">Book Appointment</h5>
				</div>
				<div class="panel-body">
				<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
				<?php echo htmlentities($_SESSION['msg1']="");?></p>	
				<form role="form" name="book" method="post" >

<div class="form-group">
<label for="doctorname">
Shift Timings
</label>
<select class="form-control" name="shift_times" id="shift_times">
<option value="">select shift </option>
<option value="1">6AM TO 2 PM</option>
<option value="2">2PM TO 10PM</option>
<option  value="3">10PM TO AM</option>
</select>
</div>
<table class="table table-bordered">
      
        <tr>
        <td>2000×</td>
        <td colspan="5"><input type="number" class="form-control"  id="twothousand" name="twothousand"></td>
        </tr>
      <tr>
        <td>500×</td>
        <td colspan="5"><input type="number" class="form-control"  id="fivehundred" name="fivehundred"></td>
        </tr>
		<tr>
        <td>200×</td>
        <td colspan="5"><input type="number" class="form-control"  id="twohundred" name="twohundred"></td>
        </tr>
		<tr>
        <td>100×</td>
        <td colspan="5"><input type="number" class="form-control"  id="hundred" name="hundred"></td>
        </tr>
		<tr>
        <td>50×</td>
        <td colspan="5"><input type="number" class="form-control"  id="fifty" name="fifty"></td>
        </tr>
		<tr>
        <td>20×</td>
        <td colspan="5"><input type="number" class="form-control"  id="twenty" name="twenty"></td>
        </tr>
		<tr>
        <td>10×</td>
        <td colspan="5"><input type="number" class="form-control"  id="ten" name="ten"></td>
        </tr>
		<tr>
        <td>5×</td>
        <td colspan="5"><input type="number" class="form-control"  id="five" name="five"></td>
        </tr>
		<tr>
        <td>coins</td>
        <td colspan="5"><input type="text" class="form-control"  id="coins" name="coins"></td>
        </tr>
	</table>

				<button type="submit" name="submit" class="btn btn-o btn-primary">
				Submit
				</button>
				</form>
				</div>
				</div>
				</div>

				</div>
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

				$('.datepicker').datepicker({
				format: 'yyyy-mm-dd',
				startDate: '-3d'
				});
				</script>
				<script type="text/javascript">
				$('#timepicker1').timepicker();
				</script>
				<!-- end: JavaScript Event Handlers for this page -->
				<!-- end: CLIP-TWO JAVASCRIPTS -->

				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

				</body>
				</html>
