<?php
include('config/koneksi.php');
$id     = $_POST['id_dosen'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];
$updateQry = "UPDATE tbl_dosen SET nama_dosen = ? ,email = ?, alamat = ? WHERE id_dosen = ?";

$updateStatement = mysqli_prepare($connection, $updateQry);

mysqli_stmt_bind_param($updateStatement, 'sssi', $nama, $email, $alamat, $id);

$execute = mysqli_stmt_execute($updateStatement);

if ($execute)) {
	header("Location: index.php?success-update");
} else {
	header("Location: index.php?error-update");
}
 
