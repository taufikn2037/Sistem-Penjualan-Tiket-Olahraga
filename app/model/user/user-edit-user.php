<?php 
session_start();
include '../../../conn/conn.php';

if (isset($_POST['submit'])) {


	var_dump($_POST);

	$id 				= $_POST['id'];
	$namaUser			= $_POST['namaUser'];
	$noTelp				= $_POST['noTelp'];
	$alamatUser			= $_POST['alamatUser'];
	$emailUser			= $_POST['emailUser'];
	$username			= $_POST['username'];
	$pass				= $_POST['password'];
	
	$sql = "UPDATE user SET namaUser = '$namaUser', noTelp = '$noTelp', alamatUser = '$alamatUser', emailUser = '$emailUser', usernameUser = '$username', passUser = '$pass' WHERE idUser = '$id'";
	$exe = $conn->query($sql);

	if($_SESSION['idUser'] == $id){

		echo "<script>
				alert('Data Berhasil Di Update');
				document.location.href='../../../Dashboard/'
			 </script>";

		session_destroy();
	}


} 

?>