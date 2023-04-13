<?php
session_start(); 
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {

		if($_SESSION['level'] == 'Admin' || $_SESSION['level'] == 'Front Office'){
		
			$jenisPertandingan	  	= $_POST['jenisPertandingan'];

			$sql = "INSERT INTO jenispertandingan VALUES ('','$jenisPertandingan')";
			$exe = $conn->query($sql);
			
			if($exe){
				echo "<script>
					alert('Berhasil Tambah Data');
					document.location.href='../../../admin/?halaman=admin-data-jenisPertandingan'
				</script>";
			}else{
				echo "<script>
						alert('Gagal Menambahkan Data');
						document.location.href='../../../admin/?halaman=admin-data-jenisPertandingan'
					</script>";
		
			}
		}else{
			echo "<script>
						alert('Akses Dilarang');
						document.location.href='../../../admin/?halaman=admin-data-jenisPertandingan'
				  </script>";
		}

		


		 
 } 

?>