<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<style>
  body{
    background-color:#006064;
  }
  .centered {
    position: fixed;
    top: 50%;
    left: 50%;
    /* bring your own prefixes */
    transform: translate(-50%, -50%);
  }
  div.transbox {
    margin: 90px;
    padding: 20px;
    background-color: #fff;
    border: 4px solid #B2EBF2;
    /* opacity: 0.6; */
  }
</style>
<?php
    require_once('database.php');
    require_once('library.php');
    if (empty($_POST['Consignment'])) {
      header('Location: index.php');
    } else {
      $cons= $_POST['Consignment'];
      $sql = "SELECT *
        FROM tbl_courier
        WHERE cons_no = '$cons'";
      $result = dbQuery($sql);
      $no = dbNumRows($result);
      while($data = dbArray($result)) {
      extract($data);  
?>
</head>
<body>
<div class="container">
<div class="transbox">
  <table class="table-responsive table">
  <caption> <h3>Shipment Details</h3> </caption>
      <tr>
      <td class="Partext1" align="center">
        <table border="0" class="table-responsive table" style="background-color: #FFF3E0;">
        <caption>Origin</caption>        

            <td width="55%"><div  class="style3">Shipper Name  </div></td>

            <td width="45%"><div  class="style3">: 
              <?php echo $ship_name; ?>
            </div></td>

          </tr>

          <tr>

            <td><div  class="style3">Shipper Phone</div></td>

            <td><div  class="style3">: 
              <?php echo $phone; ?>
            </div></td>
          </tr>

          <tr>

            <td><div  class="style3">Shipper Address  </div></td>

            <td><div  class="style3">: 
      <?php echo $s_add; ?>
      </div></td>
          </tr>
      </table>
      </td>
      <td>
      </td>      
      <td align="center">
      <table border="0" class="table-responsive table" style="background-color: #E1F5FE;">
        <caption> Destination </caption>      
            <td width="55%" class="style3">Receiver Name  </td>
            <td width="45%" class="style3">: <?php echo $rev_name; ?></td>
          </tr>
          <tr>
            <td class="style3">Receiver Phone </td>
            <td class="style3">: 
            <?php echo $r_phone; ?>
          </td>
          </tr>

          <tr>

            <td class="style3">Receiver Address  </div></td>

            <td class="style3">: 
      <?php echo $r_add; ?>
            </div></td>
          </tr>
        </tbody>
        </table>
      </td>
    </tr>
    </table>
<table width="100%" class="table-responsive table">
    <tr>
      <th class="text-right" bgcolor="#FFFFFF" align="right" width="336">Consignment No</td>
      <td class="style3" bgcolor="#FFFFFF" width="394">: <font color="#FF0000"><?php echo $cons_no; ?></font>&nbsp;</td>
    </tr>
    <tr>
      <th class="text-right" bgcolor="#FFFFFF" align="right">Ship Type</td>
      <td class="style3" bgcolor="#FFFFFF">: 
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
      <th class="text-right" bgcolor="#FFFFFF" align="right">Weight</td>
      <td class="style3" bgcolor="#FFFFFF">: <?php echo $weight; ?>&nbsp;kg</td>
    </tr>
    <tr>
      <th class="text-right" bgcolor="#FFFFFF" align="right">Pickup Date/Time</td>
      <td class="style3" bgcolor="#FFFFFF">: 
        <?php echo (new DateTime($date_courier))->format("d/m/Y") ?> -
        <?php echo (new DateTime($date_courier))->format("H:i") ?>
      </td>
    </tr>
    <tr>
      <th class="text-right" bgcolor="#FFFFFF" align="right">Status</td>
      <td class="style3" bgcolor="#FFFFFF">:</td>      
    </tr>
</table>

<table width="100%" class="table-responsive table">
  <tr>
    <th>Date</th>
    <th>Time</th>
    <th>Location</th>
    <th>Checkpoints Details</th>
    <th>Remark</th>  
  </tr> 
  <tr>
    <td><?php echo (new DateTime($date_courier))->format("d/m/Y") ?></td>
    <td><?php echo (new DateTime($date_courier))->format("H:i") ?></td>
    <td><?php 
      $sql_status = "SELECT tbl_status.name_status, tbl_courier_track.comments_track,tbl_courier_track.current_city 
      FROM tbl_courier 
      INNER JOIN tbl_courier_track ON tbl_courier_track.cons_no = tbl_courier.cons_no 
      INNER JOIN tbl_status ON tbl_status.id_status = tbl_courier_track.status_track 
      WHERE tbl_courier.cons_no = '$cons_no' 
      ORDER BY tbl_courier_track.id DESC";

    $result_status = dbQuery($sql_status); 
    $nostatus = dbNumRows($result_status);
    while($dataStatus = dbArray($result_status)) {
      extract($dataStatus);
    echo $current_city; 
    }
    ?></td>
    <td>
    <?php 
    $sql_status = "SELECT tbl_status.name_status, tbl_courier_track.comments_track,tbl_courier_track.current_city 
                    FROM tbl_courier 
                    INNER JOIN tbl_courier_track ON tbl_courier_track.cons_no = tbl_courier.cons_no 
                    INNER JOIN tbl_status ON tbl_status.id_status = tbl_courier_track.status_track 
                    WHERE tbl_courier.cons_no = '$cons_no' 
                    ORDER BY tbl_courier_track.id DESC";

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
    <td></td>
  </tr>
</table>  
<?php
    }
}
?>
</div>
</div>
</body>
</html>
