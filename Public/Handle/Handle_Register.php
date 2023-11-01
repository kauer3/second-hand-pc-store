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
    $firstname = $_POST["first-name"];
    $lastname = $_POST["last-name"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $zipcode = $_POST["zip"];
    $country = $_POST["country"];
    $confirm_password = $_POST["confirm-password"];
    $phone = $_POST["phone"];

    $password_hash = password_hash($password, PASSWORD_ARGON2I);

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->fetch_assoc()){
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $_SESSION["firstname"] = $firstname;
        $_SESSION["lastname"] = $lastname;
        $_SESSION["address"] = $address;
        $_SESSION["city"] = $city;
        $_SESSION["zip"] = $zipcode;
        $_SESSION["country"] = $country;
        $_SESSION["phone"] = $phone;
        $_SESSION['error_message'] = "Email already registered!!!";
        $_SESSION["register_error"] = true;
        header('Location: ../register.php');
    }
    else{
        if($password != $confirm_password){
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $_SESSION["firstname"] = $firstname;
            $_SESSION["lastname"] = $lastname;
            $_SESSION["address"] = $address;
            $_SESSION["city"] = $city;
            $_SESSION["zip"] = $zipcode;
            $_SESSION["country"] = $country;
            $_SESSION["phone"] = $phone;
            $_SESSION["register_error"] = true;
            $_SESSION['error_message'] = "Passwords do not match!!!";
            header('Location: ../register.php');
            die;
        }

        $sql = "INSERT INTO users (email, password, firstname, lastname, address, city, zipcode, country, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        if(!$stmt) {
            die("Failed preparing SQL statment: " . $connection->error);
        }
        $stmt->bind_param('ssssssiss', $email, $password_hash, $firstname, $lastname, $address, $city, $zipcode, $country, $phone);
        $stmt->execute();
        header('Location: ../login.php');
    }
?>