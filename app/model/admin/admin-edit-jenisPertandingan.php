<?php 
session_start();
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {

	if($_SESSION['level'] == 'Admin' || $_SESSION['level'] == 'Front Office'){


	$id 					= $_POST['id'];
	$jenisPertandingan		= $_POST['jenisPertandingan'];
	


	$sql = "UPDATE jenispertandingan SET namaJenispertandingan = '$jenisPertandingan' WHERE idJenispertandingan = '$id'";
	$exe = $conn->query($sql);



		echo "<script>
				alert('Data Berhasil Di Update');
				document.location.href='../../../admin/?halaman=admin-data-jenisPertandingan'
			  </script>";

	}else{
		echo "<script>
				alert('Akses Dilarang');
				document.location.href='../../../admin/?halaman=admin-data-jenisPertandingan'
			  </script>";
	}
}

?>