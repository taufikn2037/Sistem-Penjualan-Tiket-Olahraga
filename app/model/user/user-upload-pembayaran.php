<?php
session_start(); 
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {
	

		$idPemesanan	= $_POST['idPemesanan'];
		$tanggal		= date('Y-m-d');
		$foto    		= $_FILES['fotoPembayaran']['name'];
 		$tmp     		= $_FILES['fotoPembayaran']['tmp_name'];
		$status			= "Pending";

		
		$sql = "INSERT INTO buktipembayaran VALUES ('','$foto','$status','$tanggal','$idPemesanan')";
		$exe = $conn->query($sql);
		move_uploaded_file($tmp, "../../../gambar/pembayaran/$foto");
		
		if($exe){
			echo "<script>
				alert('Upload Pembayaran Berhasil');
				document.location.href='../../../Dashboard/?halaman=user-Tiket'
		  	</script>";
		}else{

 	
		}


		 
 } 

?>