<?php

require_once "../../app/conn.php";
require_once "../../app/token.inc.php";
if(isset($_POST["create"])){
session_start();
$status = 1;
$date = date('Y-m-d');
$user= $_SESSION["userid"];
$subject = mysqli_real_escape_string($conn,$_POST["subject"]);
$priority = $_POST["priority"];
$service = $_POST["service"];
$location = $_POST["location"];
$description = mysqli_real_escape_string($conn,$_POST["description"]);
$action = mysqli_real_escape_string($conn,$_POST["action"]);
$sql = "INSERT INTO complaint (userID, serviceID, locationID, subject, description, action, priority, statusID, date) VALUES ('$user' , '$service' , '$location' , '$subject', '$description', '$action', '$priority', '$status', '$date')";

if ($conn->query($sql) === TRUE) {
    $randSuccess = getToken(10);
    header("Location: ../index.php?created=$randSuccess");
    exit();  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;    
    // $randSuccess = getToken(10);
    // header("Location: ../index.php?error=$randSuccess");
    // exit();  
}

}

?>
