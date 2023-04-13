<?php 
session_start();
include '../../../conn/conn.php';

if (isset($_POST['submit'])) {

	if($_SESSION['level'] == 'Admin'){

	$id 			= $_POST['id'];
	$username		= $_POST['userAdmin'];
	$passAdmin		= $_POST['passAdmin'];
	$emailAdmin		= $_POST['emailAdmin'];
	$levelAdmin		= $_POST['level'];
	


	$sql = "UPDATE admin SET userAdmin = '$username', passAdmin = '$passAdmin', emailAdmin = '$emailAdmin', level = '$levelAdmin' WHERE idAdmin = '$id'";
	$exe = $conn->query($sql);

	if($_SESSION['idAdmin'] == $id){

		echo "<script>
				alert('Data Berhasil Di Update');
				document.location.href='../../../admin/'
			 </script>";

		session_destroy();

	}else{

		echo "<script>
				alert('Data Berhasil Di Update');
				document.location.href='../../../admin/?halaman=admin-data-admin'
			</script>";

	}
}else{
	echo "<script>
				alert('Akses Dilarang !');
				document.location.href='../../../admin/?halaman=admin-data-admin'
			</script>";
}


} 

?>