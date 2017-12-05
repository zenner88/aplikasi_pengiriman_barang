<?php
session_start();
require_once('database.php');
require_once('library.php');
if (empty($_POST['txtusername']) && empty($_POST['txtpassword'])) {
	header("Location: login.php");
} else {
	$username = $_POST['txtusername'];
	$password = md5($_POST['txtpassword']);

	$sql = "SELECT * FROM tbl_user WHERE username = '$username' AND pass = '$password' AND lvl = 'A'";
	$result = dbQuery($sql);
	$row = dbNumRows($result);
	if ($row == 1) {
		while ($data = dbArray($result)) {
			extract($data);
			$_SESSION['username']=$username;
			$_SESSION['pass']=$pass;
			$_SESSION['lvl']=$lvl;
		}
		header("Location: admin.php?module=home");
	} else {
		header("Location: login.php");
	}
}
?>