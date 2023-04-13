<?php
session_start(); 
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {
	
	if($_SESSION['level'] == 'Admin' || $_SESSION['level'] == 'Content Writer'){

		$judulBerita	= $_POST['judulBerita'];
		$tanggal		= date('Y-m-d');
		$isiBerita		= $_POST['isiBerita'];
		$foto    		= $_FILES['fotoBerita']['name'];
 		$tmp     		= $_FILES['fotoBerita']['tmp_name'];
		$idAdmin		= $_SESSION['idAdmin'];

		
		$sql = "INSERT INTO berita VALUES ('','$judulBerita','$tanggal','$isiBerita','$foto','$idAdmin')";
		$exe = $conn->query($sql);
		move_uploaded_file($tmp, "../../../gambar/berita/$foto");
		
		if($exe){
			echo "<script>
				alert('Berhasil Tambah Data');
				document.location.href='../../../admin/?halaman=admin-laporan-berita'
		  	</script>";
		}else{

 	
		}
	}else{
		echo "<script>
				alert('Akses Dilarang');
				document.location.href='../../../admin/?halaman=admin-laporan-berita'
		  	 </script>";
	}


		 
 } 

?>