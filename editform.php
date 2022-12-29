<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Mahasiswa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 

//koneksi database
include('dbconnect.php');

//query
$query = "SELECT * FROM mahasiswa WHERE id_mhs='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Mahasiswa</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id_mh" value="<?php echo $row['id_mhs']; ?>">

		<div class="form-group">
			<label>Nama Mahasiswa</label>
			<input type="text" name="mhs" class="form-control" value="<?php echo $row['nm_mhs']; ?>">			
		</div>

		<div class="form-group">
			<label>Program Studi</label>
			<input type="text" name="pstd" class="form-control" value="<?php echo $row['prodi']; ?>">			
		</div>

		<div class="form-group">
			<label>Jurusan</label>
			<input type="text" name="jrs" class="form-control" value="<?php echo $row['jurusan']; ?>">			
		</div>

		<div class="form-group">
			<label>Angkatan</label>
			<input type="text" name="akt" class="form-control" value="<?php echo $row['angkatan']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block">Update Data Mahasiswa</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 