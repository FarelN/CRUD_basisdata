<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar mahasiswa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>

	<?php
	//tambahkan dbconnect
	include('dbconnect.php');

	//query
	$query = "SELECT * FROM mahasiswa";

	$result = mysqli_query($conn , $query);

	?>

	<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
		<h3>Data Mahasiswa</h3>
		<hr>
		<div class="row">
			<div class="col-sm-4">
				<h3>Form Tambah Data Mahasiswa</h3>
				<form role="form" action="insert.php" method="post">
					<div class="form-group">
						<label>Nama Mahasiswa</label>
						<input type="text" name="mhs" class="form-control">
					</div>
					<div class="form-group">
						<label>Program Studi</label>
						<input type="text" name="pstd" class="form-control">
					</div>
					<div class="form-group">
						<label>Jurusan</label>
						<input type="text" name="jrs" class="form-control">
					</div>
					<div class="form-group">
						<label>Angkatan</label>
						<input type="text" name="akt" class="form-control">
					</div>
					<button type="submit" class="btn btn-info btn-block">Tambah mahasiswa</button>					
				</form>
				
			</div>
			<div class="col-sm-8">
				<h3>Data Mahasiswa</h3>
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Mahasiswa</th>
							<th>Program Studi</th>
							<th>Jurusan</th>
							<th>Angkatan</th>
							<th>Edit/Delete</th>
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['nm_mhs']; ?></td>
							<td><?php echo $row['prodi']; ?></td>
							<td><?php echo $row['jurusan']; ?></td>
							<td><?php echo $row['angkatan']; ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['id_mhs'];?>" class="btn btn-success" role="button">Edit</a>
								<a href="delete.php?id=<?php echo $row['id_mhs']?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>

						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
			</div>
			
		</div>
		
	</div>
</body>

	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>

</html> 