<?php
session_start();
require_once "../../app/conn.php";
require_once "../../app/token.inc.php";


if(isset($_POST["update"])){
    $admin= $_SESSION['userid'];
    $statusID=$_POST["status"];
    $complaintID=$_GET["id"];
    $sql = "UPDATE complaint SET statusID = '$statusID',  adminID='$admin' WHERE c_id='$complaintID'";

    if (mysqli_query($conn, $sql)) {
        $randSuccess = getToken(10);
        header("Location: ../index.php?success=$randSuccess");
        exit(); 
    } else {    
        $randSuccess = getToken(10);
        header("Location: ../index.php?error=$randSuccess");
        exit(); 
    }
}

?>