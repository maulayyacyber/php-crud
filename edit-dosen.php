
<?php
	$id = $_GET['id'];
	//include koneksi
	include('config/koneksi.php');
	$sql = "SELECT * FROM tbl_dosen WHERE id_dosen = $id LIMIT 1 ";
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_array($result);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Dosen</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-8 offset-md-2">

			<form action="update-dosen.php" method="POST">

			  <div class="form-group">
			    <label>Nama Lengkap</label>
			    <input type="text" class="form-control" name="nama" value="<?php echo $row['nama_dosen'] ?>" placeholder="Masukkan Nama Lengkap">
			    <input type="hidden" name="id_dosen" value="<?php echo $row['id_dosen'] ?>">
			  </div>

			  <div class="form-group">
			    <label>Alamat Email</label>
			    <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>" placeholder="Masukkan Email Aktif">
			  </div>

			  <div class="form-group">
			    <label>Alamat</label>
			    <textarea class="form-control" rows="3" name="alamat" placeholder="Masukkan Alamat Lengkap"><?php echo $row['alamat'] ?></textarea>
			  </div>
			 
			  <button type="submit" class="btn btn-primary">UPDATE</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>