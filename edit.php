<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['id_bk'];
$judul = $_GET['mhs'];
$penerbit = $_GET['pstd'];
$genre = $_GET['jrs'];
$tahun = $_GET['akt'];

//query update
$query = "UPDATE mahasiswa SET nm_mhs='$judul' , prodi='$penerbit' , jurusan='$genre' , angkatan='$tahun' WHERE id_mhs='$id' ";

if (mysqli_query($conn, $query)) {
	# credirect ke page index
	header("location:index.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>