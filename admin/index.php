<?php 
    session_start();
    include '../conn/conn.php';
    
    if (isset($_SESSION['idAdmin'])) {
        include '../app/view/admin/admin-dashboard.php';
    }else{
 	    header("location: login.php");
    } 


    

?>