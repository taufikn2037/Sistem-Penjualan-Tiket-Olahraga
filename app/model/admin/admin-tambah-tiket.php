<?php
	session_start();
 	include "../../../conn/conn.php";

if(isset($_POST['submit'])){

	if($_SESSION['level'] == 'Admin' || $_SESSION['level'] == 'Front Office'){

		$jenisLaga		= $_POST['jenisLaga'];
		$jenisKelas		= $_POST['jenisKelas'];
		$jumlahTiket 	= $_POST['jumlahTiket'];
		$hargaTiket		= $_POST['hargaTiket'];
		$idPertandingan	= $_POST['idPertandingan'];

		$sql 	= "INSERT INTO tiket VALUES ('','$jenisLaga','$jenisKelas','$jumlahTiket','$hargaTiket','$idPertandingan')";
		$exec 	= $conn->query($sql);

		if($exec){
			echo "	<script>
						alert('Berhasil Menambahkan Data');
						document.location.href='../../../admin/?halaman=admin-data-tiket'
					</script>";
		}else{

		}
	}else{
		echo "	<script>
					alert('Akses Dilarang');
					document.location.href='../../../admin/?halaman=admin-data-tiket'
				</script>";
	}

}

?>