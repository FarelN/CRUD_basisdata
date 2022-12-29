<?php
//add dbconnect

include('dbconnect.php');

$nama = $_POST['mhs'];
$progdi = $_POST['pstd'];
$jrsn = $_POST['jrs'];
$angktn = $_POST['akt'];

//query

$query =  "INSERT INTO mahasiswa(nm_mhs , prodi , jurusan , angkatan) VALUES('$nama' , '$progdi' , '$jrsn' , '$angktn')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:index.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>