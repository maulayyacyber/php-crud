<?php

include('config/koneksi.php');

$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO tbl_dosen (nama_dosen, email, alamat)
VALUES ('$nama', '$email', '$alamat')";

if ($connection->query($query) === TRUE) {

	header("Location: index.php?success");
    
} else {

	header("Location: index.php?error");

}