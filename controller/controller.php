<?php include_once "../config/database.php"; ?>
<?php include_once "../model/User.php"; ?>
 
<?php
session_start();
 
if(isset($_GET['method'])){
    if($_GET['method']=="insertUser"){
        insertUser();
    }else if($_GET['method']=="loginUser"){
        loginUser();
    } else if($_GET['method']=="logoutUser") {  
        logoutUser();
    }else{
        echo "Zla metoda";
        die();
    }
} else {
    header('Location: ../View/index.php');
}
 
?>