<?php

if(isset($_POST['register'])){
    include_once 'db.php';
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    if(empty($username) || empty($password)){
        header("Location: ../register.php?register=empty");
        exit();
    }else{
        if(!preg_match("/^[a-zA-Z]*$/", $username) || !preg_match("/^[a-zA-Z]*$/", $password)){
            header("Location: ../register.php?register=invalid");
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE user_name='$username'";
            $out = mysqli_query($connection, $sql);
            $outCheck = mysqli_num_rows($out);
            if($outCheck > 0){
                header("Location: ../register.php?register=userTaken");
                exit();
            }else{
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (user_name, user_pass) VALUES ('$username', '$hash');";
                mysqli_query($connection, $sql);
                header("Location: ../index.php?register=success");
                exit();
            }
        }
    }
}else{
    header("Location: ../register.php");
    exit();
}