<?php
session_start();
require_once "../app/token.inc.php";
if(isset($_SESSION["userid"])){

    header("Location: ");
    //exit();
    
}else{
    $randSuccess = getToken(10);
    header("Location: ../index.php?session=$randSuccess ");
    exit();
}