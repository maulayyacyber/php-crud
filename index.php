<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-12">

			<?php if(isset($_GET['success'])) { ?>
				<div class="alert alert-success" role="alert">
				  	BERHASIL! Data Berhasil Disimpan!
				</div>
			<?php } elseif(isset($_GET['error'])){ ?>	
				<div class="alert alert-danger" role="alert">
					GAGAL! Data Gagal Disimpan!
				</div>
			<?php } ?>	

			<?php if(isset($_GET['success-update'])) { ?>
				<div class="alert alert-success" role="alert">
				  	BERHASIL! Data Berhasil Diupdate!
				</div>
			<?php } elseif(isset($_GET['error-update'])){ ?>	
				<div class="alert alert-danger" role="alert">
					GAGAL! Data Gagal Diupdate!
				</div>
			<?php } ?>	

			<?php if(isset($_GET['success-delete'])) { ?>
				<div class="alert alert-success" role="alert">
				  	BERHASIL! Data Berhasil Dihapus!
				</div>
			<?php } elseif(isset($_GET['error-delete'])){ ?>	
				<div class="alert alert-danger" role="alert">
					GAGAL! Data Gagal Dihapus!
				</div>
			<?php } ?>	

			<?php include('config/koneksi.php') ?>
			
			<?php
				$query = "SELECT * FROM tbl_dosen ORDER BY id_dosen DESC";
				$result = mysqli_query($connection, $query);
			?>

			<a href="tambah-dosen.php" class="btn btn-success btn-md" style="margin-bottom: 10px">TAMBAH</a>

			<table class="table table-striped table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">NO.</th>
			      <th scope="col">NAMA</th>
			      <th scope="col">EMAIL</th>
			      <th scope="col">ALAMAT</th>
			      <th scope="col" style="width: 20%">AKSI</th>
			    </tr>
			  </thead>
			  <tbody>

			  	<?php
			  		$no = 1;
			  		while ($row = mysqli_fetch_array($result)) {
			  	?>

				    <tr>
				      <td><?php echo $no ?></td>
				      <td><?php echo $row['nama_dosen'] ?></td>
				      <td><?php echo $row['email'] ?></td>
				      <td><?php echo $row['alamat'] ?></td>
				      <td class="text-center">
					      <a href="edit-dosen.php?id=<?php echo $row['id_dosen'] ?>" class="btn btn-primary btn-sm">EDIT</a>
					      <a href="hapus-dosen.php?id=<?php echo $row['id_dosen'] ?>" class="btn btn-danger btn-sm">HAPUS</a>
				      </td>
				    </tr>

			    	<?php $no++; ?>

				<?php } ?>

			  </tbody>
			</table>


		</div>
	</div>
</div>

</body>
</html>