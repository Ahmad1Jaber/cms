<?php
if (isset($_POST['login-submit'])) {
    require 'conn.php';
    require_once('token.inc.php');
    $userName=$_POST['user-name'];
    $pword=$_POST['user-password'];
    if(empty($userName) || empty($pword)){
        $randSuccess = getToken(10);
        header("Location: ../index.php?empty=$randSuccess");
        exit();
    }else{
        $sql="SELECT * FROM users WHERE username=? OR email=?;";
        $stmt=mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            $randSuccess = getToken(10);
            header("Location: ../index.php?dberror=$randSuccess");
            exit(); 
        }else {
            mysqli_stmt_bind_param($stmt,"ss",$userName,$userName);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if ($row=mysqli_fetch_assoc($result)) {
                $pwdCheck=password_verify($pword,$row['password']);
                if($pwdCheck==false){
                    $randSuccess = getToken(10);
                    header("Location: ../index.php?pwd=$randSuccess");
                    exit(); 
                }elseif ($pwdCheck==true) {
                    session_start();
                    $_SESSION['userid']=$row['id'];
                    $_SESSION['username']=$row['username'];
                    $_SESSION['role']=$row['roleID'];
                    if($_SESSION['role']==1){
                    $randSuccess = getToken(10);
                    header("Location: ../user/index.php?success=$randSuccess");
                    exit(); 
                    }elseif($_SESSION['role']==2){
                        $randSuccess = getToken(10);
                        header("Location: ../admin/index.php?success=$randSuccess");
                        exit(); 
                        }
                }else{
                    $randSuccess = getToken(10);
                    header("Location: ../index.php?passwd=$randSuccess");
                    exit();  
                }
            }else {
                $randSuccess = getToken(10);
                header("Location: ../index.php?user=$randSuccess");
                exit();             }
        }
    }
}else{
    header("Location: ../index.php");
    exit();
}

?>