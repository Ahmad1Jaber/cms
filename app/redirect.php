<?php
session_start();
if(isset($_SESSION["userid"])){

    header("Location: user/");
    exit();
    
}else{
    header("Location: ");
    //exit();
}

?>