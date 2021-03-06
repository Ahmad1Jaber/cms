<?php 

if(isset($_GET["empty"])){
    echo "<div class=\"alert alert-warning\" role=\"alert\">";
    echo "Empty - Fields are empty!";
    echo "</div>";
}elseif(isset($_GET["dberror"])){
    echo "<div class=\"alert alert-danger\" role=\"alert\">";
    echo "Database - Databse Error!";
    echo "</div>";
}elseif(isset($_GET["pwd"])){
    echo "<div class=\"alert alert-secondary\" role=\"alert\">";
    echo "Password - Incorrect Password!";
    echo "</div>";
}elseif(isset($_GET["pwd"]) || isset($_GET["passwd"])){
    echo "<div class=\"alert alert-secondary\" role=\"alert\">";
    echo "Password - Incorrect Password!";
    echo "</div>";
}elseif(isset($_GET["user"])){
    echo "<div class=\"alert alert-secondary\" role=\"alert\">";
    echo "Username - User not found!";
    echo "</div>";
}elseif(isset($_GET["session"])){
    echo "<div class=\"alert alert-danger\" role=\"alert\">";
    echo "Session - Session Terminated!";
    echo "</div>";
}elseif(isset($_GET["logout"])){
    echo "<div class=\"alert alert-success\" role=\"alert\">";
    echo "Logout - User logged out!";
    echo "</div>";
}

?>