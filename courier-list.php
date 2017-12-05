<?php
require_once('database.php');
require_once('library.php');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">

<?php //include("header.php"); ?>
	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF">
	<script language="JavaScript">
var checkflag = "false";

function check(field) {
if (checkflag == "false")
 {
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=true;	
	}
	}
	checkflag = "true";
}
else
{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=false;
	}
	}
	checkflag = "false";
}

}
function confirmDel(field,msg)
{
	count=0;
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
	{
	count++;
	}
	}
	
	if(count == 0)
	{
		alert("Select any one record to delete!");
		return false;
	}
	else
	{
		return confirm(msg);
	}
}
</script>
<table border="0" align="center" width="80%">
    <tbody><tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left"><div class="Partext1" align="center"><strong>Update Shipment </strong></div></td>
    </tr>
  </tbody></table>

 
  <table border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody>
	<tr>
    <td>
	</td>
    </tr>
  </tbody></table>
  <table class="blackbox" border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody><tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;">
      <td class="newtext" bgcolor="#EDEDED" width="6%"><div align="center">Edit</div></td>
      <td class="newtext" bgcolor="#EDEDED" width="10%">Consignment No </td>
      <td class="newtext" bgcolor="#EDEDED" width="7%">Shipper</td>
      <td class="newtext" bgcolor="#EDEDED" width="11%">Receiver</td>
      <td class="newtext" bgcolor="#EDEDED" width="11%">Pickup Date/Time</td>
      <td class="newtext" bgcolor="#EDEDED" width="9%">Status</td>
    </tr>
    <?php
            	$sql = "SELECT * FROM tbl_courier ORDER BY cid DESC LIMIT 0, 20";
            	$result = dbQuery($sql);		
				while($data = dbArray($result)) {
					extract($data);
				?>
				<tr>
					<td class="gentxt" align="center">
						<a href="edit-courier.php?cid=<?php echo $cid; ?>">
	  						<img src="images/edit_icon.gif" border="0" height="20" width="20">
	  					</a>
					</td>
					<td class="gentxt"><?php echo $cons_no; ?></td>
					<td class="gentxt"><?php echo $ship_name; ?></td>
					<td class="gentxt"><?php echo $rev_name; ?></td>
					<td class="gentxt">
						<?php echo (new DateTime($date_courier))->format("d/m/Y") ?> - 
						<?php echo (new DateTime($date_courier))->format("H:i") ?>	
					</td>
					<td class="gentxt">
					<?php 
        				$sqlStatus ="SELECT tbl_courier.status, tbl_status.name_status FROM tbl_courier INNER JOIN tbl_status ON tbl_status.id_status = tbl_courier.status WHERE tbl_courier.status = '$status'";
        				$resultStatus = dbQuery($sqlStatus); 
        				while($dataStatus = dbArray($resultStatus)) {
          					extract($dataStatus); 
          					echo $name_status;
        				}  
      				?>	
      				</td>
				</tr>
				
				<?php
				}
				?>
	
	  </tbody></table>
  <br>
	
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


</body></html>