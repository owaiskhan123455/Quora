<?php

    session_start();
    include('../common/db_connect.php');
    include('error_handler.php');

    getError("name");
    getError("email");
    getError("password");
    getError("confirm-password");

    if(!isset($_SESSION['name-error']) && !isset($_SESSION['email-error']) && !isset($_SESSION['password-error']) && !isset($_SESSION['confirm-password-error'])){
        
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        $password = $_SESSION["password"];
        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");

        $stmt->bind_param("sss", $name, $email, $hash);

        if($stmt->execute()){
            $_SESSION['users'] = [
                "name"=>$name,
                "email"=>$email
            ];
        }

    } else{
        header("Location: /quora/?signup=true");
        exit();
    }

?>