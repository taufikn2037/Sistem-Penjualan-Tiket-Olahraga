<?php 
session_start();
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {

	if($_SESSION['level'] == 'Admin' || $_SESSION['level'] == 'Front Office'){

		$idPertandingan 	= $_POST['id'];
		$tim1				= $_POST['tim1'];
		$tim2				= $_POST['tim2'];
		$waktu				= $_POST['waktuTanding'];
		$tanggal			= $_POST['tanggalTanding'];
		$venue				= $_POST['venue'];
		$status				= $_POST['status'];
		$idJp				= $_POST['idJenispertandingan'];
		


		$sql = "UPDATE pertandingan SET tim1 = '$tim1', tim2 = '$tim2', waktuTanding = '$waktu', tanggalTanding = '$tanggal', venue = '$venue', status = '$status', idJenispertandingan = '$idJp' WHERE idPertandingan = '$idPertandingan'";
		$exe = $conn->query($sql);




		echo "<script>
				alert('Data Berhasil Di Update');
				document.location.href='../../../admin/?halaman=admin-data-pertandingan'
			</script>";
	}else{
		echo "<script>
				alert('Akses Dilarang');
				document.location.href='../../../admin/?halaman=admin-data-pertandingan'
			</script>";
	}



} 

?>