<?php 
session_start();
include '../../../conn/conn.php';

if(isset($_GET['id'])) {

	if($_SESSION['level'] == 'Admin' || $_SESSION['level'] == 'Front Office'){
 		
	$idPemesanan = $_GET['id'];
	$idPembayaran = $_GET['idV'];
	


	$sql = "UPDATE pemesanan SET statusPemesanan = 'Selesai' WHERE idPemesanan = '$idPemesanan'";
	$exe = $conn->query($sql);

	$sql2 = "UPDATE buktipembayaran SET statusBuktipembayaran = 'Diterima' WHERE idBuktipembayaran = $idPembayaran";
	$exe2 = $conn->query($sql2);




		echo "<script>
				alert('Data Berhasil Di Validasi');
				document.location.href='../../../admin/?halaman=admin-laporan-pemesanan'
			</script>";
	}else{
		echo "<script>
				alert('Akses Dilarang');
				document.location.href='../../../admin/?halaman=admin-laporan-pembayaran'
			</script>";
	}



} 

?>