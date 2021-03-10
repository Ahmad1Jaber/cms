<?php
//Start session
session_start();
require_once "../app/token.inc.php";

//Check if UserID session is set
if(isset($_SESSION["userid"])){

//Compare role id 
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