<?php 
    session_start();
    include '../conn/conn.php';
    
    if (isset($_SESSION['idUser'])) {
        include '../app/view/user/user-dashboard.php';
    }else{
 	    header("location: login.php");
    } 


    

?>