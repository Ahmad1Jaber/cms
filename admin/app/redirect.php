<?php
session_start();
require_once "../app/token.inc.php";
if(isset($_SESSION["userid"])){
if($_SESSION['role']==2){
    header("Location: ");
    //exit();
}elseif($_SESSION['role']==1){
    header("Location:../admin/index.php");
    exit();
}
}else{
    $randSuccess = getToken(10);
    header("Location: ../index.php?session=$randSuccess ");
    exit();
}