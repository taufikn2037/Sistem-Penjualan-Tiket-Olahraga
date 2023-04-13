<?php
session_start(); 
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {



		$idUser			= $_SESSION['idUser'];
		$idTiket		= $_POST['idTiket'];
		$qty			= $_POST['qty'];

		$sqlCekTiket	= "SELECT * FROM tiket WHERE idTiket = '$idTiket'";
		$exeCekTiket	= $conn->query($sqlCekTiket);
		$resTiket		= $exeCekTiket->fetch_array();

		$Stok	= $resTiket['jumlahTiket'];
		$Harga	= $resTiket['hargaTiket'];
		$sisa 	= $Stok - $qty;
		$total	= $Harga * $qty;



		
		$idPemesanan	= date('Ymds',time());
		$tanggal		= date('Y-m-d');
		$status			= "Diproses";
		$statusTiket	= "Belum";
			

		$sql = "INSERT INTO pemesanan VALUES ('$idPemesanan','$qty','$Harga','$total','$tanggal','$status','$statusTiket','$idUser','$idTiket')";
		$exe = $conn->query($sql);

			if($exe){

				$sqlUpadate = "UPDATE tiket SET jumlahTiket = '$sisa' WHERE idTiket = '$idTiket'";
				$exe = $conn->query($sqlUpadate);

				echo "<script>
					alert('Berhasil Tambah Data');
					document.location.href='../../../Dashboard/?halaman=user-Tiket'
				</script>";

			}else{

				echo "<script>
						alert('Akses Di Larang');
						document.location.href='../../../Dashboard/?halaman=user-Tiket'
					</script>";
			}

		

					
			
			 
 } 

?>