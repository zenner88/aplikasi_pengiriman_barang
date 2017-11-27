<?php

$kon = mysqli_connect('localhost', 'root', '', 'courier');

if (!$kon) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}
