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

</div>
</div>
<?php
 $eid=$_GET['billing_id'];
$ret=mysqli_query($con,"SELECT patient_appoinment.id as patient_id,doctors.*,patient_appoinment.* FROM `patient_appoinment` INNER JOIN doctors ON patient_appoinment.doctor=doctors.id where patient_appoinment.id='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<div class="col-lg-14 col-md-14">
<div class="md-formheader text-center"><h1>OP Bill</h1></div>
<br>
<br>
<div class="mc-well col-md-12" style="width: 100%">
	<div class="form-group row">
		<div class="col-md-3">
			<strong><h4>Name: </strong><?php  echo $row['patname'];?></h4> </div>
		<div class="col-md-2">
			<strong><h4>ID: </strong>BBQV-<?php  echo $row['patient_id'];?></h4> </div>
		
		<div class="col-md-2">
			<strong><h4>Gender: </strong><?php  echo $row['gender'];?></h4></div>
		
		<div class="col-md-3"> 
			<strong><h4>Mobile: </strong><?php  echo $row['patcontact'];?></h4></div>
		
    </div>
	<div class="form-group column">
	<div class="form-label-group-md-not-float col-md-2">
	  		<label class="label-md" for="prepay_entitylocation">Patient Email id<span class="error">*&nbsp;&nbsp;</span></label> 
			<input type="text" name="patemail" class="form-control"  value="<?php  echo $row['patemail'];?>" readonly='true'> 			       
        </div>
		<div class="form-label-group-md-not-float col-md-2">
	  		<label class="label-md" for="prepay_entitylocation">Location<span class="error">*&nbsp;&nbsp;</span></label> 
			<input type="text" name="pataddress" class="form-control"  value="<?php  echo $row['pataddress'];?>" readonly='true'> 		
			
        </div>
		<div class="form-label-group-md-not-float col-md-2">
	  		<label class="label-md" for="prepay_entitylocation"> Doctor specilization<span class="error">*&nbsp;&nbsp;</span></label> 
			<input type="text" name="Doctorspecialization" class="form-control"  value="<?php  echo $row['Doctorspecialization'];?>" readonly='true'> 		
			
        </div>
		<div class="form-label-group-md-not-float col-md-2">
	  		<label class="label-md" for="prepay_entitylocation">Doctor Name<span class="error">*&nbsp;&nbsp;</span></label> 
			<input type="text" name="doctorName" class="form-control"  value="<?php  echo $row['doctorName'];?>" readonly='true'> 		
			
        </div>
		</div>
		<div class="form-label-group-md-not-float col-md-2">
	  		<label class="label-md" for="prepay_entitylocation">Doctor Fees<span class="error">*&nbsp;&nbsp;</span></label> 
			<input type="text" name="doctorName" class="form-control"  value="<?php  echo $row['docFees'];?>" readonly='true'> 		
			
        </div>

		<div class="form-label-group-md-not-float col-md-2">
	  		<label class="label-md" for="prepay_entitylocation">provider<span class="error">*&nbsp;&nbsp;</span></label> 
			 		
			<select class="form-control">
			<option>select provider</option>
			</select>
        </div>
		<br>
		<br>
		<br>
		<br>
		<div class="form-label-group-md-not-float col-md-2">
	  		<label class="label-md" for="prepay_entitylocation">Consultant<span class="error">*&nbsp;&nbsp;</span></label> 
			 		
			<select class="form-control">
			<option value="">SELECT Consultant</option>
<option value="1">Dr.Rajesh</option>
<option value="2">Dr.Vignesg</option>

			</select>
        </div>
			<div class="form-label-group-md-not-float col-md-2">
	  		<label class="label-md" for="prepay_entitylocation">Ref By<span class="error">*&nbsp;&nbsp;</span></label> 
			 		
			<select class="form-control">
			<option value="">SELECT Consultant</option>
<option value="1">Dr.sindhu</option>
<option value="2">Dr.Prrethi</option>

			</select>
        </div>
		<div class="form-label-group-md-not-float col-md-2">
	  		<label class="label-md" for="prepay_entitylocation">Visit<span class="error">*&nbsp;&nbsp;</span></label> 
		<select class="input-md form-control" id="natureofvisit" name="natureofvisit">
				<option value="Consultation" selected=""> Select </option>
				<option value="Diagnostic"> Diagnostic </option>
				<option value="MHC"> Master Health Checkup </option>
				<option value="Others"> Others </option>
			</select>
			 </div>
			 <div class="form-label-group-md-not-float col-md-2">
			 <label class="label-md" for="prepay_entitylocation">Visit<span class="error">*&nbsp;&nbsp;</span></label> 
			 <input class="form-control stringwithfewsplcharand tt-query" type="text" id="chief_complaint" name="chief_complaint" value="Consultation" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: rgba(0, 0, 0, 0);">
			 </div>
			 <br>
			 <br>
			 <br>
			 <br>
			 <table class="table table-bordered" id="new_tab">
    <tr>
   <h3><center></center></h3>
    </tr>
    <tr>
      <th>S.no</th>
      <th>Particular</th>
      <th>Qty</th>
      <th>Price</th>
	   <th>Gst%</th>
	   <th>Discount%</th>
	   <th>Discount</th>
	   <th>Total</th>
	   <th width="20%">Action</th>
    </tr>
    
    
    <tr>
      <td><input type="checkbox" class="chk" name="chk[]" id="chk_1" value="1" style="width:15px;height:20px;"/></td>
    
      <td><input type="text" class="form-control" id="feedback_1" name="feedback[]"></td>
       <td><input type="text" class="form-control" id="feedback_1" name="feedback[]"></td>
	    <td><input type="text" class="form-control" id="feedback_1" name="feedback[]"></td>
		 <td><input type="text" class="form-control" id="feedback_1" name="feedback[]"></td>
		  <td><input type="text" class="form-control" id="feedback_1" name="feedback[]"></td>
		   <td><input type="text" class="form-control" id="feedback_1" name="feedback[]"></td>
		    <td><input type="text" class="form-control" id="feedback_1" name="feedback[]" readonly></td>
     
      <td><input type="button" class="btn btn-success" id="new_row" name="new_row" onclick="check()" value="Add">
      <input type="button" class="btn btn-danger" id="enquiry_row_remove"  value="Remove">
    </td>
    </tr>
   
     
    </table>
	<table width="100%" cellpadding="8" id="billitems_table">
			<tbody><tr>
				<th width="55%" colspan="6">&nbsp;</th>
				<th width="20%">Total</th>
				<th width="20%" class="ar" id="current_total"><input type="text" name="doctorName" class="form-control"  value="0.00" ></th>
				
			</tr>
			
			<tr>
				<th width="55%" rowspan="2" colspan="6">
				<table width="100%">
					<tbody><tr>
						<td class="disc_tr">
							<div class="remark-ctr hide">
								Discount Remark: 
								<input type="text" name="disc_remark" id="disc_remark" class="input-md form-control stringwithfewsplchar" value=""> 		
							</div>						
						</td>
					</tr>
					<tr>
						<td class="disc_tr">
							<div class="remark-ctr-auth hide">
								Discount Authorized by<span class="error">*&nbsp;&nbsp;</span>:
								<select class="input-md form-control" id="disc_authorised_by" name="disc_authorised_by">
								</select>				       
							</div>						
						</td>
					</tr>
				</tbody></table>
				</th>
				<th width="20%">Discount(%)</th>
				<th width="20%">
					<input class="form-control bill-discount required remark ar displayformatval intorfloat max100" required="" type="text" name="discountpercentage" id="discountpercentage" value="0">
				</th>
				
			</tr>
			<tr>
				<th width="20%">Discount</th>
				<th width="20%"><input class="form-control remark ar displayformatval intorfloat required" required="" type="text" name="discountamount" id="discountamount" value="0"></th>
				
			</tr>
			
			
			<tr class="error prev_balance_tr hide" data-edit="undefined, ">
				<th width="55%" colspan="6">&nbsp;</th>
				<th width="20%">Previous Balance</th>
				<th width="20%"><input class="form-control remark ar displayformatval" type="text" name="prev_balance_bfrdisc" id="prev_balance_bfrdisc" value="" readonly=""></th>
				
			</tr>
			
			<tr class="success prev_balance_tr hide">
				<th width="55%" rowspan="2" colspan="6">
					<table width="100%">
						<tbody><tr>
							<td class="disc_tr">
								<div>
									Previous Balance Discount(%)
									<input class="form-control remark ar displayformatval intorfloat max100" type="text" name="prevbaldiscp" id="prevbaldiscp" value="0" tabindex="-1">
									<span class="help-block">Percentage converter for previous balance</span>
								</div>						
							</td>
						</tr>
					</tbody></table>
				</th>
				<th width="20%">Previous Balance Discount</th>
				<th width="20%">
					<input class="form-control remark ar displayformatval" type="text" name="prev_balance_disc" id="prev_balance_disc" value="0">
				</th>
				
			</tr>
			<tr class="prev_balance_tr hide">
				<th class="th_pat" width="55%" colspan="6">&nbsp;</th>
				<th width="20%">Previous Balance After Discount</th>
				<th width="20%">
					<input class="form-control ar displayformatval" type="text" name="prev_balance" id="prev_balance" value="0.00" readonly="">
				</th>
				
			</tr>
			
			
			<tr>
				<th width="55%" colspan="6">&nbsp;</th>
				<th width="20%">Amount Receivable</th>
				<th width="20%">
					<div id="grandtotaldisplay" class="ar"></div>
					<input  type="text" name="amountreceived" id="amountreceived" value="0"></th>
			</tr>
			<tr>
				<th width="55%" colspan="6">&nbsp;</th>
				<th width="20%" class="amountreceived">Amount Received</th>
				<th width="20%"><input  type="text" name="amountreceived" id="amountreceived" value="0"></th>
				
			</tr>
			<tr>
				<th width="55%" colspan="6">&nbsp;</th>
				<th width="20%">Due</th>
				<th width="20%" class="ar duedisplay">0.00</th>
			</tr>
			
	</tbody></table>
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
<table class="table table-bordered" id="cardcc" style="visibility:collapse !important;">
<tr>
<td> Card Number</td>
<td colspan="5"><input type="text" class="form-control" placeholder="Enter card number" id="card_number" name="card_number"></td>
</tr>
</table>
<div class="form-group">	
		<label class="col-md-2 control-label">Review: </label>
		<div class="col-md-3" style="padding-right:0">	
			<input type="text" name="review" id="review" placeholder="Review" class="input-md form-control" value="">
			<span id="errmsg" style="display: none; color:red">Numbers Only</span>
		</div>	
		<div class="col-md-2" style="padding-left:0">
			<select class="input-md form-control" id="rvdur" name="rvdur"><option value="days">days</option><option value="weeks">weeks</option><option value="months">months</option></select>
		</div>	
		
	</div>
	<br>
	<br>
	<br>
	<br>
	<h4><span class="fa fa-sign-in text-success"></span> Checkin Status</h4>
	<div class="col-md-12 ctrl">
				<label class="radio">
			        <input type="radio" name="checkin_selected" class="required checkin_selected-new" value="new">
			        New Checkin
              </label>				
		       </div>
			   <div class="col-md-12 ctrl">
				<label class="radio">
			        <input type="radio" name="checkin_selected" class="required checkin_selected" value="jipdhcJIPDMSH-7571_2021082014:46:49" data-dr="jipdhc-neochurchtharsis" data-loc="location1"> 
			        Dr. Neo Church Tharsis M.B.B.S, M.D at <span class="ts" data-time="2021082014:46:50">20/08/2021 14:46</span>
			         <span class="loc">No. 81/66, G.S.T.Road, Pallavaram, Chennai</span>
              </label>				
		       </div>
			   
    <?php } ?>
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
			 function check() // education
    {
    var len=$('#new_tab tr').length;	
    len=len+1; 
    $('#new_tab').append('<tr class="row_'+len+'"><td><input type="checkbox" class="chk" name="chk[]" id="chk_'+len+'" value="'+len+'"</td><td><input type="text" class="form-control" id="feedback_'+len+'" name="feedback[]"></td><td><input type="text" class="form-control" id="feedback_'+len+'" name="feedback[]"></td><td><input type="text" class="form-control" id="feedback_'+len+'" name="feedback[]"></td><td><input type="text" class="form-control" id="feedback_'+len+'" name="feedback[]"></td><td><input type="text" class="form-control" id="feedback_'+len+'" name="feedback[]"></td><td><input type="text" class="form-control" id="feedback_'+len+'" name="feedback[]"></td><td><input type="text" class="form-control" id="feedback_'+len+'" name="feedback[]" readonly></td></tr>'); 
    }



    $('#enquiry_row_remove').click(function(){
    $('input:checkbox:checked.chk').map(function(){
    var id=$(this).val();
    var le=$('#new_tab tr').length;

    if(le==1)
    {
    alert("You Can't Delete All the Rows");
    }
    else
    {
    $('.row_'+id).remove();
    }

    });
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
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
