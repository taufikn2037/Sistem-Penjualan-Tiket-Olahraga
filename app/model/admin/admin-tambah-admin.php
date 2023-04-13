<?php
session_start();
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {


	// var_dump($_SESSION['level']);

	if($_SESSION['level'] == 'Admin'){

		$userAdmin	  	= $_POST['username'];
		$passAdmin 		= $_POST['password'];
		$emailAdmin     = $_POST['email'];
		$levelAdmin		= $_POST['level'];

		var_dump($levelAdmin);

		$sql = "INSERT INTO admin VALUES ('','$userAdmin','$passAdmin','$emailAdmin','$levelAdmin')";
		$exe = $conn->query($sql);
		
		if($exe){
			echo "<script>
				alert('Berhasil Tambah Data');
				document.location.href='../../../admin/?halaman=admin-data-admin'
		  		</script>";
		}else{
			echo "<script>
 					alert('Gagal Menambahkan Data');
 					document.location.href='../../../admin/?halaman=admin-data-d&menu=tambah-admin'
  			 	</script>";
 	
		}
	}else{

		echo "<script>
				alert('Akses Dilarang!');
				document.location.href='../../../admin/?halaman=admin-data-admin'
		  	 </script>";
	}

	




		 
 } 

?>