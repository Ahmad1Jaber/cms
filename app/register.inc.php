<?php
if (isset($_POST['register-submit'])) {
    require 'conn.php';
    require_once('token.inc.php');
    $userName=$_POST['user-name'];
    $userFirst=$_POST['first-name'];
    $userLast=$_POST['last-name'];
    $userMail=$_POST['user-email'];
    $userPWD=$_POST['user-pwd'];
    $userPWDRE=$_POST['user-pwdCon'];
    $userPhone=$_POST['phone-number'];
    if(empty($userName) || empty($userMail) || empty($userPWD) || empty($userPWDRE) || empty($userPhone) ){
        $randSuccess = getToken(10);
        header("Location: ../register.php?empty=$randSuccess&uid=".$userName."&email=".$userMail."");
        exit();
    }
    elseif(!filter_var($userMail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$userName)){
        $randSuccess = getToken(10);
        header("Location: ../register.php?errEmail= $randSuccess");
        exit();
    }
    elseif(!filter_var($userMail, FILTER_VALIDATE_EMAIL)){
        header("Location: ../register.php?error=invalidmail&uid=".$userName."");
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/",$userName)){
        header("Location: ../register.php?error=invaliduid&email=".$userMail."");
        exit();
    }
    elseif ($userPWD !== $userPWDRE) {
        header("Location: ../register.php?error=passwordcheck&uid=".$userName."&email=".$userMail."");
        exit();
    }
    else{
        $sql = "SELECT username FROM users WHERE username=?";
        $stmt= mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../register.php?error=general");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $userName);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck>0) {
                header("Location: ../register.php?error=usernameTaken&email=".$userMail."");
                exit();
            }
        
            else{
                $sql="INSERT INTO users (username,first_name,last_name,email,password,phone_number) VALUES (?,?,?,?,?,?)";
                $stmt= mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ../register.php?error=DBERROR");
                     exit();
                 }else{
                     $hashPWD= password_hash($userPWD, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssssss", $userName, $userFirst, $userLast, $userMail, $hashPWD, $userPhone);
                    mysqli_stmt_execute($stmt);
                    $randSuccess = getToken(10);
                    header("Location: ../index.php?registered=$randSuccess");
                     exit();
                 }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}else {
    header("Location: ../register.php?error=SQLERROR");
    exit();
}
?>