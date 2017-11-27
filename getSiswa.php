<?php

require 'koneksi.php';

$query = mysqli_query($kon, "SELECT * FROM tbl_member WHERE id='".mysqli_escape_string($kon, $_POST['id'])."'");
$data = mysqli_fetch_array($query);

echo json_encode($data);
