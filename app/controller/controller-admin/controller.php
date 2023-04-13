<?php 

if (isset($_GET['halaman'])) {

 	$halaman = $_GET['halaman'];

 	if ($halaman == 'admin-data-admin') {
 		include '../app/view/admin/admin-tampil-admin.php';
 	}else if ($halaman == 'admin-data-jenisPertandingan') {
 		include '../app/view/admin/admin-tampil-jenisPertandingan.php';
 	}else if ($halaman == 'admin-data-tiket') {
 		include '../app/view/admin/admin-tampil-tiket.php';
 	}else if ($halaman == 'admin-laporan-berita') {
 		include '../app/view/admin/admin-laporan-berita.php';
 	}else if ($halaman == 'admin-profile') {
 		include '../app/view/admin/admin-profile.php';
 	}else if ($halaman == 'admin-data-user') {
 		include '../app/view/admin/admin-tampil-user.php';
 	}else if ($halaman == 'admin-data-pertandingan') {
 		include '../app/view/admin/admin-tampil-pertandingan.php';
 	}else if ($halaman == 'admin-laporan-pemesanan') {
 		include '../app/view/admin/admin-laporan-pemesanan.php';
 	}else if ($halaman == 'admin-laporan-pembayaran') {
 		include '../app/view/admin/admin-laporan-pembayaran.php';
 	}else{

 	}

 }

?>