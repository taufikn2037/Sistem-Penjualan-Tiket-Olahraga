<?php
session_start(); 
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {

	if($_SESSION['level'] == 'Admin'){


		$namaUser		= $_POST['nama'];
		$noTlp			= $_POST['tlp'];
		$alamat			= $_POST['alamat'];		
		$emailUser     	= $_POST['email'];
		$username	  	= $_POST['username'];
		$pass 		= $_POST['password'];


		$sql = "INSERT INTO user VALUES ('','$namaUser','$noTlp','$alamat','$emailUser','$username','$pass')";
		$exe = $conn->query($sql);
		
		if($exe){
			echo "<script>
				alert('Berhasil Tambah Data');
				document.location.href='../../../admin/?halaman=admin-data-user'
		  	</script>";
		}else{
			echo "<script>
 					alert('Gagal Menambahkan Data');
 					document.location.href='../../../admin/?halaman=admin-data-user&menu=tambah-user'
  			 	</script>";
 	
		}
	}else{
			echo "<script>
			alert('Akses Di Larang');
			document.location.href='../../../admin/?halaman=admin-data-user&menu=tambah-user'
		</script>";
	}


		 
 } 

?>