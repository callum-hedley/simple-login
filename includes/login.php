<?php

session_start();

if(isset($_POST['login'])){
    include 'db.php';
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    if(empty($username) || empty($password)){
        header("Location: ../register.php?register=empty");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_name='$username'";
        $out = mysqli_query($connection, $sql);
        $outCheck = mysqli_num_rows($out);
        if($outCheck < 1){
            header("Location: ../index.php?login=errorcheck");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($out)){
                $hashCheck = password_verify($password, $row['user_pass']);
                if($hashCheck == false){
                    header("Location: ../index.php?login=errorhash");
                    exit();
                }elseif($hashCheck == true){
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_name'] = $row['user_name'];
                    header("Location: ../about.php?login=success");
                    exit();
                }
            }
        }
    }
}else{
    header("Location: ../index.php?login=error");
    exit();
}