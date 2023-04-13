<?php
session_start(); 
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {

	if($_SESSION['level'] == 'Admin' || $_SESSION['level'] == 'Front Office'){


		$tim1	= $_POST['tim1'];
		$tim2	= $_POST['tim2'];
		$waktu	= $_POST['waktuTanding'];
		$tanggal= $_POST['tanggalTanding'];
		$venue	= $_POST['venue'];
		$status	= "Belum Dimulai";
		$idJp	= $_POST['idJenispertandingan'];


		$sql = "INSERT INTO pertandingan VALUES ('','$tim1','$tim2','$waktu','$tanggal','$venue','$status','$idJp')";
		$exe = $conn->query($sql);
		
		if($exe){
			echo "<script>
				alert('Berhasil Tambah Data');
				document.location.href='../../../admin/?halaman=admin-data-pertandingan'
		  	</script>";
		}else{
			
 	
		}
	}else{
		echo "<script>
 					alert('Akses Di Larang');
 					document.location.href='../../../admin/?halaman=admin-data-pertandingan&menu=tambah-pertandingan'
  			 	</script>";
	}


		 
 } 

?>