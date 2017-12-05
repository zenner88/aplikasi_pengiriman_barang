<?php
require_once('database.php');
require_once('library.php');



$cons= $_POST['Consignment'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cons_no = '$cons'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
while($data = dbFetchAssoc($result)) {
extract($data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
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



 

<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0">

  <tbody><tr>

    <td id="ds_calclass"> </td>

  </tr>

</tbody></table>



  <br>

  <table border="0" align="center" width="98%">

    <tbody><tr>

      <td class="Partext1" bgcolor="F9F5F5" align="center"><strong>Shipment Details</strong></td>

    </tr>

  </tbody></table>



  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">



    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%"><div align="left" class="style3">Shipper Name : </div></td>

            <td width="45%"><div align="left" class="style3">

              <?php echo $ship_name; ?>
            </div></td>

          </tr>

          <tr>

            <td><div align="left" class="style3">Shipper Phone : </div></td>

            <td><div align="left" class="style3">

              <?php echo $phone; ?>
            </div></td>
          </tr>

          <tr>

            <td><div align="left" class="style3">Shipper Address : </div></td>

            <td><div align="left" class="style3">
      <?php echo $s_add; ?>
      </div></td>
          </tr>
        </tbody></table>

      </div></td>

      <td class="Partext1" bgcolor="#FFFFFF">
    <div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%" class="style3"><div align="left">Receiver Name : </div></td>

            <td width="45%" class="style3"><div align="left"><?php echo $rev_name; ?></div></td>

          </tr>

          <tr>

            <td class="style3"><div align="left">Receiver Phone : </div></td>

            <td class="style3"><div align="left">
      <?php echo $r_phone; ?>
            </div></td>
          </tr>

          <tr>

            <td class="style3"><div align="left">Receiver Address : </div></td>

            <td class="style3"><div align="left">
      <?php echo $r_add; ?>
            </div></td>
          </tr>
        </tbody></table>
      </div></td>

    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td class="Partext1" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right" width="336">Consignment No  : </td>

      <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000"><?php echo $cons_no; ?></font>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Ship Type  :</td>

      <td class="style3" bgcolor="#FFFFFF">
        <?php
          $sql ="SELECT tbl_type_shipment.name_shipment FROM `tbl_courier` INNER JOIN tbl_type_shipment ON tbl_type_shipment.id_shipment = tbl_courier.type WHERE tbl_courier.type = '$type' AND tbl_courier.cons_no = '$cons_no'";
          $result = dbQuery($sql); 
          while($data = dbArray($result)) {
            extract($data); 
            echo $name_shipment;
          } 
       ?>
      </td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Weight :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $weight; ?>&nbsp;kg</td>
    </tr>
    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Booking Mode :</td>

      <td class="style3" bgcolor="#FFFFFF">
        <?php
          $sql ="SELECT tbl_courier.book_mode, tbl_term_payment.name_term_payment FROM tbl_courier INNER JOIN tbl_term_payment ON tbl_term_payment.id_term_payment = tbl_courier.book_mode WHERE tbl_courier.book_mode = '$book_mode' AND tbl_courier.cons_no = '$cons_no'";
          $result = dbQuery($sql); 
          while($data = dbArray($result)) {
            extract($data); 
            echo $name_term_payment;
          } 
       ?>
      </td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Total freight : </td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $freight; ?></td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Mode : </td>

      <td class="style3" bgcolor="#FFFFFF">
      <?php 
        $sql ="SELECT tbl_courier.mode, tbl_mode_shipment.name_mode_shipment FROM tbl_courier INNER JOIN tbl_mode_shipment ON tbl_mode_shipment.id_mode_shipment = tbl_courier.mode WHERE tbl_courier.mode = '$mode' AND tbl_courier.cons_no = '$cons_no'";
        $result = dbQuery($sql); 
        while($data = dbArray($result)) {
          extract($data); 
          echo $name_mode_shipment;
        }  
      ?>
        
      </td>
    </tr>
    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Use : </td>

      <td class="style3" bgcolor="#FFFFFF">
      <?php 
        $sql ="SELECT tbl_courier.use_mode, tbl_use_mode_shipment.name_use_mode_shipment FROM tbl_courier INNER JOIN tbl_use_mode_shipment ON tbl_use_mode_shipment.id_use_mode_shipment = tbl_courier.use_mode WHERE tbl_courier.use_mode = '$use_mode' AND tbl_courier.cons_no = '$cons_no'";
        $result = dbQuery($sql); 
        while($data = dbArray($result)) {
          extract($data); 
          echo $name_use_mode_shipment;
        }  
      ?>
        
      </td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Pickup Date/Time  :</td>

      <td class="style3" bgcolor="#FFFFFF">

        <?php echo (new DateTime($date_courier))->format("d/m/Y") ?> -<span class="gentxt">
<?php echo (new DateTime($date_courier))->format("H:i") ?>
        </span> </td>
    </tr>

    <tr>
      <td class="style3" bgcolor="#FFFFFF" align="right">Status :</td>
      <td>
        <table>
          <thead>
            <tr>
              <td>Date</td>
              <td>Time</td>
              <td>Location</td>
              <td>Checkpoints Details</td>
              <td>Remark</td>  
            </tr> 
          </thead>
          <tbody>
            <tr>
              <td><?php echo (new DateTime($date_courier))->format("d/m/Y") ?></td>
              <td><?php echo (new DateTime($date_courier))->format("H:i") ?></td>
              <td></td>
              <td>
                
              </td>
              <td>
                <?php 
        $sql ="SELECT tbl_courier.status, tbl_status.name_status FROM tbl_courier INNER JOIN tbl_status ON tbl_status.id_status = tbl_courier.status WHERE tbl_courier.status = '$status'";
        $result = dbQuery($sql); 
        while($data = dbArray($result)) {
          extract($data); 
          echo $name_status;
        }  
      ?>
              </td>
            </tr>
          </tbody>
        </table>  
      </td>
    </tr>



    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right" valign="top">Log Status :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php $sql_status = "SELECT tbl_status.name_status, tbl_courier_track.comments_track FROM tbl_courier INNER JOIN tbl_courier_track ON tbl_courier_track.cons_no = tbl_courier.cons_no INNER JOIN tbl_status ON tbl_status.id_status = tbl_courier_track.status_track WHERE tbl_courier.cons_no = '$cons_no' ORDER BY tbl_courier_track.id DESC";
        $result_status = dbQuery($sql_status); 
        $nostatus = dbNumRows($result_status);
        while($dataStatus = dbArray($result_status)) {
          extract($dataStatus);
          extract($dataStatus);
          echo "<ul>";
          echo "<li>$name_status -- $comments_track</li>";
          echo "</ul>";
        } ?>

      </td>
    </tr>
  </tbody></table>

  <p>&nbsp;</p></td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304">&nbsp;</td>
  </tr>
</tbody></table>
</td>

  </tr>

</tbody></table>





</body></html>
<?php }//while
}//if
else {
echo 'In else....';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
</style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

  <tbody><tr>

    <td width="900">
<?php include("header.php"); ?>

	</td>

  </tr>

  

  <tr>

    <td bgcolor="#FFFFFF">
	
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



 

<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 

  <tbody><tr> 

    <td id="ds_calclass"> </td> 

  </tr> 

</tbody></table> 



  <br>




  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

  <span class="Partext1"><br>

   
   </span>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

     <tbody><tr>
<h3 style="font-family:Verdana; font-size:12px;">Consignment Number <font color="#FF0000"><?php echo $cons; ?></font> not found. Please verify the Number.<br/>
<a href="search-edit.php">Go Back</a> to Search Again.</h3>
       </tr>

        </tbody></table>


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



<?php 
}//else
?>