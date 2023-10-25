<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == 'GET'){
        die("This page does not accept get requests!!!");
    }
    require "../../dbconfig.php";
    $connection = new mysqli($servername, $username, $password, $dbname);
    if($connection->connect_errno) {
        die("Connection failed: " . $connection->connect_errno);
    }

    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];
    $phone = $_POST["phone"];

    $password_hash = password_hash($password, PASSWORD_ARGON2I);

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->fetch_assoc()){
        $_SESSION["user_exist"] = true;
        header('Location: ../register.php');
    }
    else{
        if($password != $confirm_password){
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $_SESSION["password_missmatch"] = true;
            header('Location: ../register.php');
            die;
        }

        $sql = "INSERT INTO users (email, password, phone) VALUES (?, ?, ?)";
        $stmt = $connection->prepare($sql);
        if(!$stmt) {
            die("Failed preparing SQL statment: " . $connection->error);
        }
        $stmt->bind_param('sss', $email, $password_hash, $phone);
        $stmt->execute();
        header('Location: ../login.php');
    }
?>