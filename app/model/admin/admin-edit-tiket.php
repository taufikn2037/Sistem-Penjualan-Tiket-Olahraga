<?php 
session_start();
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {

	if($_SESSION['level'] == 'Admin' || $_SESSION['level'] == 'Front Office'){

	$idTiket		= $_POST['idTiket'];
	$jenisLaga		= $_POST['jenisLaga'];
	$jenisKelas		= $_POST['jenisKelas'];
	$jumlahTiket 	= $_POST['jumlahTiket'];
	$hargaTiket		= $_POST['hargaTiket'];
	


	$sql = "UPDATE tiket SET jenisLaga = '$jenisLaga', jenisKelas = '$jenisKelas', jumlahTiket = '$jumlahTiket', hargaTiket = '$hargaTiket'WHERE idTiket = '$idTiket'";
	$exe = $conn->query($sql);

		echo "<script>
				alert('Data Berhasil Di Update');
				document.location.href='../../../admin/?halaman=admin-data-tiket'
			 </script>";
	}else{
		echo "<script>
				alert('Akses Dilarang');
				document.location.href='../../../admin/?halaman=admin-data-tiket'
			 </script>";
	}
	

} 

?>