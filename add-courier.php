<script><!--
function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
one = document.autoSumForm.panjang.value;
two = document.autoSumForm.lebar.value;
three = document.autoSumForm.tinggi.value;
bagi = document.autoSumForm.bagi.value;
document.autoSumForm.jumlah.value = (one * 1) * (two * 1) * (three * 1)/(bagi * 1);}
function stopCalc(){
clearInterval(interval);}
</script>
<?php
//session_start();
require 'koneksi.php';
require_once('database.php');
require_once('library.php');
$rand = get_rand_id(8);
//echo $rand;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />

<script src="js/moment.min.js"></script> 
<script type="text/javascript" src="js/moment-with-locales.js"></script>  
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
        $(function () {
            $('#datetimepicker2').datetimepicker({
            	locale: 'id',
            	defaultDate: new Date()
            });
            
        });
    });
</script>



<style type="text/css">

.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;
}

.ds_head {
	background-color: #333;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */

</style>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

<style type="text/css">
<!--
.style1 {
	font-size: 15px;
	font-weight: bold;
	color: #003399;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}


//-->
</script>
</head>

<body>
<?php //include("header.php"); ?>

	</td>
  </tr>

  <tr>
    <td bgcolor="#FFFFFF">


<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td id="ds_calclass"> </td>
  </tr>
</tbody></table>

 <br/>
  <table border="0" align="center" width="100%">
    <tbody>
	<tr>
      <td class="Partext1" bgcolor="F9F5F5" align="center"><span class="headtext13">Add Shipment </span></td>
    </tr>

  </tbody>
  </table>
<form action="process.php?action=add-cons" method="post" name="autoSumForm" >
<div class="gentxt" align="right">
<table border="0" cellpadding="1" cellspacing="1" align="center" width="83%">
<tbody><tr>
<td width="60%">&nbsp;</td>
<td width="40%"><div align="right"></div></td>
</tr>
</tbody></table>
</div>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
  <tbody><tr>
    <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18"></td>
    <td background="images/boxtopBG.gif" width="734"></td>
    <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13" width="18"></td>
  </tr>
  <tr>
    <td background="images/boxleftBG.gif"></td>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
      <tbody><tr>
        <td colspan="2" height="4"></td>
      </tr>
      <tr>
        <td height="18">&nbsp;</td>
      </tr>
      <tr>
        <td><table class="Partext1" cellpadding="2" cellspacing="2" align="center" width="100%">
          <tbody><tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="gentxt" align="right">
                <div class="headtext13" align="left"><strong>Shipper info : </strong></div>
            </div></td>
          </tr>
					<tr>
            <td class="TrackMediumBlue" align="right" width="138">Member ID  :</td>
            <td>&nbsp;</td>
            <td>
							<select name="id" id="id">
								<option selected>-- --</option>
								<?php
									$query = mysqli_query($kon, "SELECT id,name FROM tbl_member");
									while ($siswa = mysqli_fetch_array($query)):
								?>

								<option value="<?php echo $siswa['id'] ?>"><?php echo $siswa['id'] ." | ". $siswa['name']; ?></option>

								<?php endwhile; ?>
							</select>
                </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right" width="138">Shipper Name   :</td>
            <td>&nbsp;</td>
            <td>
			<input name="Shippername"  id="Shippername" maxlength="100" size="40" type="TEXT">
                </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Phone   :</td>
            <td>&nbsp;</td>
            <td><input name="Shipperphone" id="Shipperphone" maxlength="13" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Address   :</td>
            <td>&nbsp;</td>
            <td><span class="REDLink">
              <textarea name="Shipperaddress" cols="27" rows="2" id="Shipperaddress"></textarea>
              *</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="headtext13" align="left"><strong>Receiver  info : </strong></div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Receiver Name : </td>
            <td>&nbsp;</td>
            <td><input name="Receivername" id="Receivername" maxlength="100" size="40" type="TEXT">
                <span class="REDLink">*</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Phone : </td>
            <td>&nbsp;</td>
            <td><input name="Receiverphone" id="Receiverphone" maxlength="13" size="40" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right"> Address: : </td>
            <td>&nbsp;</td>
            <td><span class="REDLink">
              <textarea name="Receiveraddress" cols="27" rows="2" id="Receiveraddress"></textarea>
              *</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="headtext13" align="left"><strong>Shipment   info : </strong></div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Consignment No  : </td>
            <td width="13">&nbsp;</td>
            <td width="477"><input name="ConsignmentNo" id="ConsignmentNo" maxlength="14" size="40"  type="TEXT" onInput="javascript: if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                <span class="REDLink">*</span> </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Type of Shipment  :</td>
            <td>&nbsp;</td>
            <td>
            <select id="Shiptype" name="Shiptype">
            	<option selected="">-- --</option>
            	<?php
            	$sql = "SELECT id_shipment, name_shipment FROM tbl_type_shipment";
            	$result = dbQuery($sql);		
				while($data = dbArray($result)) {
					extract($data);
				?>
				<option value="<?php echo $id_shipment ?>"><?php echo $name_shipment ?></option>
				<?php
				}
				?>
            </select>
             

								
            
            <!-- <select id="Shiptype" name="Shiptype">
                <option value="Documents" selected="selected">Documents</option>
                <option value="Parcel">Parcel</option>
                <option value="Sentiments">Sentiments</option>
            </select> -->
			</td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Weight : </td>
            <td>&nbsp;</td>
						<td>
							(<input type='text' id="panjang" size="10" maxlength="10" name="panjang" placeholder="Panjang" onFocus="startCalc();" onBlur="stopCalc();"> X
							<input type='text' id="lebar" size="10" maxlength="10" name="lebar" placeholder="Lebar" onFocus="startCalc();" onBlur="stopCalc();"> X
							<input type='text' id="tinggi" size="10" maxlength="10" name="tinggi" placeholder="Tinggi" onFocus="startCalc();" onBlur="stopCalc();">) /
							<input type='text' value="5000"id="bagi" size="10" maxlength="10" name="bagi" placeholder="Bagi" onFocus="startCalc();" onBlur="stopCalc();"> =
							<input type='text' value="0" id="jumlah" size="10" maxlength="10" name="jumlah" onchange='tryNumberFormat(this.form.thirdBox);' readonly>
              (kg)</td>
          </tr>
          <!-- <tr>
            <td class="TrackMediumBlue" align="right">Invoice no  :</td>
            <td>&nbsp;</td>
            <td><input name="Invoiceno" id="Invoiceno" size="40" maxlength="20" onKeyUp="check_phone('Invoiceno')" type="TEXT"></td>
          </tr> -->
          <tr>
            <td class="TrackMediumBlue" align="right">Qnty  :</td>
            <td>&nbsp;</td>
            <td><input name="Qnty" id="Qnty" maxlength="10" size="20" type="TEXT"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Term Of Payment :</td>
            <td>&nbsp;</td>
            <td>
            <select name="Bookingmode" id="Bookingmode">
            	<option selected>-- --</option>
            	<?php
            	$sql = "SELECT id_term_payment, name_term_payment FROM `tbl_term_payment`";
            	$result = dbQuery($sql);		
				while($data = dbArray($result)) {
					extract($data);
				?>
				<option value="<?php echo $id_term_payment ?>"><?php echo $name_term_payment ?></option>
				<?php
				}
				?>
            </select>
            <!-- <select name="Bookingmode" id="Bookingmode">
                <option selected="selected" value="Paid">Paid</option>
                <option value="ToPay">ToPay</option>
                <option value="TBB">TBB</option>
            </select> --></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Total freight : </td>
            <td>&nbsp;</td>
            <td><input id="Totalfreight" size="10" maxlength="13" name="Totalfreight"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Mode : </td>
            <td>&nbsp;</td>
            <td>
            <script type="text/javascript">
            	function getValue() {
				<?php
				 	$query = "SELECT * FROM tbl_use_mode_shipment";
				 	$result = dbQuery($query);		
					while($data = dbArray($result)) {
						extract($data);
						$idUse = $id_mode_shipment;
						echo "if (document.autoSumForm.Mode.value == \"".$idUse."\")";
				   		echo "{";
				   		$content = "document.getElementById('use_mode').innerHTML = \"";
				   		$content .= "<option value='".$id_use_mode_shipment."' selected>".$name_use_mode_shipment."</option>";
				   		$content .= "\"";
				   		echo $content;
				   		echo "}\n"; 
					}
				 ?>
				}
            </script>
            <select name="Mode" id="Mode" onChange="getValue()">
            	<option selected="">-- --</option>
            	<?php
            	$sql = "SELECT id_mode_shipment, name_mode_shipment FROM tbl_mode_shipment";
            	$result = dbQuery($sql);		
				while($data = dbArray($result)) {
					extract($data);
				?>
				<option value="<?php echo $id_mode_shipment ?>"><?php echo $name_mode_shipment ?></option>
				<?php
				}
				?>
            </select>
            <!-- <select name="Mode" id="Mode" onChange="getValue(this.form)">
            	<option selected> </option>
                <option value="Air">Air</option>
                <option value="Land">Land</option>
				<option value="Sea">Sea</option>
            </select> --></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Use : </td>
            <td>&nbsp;</td>
            <td>
            <select name="use_mode" id="use_mode">
            	
            </select>
            <!-- <select name="use_mode" id="use_mode">
            	<option selected value=''></option>
                <option value="Car">Car</option>
                <option value="Airplane">Airplane</option>
                <option value="Train">Train</option>
				<option value="Motorcycle">Motorcycle</option>
				<option value="Ship">Ship</option>
            </select> --></td>
          </tr>
          <!-- <tr>
            <td class="TrackNormalBlue" align="right"><span class="TrackMediumBlue">Dept time : </span></td>
            <td>&nbsp;</td>
            <td><input name="Depttime" id="Depttime" maxlength="50" size="20" type="TEXT"></td>
          </tr> -->
          <!-- <tr>
            <td class="TrackNormalBlue" align="right">Destination Office:</td>
            <td>&nbsp;</td>
            <td><input name="Destination" id="Destination" maxlength="50" size="40" type="TEXT">
                <span class="REDLink">*</span> </td>
          </tr> -->
          <tr>
            <td class="TrackNormalBlue" align="right">Pickup Date  :</td>
            <td>&nbsp;</td>            
            <td>
            <div class='input-group date' id="datetimepicker2">
                <input type='text' name="date_courier" class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            </td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right" valign="top">Status :</td>
            <td>&nbsp;</td>
            <td>
            <select name="status" id="status">
            	<?php
            	$sql = "SELECT * FROM `tbl_status` WHERE id_status = '1'";
            	$result = dbQuery($sql);		
				while($data = dbArray($result)) {
					extract($data);
				?>
				<option value="<?php echo $id_status ?>" selected><?php echo $name_status ?></option>
				<?php
				}
				?>
            </select>
            <!-- <select name="status" id="status">
                <option selected="selected" value="In Transit">In Transit</option>
            </select> --></td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right" valign="top">Comments :</td>
            <td>&nbsp;</td>
            <td><textarea name="Comments" cols="40" rows="4" id="Comments"></textarea></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="Submit" type="submit" onClick="MM_validateForm('Shippername','','R','Shipperphone','','R','Receivername','','R','Receiverphone','','R','ConsignmentNo','','R','Weight','','R','Invoiceno','','R','Qnty','','RisNum','Totalfreight','','R','Pickuptime','','R','Shipperaddress','','R','Comments','','R','Weight','','RisNum','Totalfreight','','R');return document.MM_returnValue" value="Add Courier"></td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>
    <td background="images/boxrightBG.gif"></td>
  </tr>
  <tr>
    <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
    <td background="images/boxbtmBG.gif" width="734"></td>
    <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
  </tr>
</tbody></table>
<br>
</form>

	</td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>

<!-- <script src="jquery.min.js"></script>

 -->	<script>
		$(function() {
			$("#id").change(function(){
				var id = $("#id option:selected").val();

				$.ajax({
					url: 'getSiswa.php',
					type: 'POST',
					dataType: 'json',
					data: {
						'id': id
					},
					success: function (siswa) {
						if (siswa.status == "M") {
							$("#Shippername").val(siswa['name']);
							$("#Shipperphone").val(siswa['phone']);
							$("#Shipperaddress").val(siswa['address']);	
						} else {
							$("#Shippername").val('');
							$("#Shipperphone").val('');
							$("#Shipperaddress").val('');
						}
					}
				});
			});

			$("form").submit(function(){
				alert("Keep learning");
			});
		});
	</script>
</body></html>
