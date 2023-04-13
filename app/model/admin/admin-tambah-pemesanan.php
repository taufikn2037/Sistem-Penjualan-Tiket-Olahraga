<?php
session_start(); 
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {

	if($_SESSION['level'] == 'Admin' || $_SESSION['level'] == 'Front Office'){

		$emailUser		= $_POST['cekId'];
		$idTiket		= $_POST['idTiket'];
		$qty			= $_POST['qty'];

		$sqlCekemail	= "SELECT * FROM user WHERE emailUser = '$emailUser'";
		$exeCekemail	= $conn->query($sqlCekemail);
		$cekRows 		= $exeCekemail->num_rows;
		$res = $exeCekemail->fetch_array();

		$sqlCekTiket	= "SELECT * FROM tiket WHERE idTiket = '$idTiket'";
		$exeCekTiket	= $conn->query($sqlCekTiket);
		$resTiket		= $exeCekTiket->fetch_array();

		$Stok	= $resTiket['jumlahTiket'];
		$Harga	= $resTiket['hargaTiket'];
		$sisa 	= $Stok - $qty;
		$total	= $Harga * $qty;


		if($cekRows == 1){	
		
			$idPemesanan	= date('Ymds',time());
			$tanggal		= date('Y-m-d');
			$status			= "Selesai";
			$statusTiket	= "Belum";
			$idUser			= $res['idUser'];
			

			$sql = "INSERT INTO pemesanan VALUES ('$idPemesanan','$qty','$Harga','$total','$tanggal','$status','$statusTiket','$idUser','$idTiket')";
			$exe = $conn->query($sql);

			if($exe){

				$sqlUpadate = "UPDATE tiket SET jumlahTiket = '$sisa' WHERE idTiket = '$idTiket'";
				$exe = $conn->query($sqlUpadate);

				echo "<script>
					alert('Berhasil Tambah Data');
					document.location.href='../../../admin/?halaman=admin-laporan-pemesanan'
				</script>";

			}else{

				echo "<script>
						alert('Akses Di Larang');
						document.location.href='../../../admin/?halaman=admin-laporan-pemesanan&menu=tambah-pemesanan'
					</script>";
			}

		}else{
			
			$sqlNew = "INSERT INTO user VALUES ('','$emailUser','','','$emailUser','user$emailUser','pass$emailUser')";
			$exeNew	= $conn->query($sqlNew);

			if($exeNew){

				echo "<script>
						alert('Akun Berhasil Dibuat');
					 </script>";
				
					$sqlCekemail	= "SELECT * FROM user WHERE emailUser = '$emailUser'";
					$exeCekemail	= $conn->query($sqlCekemail);
					$res = $exeCekemail->fetch_array();

					$idPemesanan	= date('Ymds',time());
					$tanggal		= date('Y-m-d');
					$status			= "Selesai";
					$statusTiket	= "Belum";
					$idUser			= $res['idUser'];

					$sql = "INSERT INTO pemesanan VALUES ('$idPemesanan','$qty','$Harga','$total','$tanggal','$status','$statusTiket','$idUser','$idTiket')";
					$exe = $conn->query($sql);

					if($exe){

						$sqlUpadate = "UPDATE tiket SET jumlahTiket = '$sisa' WHERE idTiket = '$idTiket'";
						$exe = $conn->query($sqlUpadate);

						echo "<script>
							alert('Berhasil Tambah Data');
							document.location.href='../../../admin/?halaman=admin-laporan-pemesanan'
						</script>";

					}else{

						echo "<script>
								alert('Akses Di Larang');
								document.location.href='../../../admin/?halaman=admin-laporan-pemesanan&menu=tambah-pemesanan'
							</script>";
					}

					
			}
		}
	}else{
		echo "<script>
				alert('Akses Di Larang');
				document.location.href='../../../admin/?halaman=admin-laporan-pemesanan&menu=tambah-pemesanan'
			</script>";
	}	 
 } 

?>