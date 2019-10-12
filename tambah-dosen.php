<!DOCTYPE html>
<html>
<head>
	<title>Tambah Dosen</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-8 offset-md-2">

			<form action="simpan-dosen.php" method="POST">

			  <div class="form-group">
			    <label>Nama Lengkap</label>
			    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
			  </div>

			  <div class="form-group">
			    <label>Alamat Email</label>
			    <input type="email" class="form-control" name="email" placeholder="Masukkan Email Aktif">
			  </div>

			  <div class="form-group">
			    <label>Alamat</label>
			    <textarea class="form-control" rows="3" name="alamat" placeholder="Masukkan Alamat Lengkap"></textarea>
			  </div>
			 
			  <button type="submit" class="btn btn-primary">SIMPAN</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>