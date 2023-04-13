<?php 
session_start();
include '../../../conn/conn.php';

if (isset($_POST['submit'])) {
 	
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	$sql  = "SELECT * FROM user WHERE usernameUser = '$username' AND passUser = '$password'";
 	$exe  = $conn->query($sql);
	$cek  = $exe->num_rows;
 	$data = $exe->fetch_array();

 	$getId    		= $data['idUser'];
 	$getnama  		= $data['namaUser'];
 	$getTlp  		= $data['noTelp'];
	$getAlamat  	= $data['alamatUser'];
 	$getemail	  	= $data['emailUser'];
 	$getusername  	= $_POST['username'];
	$getPass		= $_POST['password'];

	//only for multilevel
 	if($cek == 1) {

		$_SESSION['idUser']   		= $getId;
		$_SESSION['namaUser'] 		= $getnama;
		$_SESSION['noTelp'] 		= $getTlp;
		$_SESSION['alamatUser']		= $getAlamat;
		$_SESSION['emailUser']    	= $getemail;
		$_SESSION['usernameUser']   = $getusername;
		$_SESSION['passUser']		= $getPass;

  		header('location: ../../../Dashboard/?halaman=user-profile');

 	}else{
 
 		header('location: ../../../Dashboard/login.php');

 	}


 } 

?>