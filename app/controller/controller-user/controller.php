<?php 

if (isset($_GET['halaman'])) {

 	$halaman = $_GET['halaman'];

 	if ($halaman == 'user-jadwalPertandingan') {
 		include '../app/view/user/user-tampil-jadwalpertandingan.php';
 	}else if ($halaman == 'user-Tiket') {
 		include '../app/view/user/user-tampil-tiket.php';
 	}else if ($halaman == 'user-profile') {
 		include '../app/view/user/user-profile.php';
 	}else if ($halaman == 'user-history') {
		include '../app/view/user/user-history.php';
	}else{

 	}

 }

?>