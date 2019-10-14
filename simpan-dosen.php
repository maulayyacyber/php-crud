<?php
include('config/koneksi.php');

$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];
$insertQry = "INSERT INTO tbl_dosen (nama_dosen, email, alamat) VALUES (?,?,?)";

$insertStatement = mysqli_prepare($connection, $insertQry);
 
mysqli_stmt_bind_param($insertStatement, 'sss', $nama, $email, $alamat);
 
$execute = mysqli_stmt_execute($insertStatement);

if ($execute) {
	header("Location: index.php?success");
} else {
	header("Location: index.php?error");
}
