<?php

include('config/koneksi.php');

$id     = $_POST['id_dosen'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

$query = "UPDATE tbl_dosen SET nama_dosen = '$nama' ,email = '$email', alamat = '$alamat' WHERE id_dosen = '$id'";

if ($connection->query($query) === TRUE) {

	header("Location: index.php?success-update");
    
} else {

	header("Location: index.php?error-update");

}