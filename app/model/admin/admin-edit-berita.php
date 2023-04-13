<?php 
session_start();
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {


	if($_SESSION['level'] == 'Admin' || $_SESSION['level'] == 'Content Writer'){
	
	// Jika user menceklis checkbox yang ada di form ubah, lakukan :
		if(isset($_POST['ubah_foto'])){ 


			$idberita			= $_POST['id'];
			$judulBerita		= $_POST['judulBerita'];
			$tanggal			= $_POST['tglBerita'];
			$isiBerita			= $_POST['isiBerita'];
			$idAdmin			= $_SESSION['idAdmin'];
			$foto    			= $_FILES['fotoBerita']['name'];
			$tmp     			= $_FILES['fotoBerita']['tmp_name'];
		


		$sql = "UPDATE berita SET judulBerita = '$judulBerita', tanggalBerita = '$tanggal', isiBerita = '$isiBerita', fotoBerita = '$foto', idAdmin = '$idAdmin' WHERE idBerita = '$idberita'";
		move_uploaded_file($tmp, "../../../gambar/berita/$foto");
		$exe = $conn->query($sql);

			if($exe){

				echo "<script>
						alert('Data Berhasil Di Update');
						document.location.href='../../../admin/?halaman=admin-laporan-berita'
					</script>";
			}else{
				
			}

		}else{

			$idberita			= $_POST['id'];
			$judulBerita		= $_POST['judulBerita'];
			$tanggal			= $_POST['tglBerita'];
			$isiBerita			= $_POST['isiBerita'];
			$idAdmin			= $_SESSION['idAdmin'];

			$sql = "UPDATE berita SET judulBerita = '$judulBerita', tanggalBerita = '$tanggal', isiBerita = '$isiBerita', idAdmin = '$idAdmin' WHERE idBerita = '$idberita'";
			$exe = $conn->query($sql);

			if($exe){

				echo "<script>
						alert('Data Berhasil Di Update');
						document.location.href='../../../admin/?halaman=admin-laporan-berita'
					</script>";
			}else{

			}
		}
	}else{
		echo "<script>
			alert('Akses Dilarang');
			document.location.href='../../../admin/?halaman=admin-laporan-berita'
			</script>";


	
	}


} 

?>