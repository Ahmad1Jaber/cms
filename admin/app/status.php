<?php
session_start();
require_once "../../app/conn.php";
require_once "../../app/token.inc.php";

//Check if update button is set
if(isset($_POST["update"])){

    //Get all data from POST and SESSION
    $admin= $_SESSION['userid'];
    $statusID=$_POST["status"];
    $complaintID=$_GET["id"];

    // Update and query statement 
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