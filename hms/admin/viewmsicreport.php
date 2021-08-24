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
		<title>Admin | View Patients</title>
		
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
<h1 class="mainTitle">Admin | View Patients</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Admin</span>
</li>
<li class="active">
<span>View Patients</span>
</li>
</ol>
</div>
</section>

<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h4 class="tittle-w3-agileits mb-4">Between dates reports</h4>
<button class="btn btn-danger" onclick="printDiv('tblARCNewMember')"><span class="print-icon"></span>PRINT</button>
<a  class="btn btn-success" style="margin-right:100px;float:right;cursor:pointer;" onclick="tableToExcel('articleList1', 'Wgh')" style="color:blue;">Excel</a>
				
<?php
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];

?>
<br>
<br>
<h5 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
<div id="tblARCNewMember">
<table class="table table-striped table-bordered"  id="articleList1" style="border:1px solid #ccc;  ">
<!--<table class="table table-hover" id="sample-table-1">-->
<thead>
<tr>
<th class="center">SNO</th>
<th>Patient Name</th>
<th>CONNC</th>
<th>LAB</th>
<th>Xray</th>
<th>Physio</th>
<th>Scan</th>
<th>ECG</th>
<th>Casu</th>
<th>IP</th>
<th>MHC</th>
<th>O2</th>
<th>DOPP</th>
<th>CBG</th>
<th>EYE</th>
<th>H.V</th>
<th>AMB</th>
<th>COF/TEA</th>
<th>ECHO</th>
<th>DMO</th>
<th>O.CON</th>
<th>G.TOTAL</th>
<th>Cash</th>
<th>Card</th>
<th>Gpay</th>
<th>Neft</th>
</tr>
</thead>
<tbody>
<?php

$sql=mysqli_query($con,"select * from tblpatient");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<tr>
<td class="center"><?php echo $cnt;?>.</td>
<td class="hidden-xs"><?php echo $row['PatientName'];?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

</tr>
<?php 
$cnt=$cnt+1;
 }?>
 <tr>
 <th><h3>Expences</h3></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th> </th></th><th></th><th></th></th><th></th><th></th></th><th></th>
<td></td>
</tr>
<tr>
<td><th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th> </th></th><th></th><th></th></th><th></th><th></th></th><th></th></td>
</tr><tr>
<td><th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th> </th></th><th></th><th></th></th><th></th><th></th></th><th></th></td>
</tr>
 <tr>
<td>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th> </th></th><th></th><th></th></th><th>Morning</th><th></th></th><th></th>
</td>
</tr>
<tr>
<td><th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th> </th></th><th></th><th></th></th><th></th><th></th></th><th></th></td>
</tr>
 <tr>
<td>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th>Total Expences </th></th><th></th><th>First Floor</th></th><th></th><th></th></th><th></th>
</td>
</tr>
<tr>
<td><th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th> </th></th><th></th><th>Eve</th></th><th></th><th></th></th><th></th></td>
</tr>
<tr>
<td><th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th> </th></th><th></th><th></th></th><th></th><th></th></th><th></th></td>
</tr>
<tr>
<td><th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th> </th></th><th></th><th></th></th><th></th><th></th></th><th></th></td>
</tr>
 <tr>
<td>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th>(+) EXCESS	
</th></th><th></th><th></th></th><th></th><th></th></th><th></th>
</td>
</tr>
<tr>
<td><th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th>(-)SHORT </th></th><th></th><th>
</th></th><th></th><th></th></th><th></th></td>
</tr>
<tr>
<td><th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th> </th></th><th></th><th></th></th><th></th><th></th></th><th></th></td>
</tr>
<tr>
<td><th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th>NEFT </th></th><th></th><th></th></th> 
<th></th><th></th></th><th></th></td>
</tr>
<tr>
<td><th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th>Google PAY </th></th><th></th><th></th></th> 
<th></th><th></th></th><th></th></td>
</tr>
<tr>
<td><th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th>		
</th><th>(-) CARD AMOUNT / CHEQUE AMOUNT	 </th></th><th></th><th></th></th> 
<th></th><th></th></th><th></th></td>
</tr>
<tr>
<td><th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th>		
</th><th> </th></th><th></th><th></th></th> 
<th></th><th></th></th><th></th></td>
</tr>
 <tr>
<td>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th>Net Amount </th></th><th></th><th></th></th><th></th><th></th></th><th></th>
</td>
</tr>
 <tr>
<td>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></th><th></th><th></th></th><th></th><th> </th></th><th></th><th>Tally</th></th><th></th><th></th></th><th></th>
</td>
</tr>
</tbody>
 
</table>
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
function printDiv(tblARCNewMember) {
alert('w');
let printContents, popupWin;
printContents = document.getElementById('tblARCNewMember').innerHTML;
popupWin = window.open('', '_blank', 'top=0,left=0,height=100%,width=auto');
popupWin.document.open();
popupWin.document.write(`
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style>
.row {
margin-bottom: 30px;
margin: 0px;
}
tr {
font-size: 14px;
height: 15px;
}
td {
padding: 0px 15px !important;
}
.h-10 {
height: 10px;
}
.t-align {
text-align: center;
}
.f-w-b {
font-weight: bold;
}
.f-s-14 {
font-size: 14px;
}
.t-decoration {
text-decoration: underline;
}
.t-align-end {
text-align: end;
}
.user-images {
width: 100px;
height: 100px;
}
.user-image {
padding: 5px 0px 3px 10px;
}
.w-10rem {
width: 30%;
}
.mr-b-n-15 {
margin-bottom: -15px;
}
</style>
<body onload="window.print();window.close()">${printContents}</body>
</html>`
);
popupWin.document.close();

}
</script>
		<script type="text/javascript">
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worsheet', table: table.innerHTML}
	
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>
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
