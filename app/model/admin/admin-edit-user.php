<?php 
session_start();
include '../../../conn/conn.php';
if (isset($_POST['submit'])) {

	if($_SESSION['level'] == 'Admin'){


	$idUser			= $_POST['id'];
	$namaUser		= $_POST['nama'];
	$noTlp			= $_POST['tlp'];
	$alamat			= $_POST['alamat'];		
	$emailUser     	= $_POST['email'];
	$username	  	= $_POST['username'];
	$pass 			= $_POST['password'];
	
	

	$sql = "UPDATE user SET namaUser = '$namaUser', noTelp = '$noTlp', alamatUser = '$alamat', emailUser = '$emailUser', usernameUser = '$username', passUser = '$pass' WHERE idUser = '$idUser'";
	$exe = $conn->query($sql);




		echo "<script>
				alert('Data Berhasil Di Update');
				document.location.href='../../../admin/?halaman=admin-data-user'
			</script>";

	}else{
		echo "<script>
				alert('Akses Dilarang!');
				document.location.href='../../../admin/?halaman=admin-data-user'
			</script>";
	}

} 

?>