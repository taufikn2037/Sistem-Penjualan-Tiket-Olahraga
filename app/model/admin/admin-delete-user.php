<?php 
session_start();
include '../../../conn/conn.php';

if(isset($_GET['id'])) {

	if($_SESSION['level'] == 'Admin'){

 		
 		$id = $_GET['id'];

 		$sql = "DELETE FROM user WHERE idUser = '$id'";
 		$exe = $conn->query($sql);

 		if($exe) {
 			echo "<script>
 					alert('Data Berhasil Di Hapus');
 					document.location.href='../../../admin/?halaman=admin-data-user'
  				  </script>";
 		}else{
 		 	echo "<script>
 					alert('Data Gagal Di Hapus');
 					document.location.href='../../../admin/?halaman=admin-data-user'
  				  </script>";


 		} 
	}else{
		echo "<script>
		alert('Akses Dilarang');
		document.location.href='../../../admin/?halaman=admin-data-user'
	   </script>";
	}
 }
 
 ?>