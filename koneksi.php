<?php

$kon = mysqli_connect('localhost', 'root', '123', 'courier_db');

if (!$kon) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}
