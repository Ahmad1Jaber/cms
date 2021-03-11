<?php
session_start();
require_once "../../app/conn.php";
require_once "../../app/token.inc.php";

//Check if update button is set
if(isset($_POST["update"])){

    //Get all data from POST and SESSION
    $userID = $_GET['id'];
    $roleID = $_POST['role'];

    // Update and query statement 
    $sql = "UPDATE users SET roleID = '$roleID' WHERE id='$userID'";
    if (mysqli_query($conn, $sql)) {
        $randSuccess = getToken(10);
        $bits = explode('?',$_SERVER['HTTP_REFERER']);
        $redirect = $bits[0];
        header("Location: {$redirect}?success=$randSuccess");
        exit(); 
    } else {    
        $randSuccess = getToken(10);
        $bits = explode('?',$_SERVER['HTTP_REFERER']);
        $redirect = $bits[0];
        header("Location: {$redirect}?error=$randSuccess");
        exit(); 
    }
}

