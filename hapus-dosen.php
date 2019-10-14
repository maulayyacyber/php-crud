<?php
include('config/koneksi.php');

//get id
$id = $_GET['id'];

$deleteQry = "DELETE FROM tbl_dosen WHERE id_dosen = ?";

$deleteStatement = mysqli_prepare($connection, $deleteQry);

mysqli_stmt_bind_param($deleteStatement, 'i', $id);
$execute = mysqli_stmt_execute($deleteStatement);

if ($execute) {
	header("Location: index.php?success-delete");
} else {
	header("Location: index.php?error-delete");
}
