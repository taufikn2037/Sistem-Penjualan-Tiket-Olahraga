<?php

include '../../../conn/conn.php';
if (isset($_POST['submit'])) {


    var_dump($_POST);


		$namaUser		= $_POST['nama'];
		$noTlp			= $_POST['tlp'];
		$alamat			= $_POST['alamat'];		
		$emailUser     	= $_POST['email'];
		$username	  	= $_POST['username'];
		$pass 		    = $_POST['password'];


		$sql = "INSERT INTO user VALUES ('','$namaUser','$noTlp','$alamat','$emailUser','$username','$pass')";
		$exe = $conn->query($sql);
		
		if($exe){
			echo "<script>
				alert('Berhasil Resgiter Silahkan Login !');
				document.location.href='../../../Dashboard/login.php'
		  	    </script>";
		}
	


		 
 } 

?>