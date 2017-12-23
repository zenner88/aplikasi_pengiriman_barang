<?php
//start session

session_start();

require_once('database.php');

$action = $_GET['action'];

switch($action) {
	case 'add-cons':
		addCons();
	break;
	case 'add-member':
		addMember();
	break;
	case 'delivered':
		markDelivered();
	break;

	case 'add-office':
		addNewOffice();
	break;

	case 'add-manager':
		addManager();
	break;

	case 'update-status':
		updateStatus();
	break;
	case 'update-member':
		updateMember();
	break;
	case 'change-pass':
		changePass();
	break;

	case 'logOut':
		logOut();
	break;

}//switch

function addCons(){
	$id = $_POST['id'];
	$Shippername = $_POST['Shippername'];
	$Shipperphone = $_POST['Shipperphone'];
	$Shipperaddress = $_POST['Shipperaddress'];

	$Receivername = $_POST['Receivername'];
	$Receiverphone = $_POST['Receiverphone'];
	$Receiveraddress = $_POST['Receiveraddress'];

	$ConsignmentNo = $_POST['ConsignmentNo'];
	$Shiptype = $_POST['Shiptype'];
	$Weight = $_POST['jumlah'];
	//$Invoiceno = $_POST['Invoiceno'];
	$Qnty = $_POST['Qnty'];

	$Bookingmode = $_POST['Bookingmode'];
	$Totalfreight = $_POST['Totalfreight'];
	$Mode = $_POST['Mode'];
	$use_mode = $_POST['use_mode'];

	//$Packupdate = $_POST['Packupdate'];
	//$Pickuptime = $_POST['Pickuptime'];
	$status = $_POST['status'];
	$Comments = $_POST['Comments'];
	$date_courier = $_POST['date_courier'];
	$date_courier = preg_replace('#(\d{2})/(\d{2})/(\d{4})\s(.*)#', '$3-$2-$1 $4', $date_courier);
	//$time = (new DateTime($date_courier))->format('Y-m-d H:i:s');
	//$time = DateTime::createFromFormat('Y-m-d H:i:s', $date_courier);
	//$Destination = $_POST['Destination'];
	


	$sql = "INSERT INTO tbl_courier (cons_no, id_member, ship_name, phone, s_add, rev_name, r_phone, r_add,  type, weight, qty, book_mode, freight, mode, use_mode, status, comments, book_date, date_courier)
			VALUES('$ConsignmentNo', '$id', '$Shippername','$Shipperphone', '$Shipperaddress', '$Receivername','$Receiverphone','$Receiveraddress', '$Shiptype', $Weight, $Qnty, '$Bookingmode', '$Totalfreight', '$Mode', '$use_mode', '$status', '$Comments', NOW(), '$date_courier')";
	//echo $sql;
	dbQuery($sql);
	$sql_1 = "INSERT INTO tbl_courier_track (cid, cons_no, status_track, comments_track, bk_time)
			VALUES ($id, '$ConsignmentNo', '$status', '$Comments', NOW())";
	dbQuery($sql_1);
	header('Location: admin.php?module=add-courier');

	//echo $Ship;
}//addCons


function markDelivered() {
	$cid = (int)$_GET['cid'];
	$sql = "UPDATE tbl_courier
			SET status = '4'
			WHERE cid= $cid";
	dbQuery($sql);
	header('Location: delivered-success.php');

}//markDelivered();

function addNewOffice() {

	$OfficeName = $_POST['OfficeName'];
	$OfficeAddress = $_POST['OfficeAddress'];
	$City = $_POST['City'];
	$PhoneNo = $_POST['PhoneNo'];
	$OfficeTiming = $_POST['OfficeTiming'];
	$ContactPerson = $_POST['ContactPerson'];

	$sql = "INSERT INTO tbl_offices (off_name, address, city, ph_no, office_time, contact_person)
			VALUES ('$OfficeName', '$OfficeAddress', '$City', '$PhoneNo', '$OfficeTiming', '$ContactPerson')";
	dbQuery($sql);
	header('Location: admin.php?module=add-office');
}//addNewOffice

function addManager() {

	$ManagerName = $_POST['ManagerName'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$PhoneNo = $_POST['PhoneNo'];
	$OfficeName = $_POST['OfficeName'];

	$sql = "INSERT INTO tbl_courier_officers (officer_name, off_pwd, address, email, ph_no, office, reg_date)
			VALUES ('$ManagerName', '$Password', '$Address', '$Email', '$PhoneNo', '$OfficeName', NOW())";
	dbQuery($sql);
	header('Location: admin.php?module=manage-list.php');

}//addNewOffice

function updateStatus() {

	$OfficeName = $_POST['OfficeName'];
	$status = $_POST['status'];
	$comments = $_POST['comments'];
	$cid = (int)$_POST['cid'];
	$cons_no = $_POST['cons_no'];
	$time = date('Y-m-d H:i:s');
	//$OfficeName = $_POST['OfficeName'];

	$sql = "INSERT INTO tbl_courier_track (cid, cons_no, current_city, status_track, comments_track, bk_time)
			VALUES ($cid, '$cons_no', '$OfficeName', '$status', '$comments', '$time')";
	dbQuery($sql);

	$sql_1 = "UPDATE tbl_courier SET status = '$status', comments = '$comments', date_courier = '$time' WHERE cid = '$cid' AND cons_no = '$cons_no'";
	dbQuery($sql_1);

	header('Location: admin.php?module=courier-list');

}//addNewOffice



function logOut(){
	session_destroy();
	header('Location: login.php');
}//logOut

function addMember(){

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$ket = $_POST['ket'];

	$sql = "INSERT INTO tbl_member (name,phone,address,ket)
			VALUES('$name', '$phone','$address', '$ket')";
	//echo $sql;
	dbQuery($sql);
	header('Location: admin.php?module=add-member');

	//echo $Ship;
}//addCons

function updateMember() {

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$ket = $_POST['ket'];
	$cid = $_REQUEST['cid'];
	//$OfficeName = $_POST['OfficeName'];

	$sql = "UPDATE tbl_member
				SET name = '$name',phone = '$phone',address = '$address',ket = '$ket'
				WHERE id = $cid";
	dbQuery($sql);

	header('Location: admin.php?module=add-member');

}

?>
