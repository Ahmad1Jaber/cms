<?php
session_start();
if(isset($_SESSION["userid"])){

    header("Location: ");
    //exit();
    
}else{
    header("Location: ../index.php ");
    exit();
}