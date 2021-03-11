<?php
session_start();
if(isset($_SESSION["userid"])){

//Compare role id 
if($_SESSION['role']==2){
    header("Location: admin/index.php");
    exit();
}elseif($_SESSION['role']==1){
    header("Location: user/index.php");
    exit();
}

}else{
    header("Location: ");
    //exit();
}

?>