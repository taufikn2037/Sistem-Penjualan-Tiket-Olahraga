<?php 
session_start();
include '../../../conn/conn.php';

if (isset($_POST['submit'])) {
 	
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	$sql  = "SELECT * FROM admin WHERE userAdmin = '$username' AND passAdmin = '$password'";
 	$exe  = $conn->query($sql);
	$cek  = $exe->num_rows;
 	$data = $exe->fetch_array();

 	$getId    		= $data['idAdmin'];
 	$getUser  		= $data['userAdmin'];
 	$getPass   		= $data['passAdmin'];
 	$getemail	  	= $data['emailAdmin'];
 	$getLevel  		= $data['level'];

	//only for multilevel
 	if($cek == 1) {

		$_SESSION['idAdmin']   		= $getId;
		$_SESSION['userAdmin'] 		= $getUser;
		$_SESSION['passAdmin'] 		= $getPass;
		$_SESSION['emailAdmin']		= $getemail;
		$_SESSION['level']    		= $getLevel;
  		header('location: ../../../admin/?halaman=admin-profile');

 	}else{
 
 		header('location: ../../../admin/login.php');

 	}


 } 

?>