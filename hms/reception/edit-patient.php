<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	
//echo "<pre>";print_r($_POST);
	//$eid=$_GET['editid'];
	$patname=$_POST['patname'];
$patcontact=$_POST['patcontact'];
$patemail=$_POST['patemail'];
$gender=$_POST['gender'];
$pataddress=$_POST['pataddress'];
$creation_date=$_POST['creation_date'];
$Doctorspecialization=$_POST['Doctorspecialization'];
$doctor=$_POST['doctor'];
$appdate=$_POST['appdate'];
$apptime=$_POST['apptime'];
$userstatus=1;
$docstatus=1;
//sql=mysqli_query($con,"update users set PatientName='$patname',PatientContno='$patcontact',PatientEmail='$patemail',PatientGender='$gender',PatientAdd='$pataddress',PatientAge='$patage',PatientMedhis='$medhis' where ID='$eid'");
$query=mysqli_query($con,"insert into patient_appoinment(patname,patcontact,patemail,gender,pataddress,creation_date,Doctorspecialization,doctor,appdate,apptime,userStatus,doctorStatus) 
values('$patname','$patcontact','$patemail','$gender','$pataddress','$creation_date','$Doctorspecialization','$doctor','$appdate','$apptime','$userstatus','$docstatus')");

echo "insert into patient_appoinment(patname,patcontact,patemail,gender,pataddress,creation_date,Doctorspecialization,doctor,appdate,apptime,userStatus,doctorStatus) 
values('$patname','$patcontact','$patemail','$gender','$pataddress','$creation_date','$Doctorspecialization','$doctor','$appdate','$apptime','$userstatus','$docstatus')";

if($sql)
{
	
       

}
echo "<script>alert('Patient Appoinment info added Successfully');</script>";
header('location:appointment-history.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patient | Edit Patient</title>
		
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
function getdoctor(val) {
	// alert(val)
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'specilizationid='+val,
	success: function(data){
		$("#doctor").html(data);
	}
	});



}
</script>

<script>
function day_time(val) {

	// alert(val)
	$.ajax({
	type: "POST",
	url: "get_date_time.php",
	data:'doctor='+val,
	cache: false,
	success: function(data){
		// console.log(response);
		data = $.parseJSON(data);
		$("#bidders").find("tr:gt(0)").remove(); 
		$.each(data, function(i,item) {
			
                    $('#bidders').append('<tr><td>' + item.day_id+ '</td><td>' + item.start_time + '</td><td>' + item.end_time + '</td></tr>');

	

    });

	

                

	}
	});
	$.ajax({
	type: "POST",
	url: "get_available_date_time.php",
	data:'doctor='+val,
	cache: false,
	success: function(data){
		// console.log(response);
		data = $.parseJSON(data);
		$("#fixed_time").find("tr:gt(0)").remove(); 
		$.each(data, function(i,item) {
			
                    $('#fixed_time').append('<tr><td>' + item.appointmentDate+ '</td><td>' + item.appointmentTime + '</td></tr>');


    });
	}
	});

}
function check()
{
	var docid=$('#doctor').val();
	var date=$('#date').val(); 
	var time=$('#timepicker1').val(); 
	$.ajax({
	type: "GET",
	url: "check_date_time.php",
	data:'docid='+docid+'&date='+date+'&time='+time,
	cache: false,
	success: function(data){
	if(data==1){
		alert("doctor already booked");
		$('#date').val("");
		$('#timepicker1').val("");
	}


    }
	
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
<h1 class="mainTitle">Patient | Edit Patient</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Patient</span>
</li>
<li class="active">
<span>Edit Patient</span>
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
<h5 class="panel-title">Add Patient</h5>
</div>
<div class="panel-body">
<form role="form" name="" method="post">
<?php
 $eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from users where 	id='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<div class="form-group">
<label for="specialist">
Patient Want To See the Doctor Specialist For Checkup
</label>
<input type="text" name="Speacialist_for_checkup" class="form-control"  value="<?php  echo $row['Doctorspecialization'];?>" readonly='true'>
</div>
<div class="form-group">
<label for="doctorname">
Patient Name
</label>

<input type="text" name="patname" class="form-control"  value="<?php  echo $row['fullName'];?>" readonly='true'>
</div>
<div class="form-group">
<label>
 Patient Contact no
</label>
<input type="text" name="patcontact" class="form-control"  value="<?php  echo $row['PatientContno'];?>" readonly='true'> 
</div>
<div class="form-group">
<label for="fess">
Patient Email
</label>
<input type="email" id="patemail" name="patemail" class="form-control"  value="<?php  echo $row['email'];?>" readonly='true'>

</div>
<div class="form-group">
              <label class="control-label">Gender: </label>
              <?php  if($row['Gender']=="Female"){ ?>
              <input type="radio" name="gender" id="gender" value="Female" checked="true">Female
              <input type="radio" name="gender" id="gender" value="male">Male
              <?php } else { ?>
              <label>
              <input type="radio" name="gender" id="gender" value="Male" checked="true">Male
              <input type="radio" name="gender" id="gender" value="Female">Female
              </label>
             <?php } ?>
            </div>
<div class="form-group">
<label for="address">
Patient Address
</label>
<textarea name="pataddress" class="form-control" required="true" readonly='true'><?php  echo $row['address'];?></textarea>
</div>

<div class="form-group">
<label for="fess">
 Creation Date
</label>
<input type="text" name="creation_date" class="form-control"  value="<?php  echo $row['regDate'];?>" readonly='true'>
</div>
<div class="form-group">
															<label for="DoctorSpecialization">
																Doctor Specialization
															</label>
							<select name="Doctorspecialization" class="form-control" onChange="getdoctor(this.value);" required="required">
																<option value="">Select Specialization</option>
<?php $ret=mysqli_query($con,"select * from doctorspecilization");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['specilization']);?>">
																	<?php echo htmlentities($row['specilization']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>
														<div class="form-group">
															<label for="doctor">
																Doctors
															</label>
						<select name="doctor" class="form-control" id="doctor" onChange="day_time(this.value);" required="required">
						<option value="">Select Doctor</option>
						</select>
														</div>

														
				<section id='bidderTable' id="bidders" class='container-fluid'>
        <h1 class='text-center'>Doctor Available Time</h1>
        <table class="table table-striped table-bordered" id ='records_table'>
            <thead>
                <tr>
                    <!-- <th scope='col'>S,no</th> -->
                    <th scope='col'>Day</th>
                    <th scope='col'>Start Time</th>
                    <th scope='col'>End Time</th>
                  
                </tr>
            </thead>
			<tbody id='bidders'>

</tbody>
        </table>

    </section>
													
	<section id='bidderTables' class='container-fluid'>
        <h1 class='text-center'>Doctor Fixed Time And Date</h1>
        <table class="table table-striped table-bordered" id ='records_tables'>
            <thead>
                <tr>
                    <!-- <th scope='col'>S,no</th> -->
                    <th scope='col'>Date</th>
                    <th scope='col'>TIME</th>
                    
                  
                </tr>
            </thead>
			<tbody id='fixed_time'>

</tbody>
        </table>

    </section>								
														
<div class="form-group">
															<label for="AppointmentDate">
																Date
															</label>
<input type="date"  name="appdate"  id="date" class="form-control" required="required" data-date-format="yyyy-mm-dd">
	
														</div>
														
<div class="form-group">
															<label for="Appointmenttime">
														
														Time
													
															</label>
			<input class="form-control" name="apptime" id="timepicker1" class="form-control"  onchange="check()" required="required">eg : 10:00 PM
														</div>	
<?php } ?>
<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
Update
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
		
<?php include('include/footer.php');?>
		
<?php include('include/setting.php');?>
			
		
		</div>
	
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
	
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		
		<script src="assets/js/main.js"></script>
		
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
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		  
	</body>
</html>
