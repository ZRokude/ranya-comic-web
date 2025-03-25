<?php
session_start();
include "signUp.php";

if (isset($_POST['name']) && (isset($_POST['email'])
&& (isset($_POST['password']) && (isset($_POST['confirm_password']))))){

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $cfm_password = validate($_POST['confirm_password']);

    // check password
    if ($password !== $cfm_password){
        die("Password doesnt match");
        exit();
    }

    $email = test_input($_POST['$email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailError = "Invalid Format";
    }

    // password hash
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $connect = new mysqli("localhost", "root", "", "komik");

        if ($connect->connect_error){
            die("connection:".$connect->connect_error);
            }

        // check username
        $stmt = $connect->prepare("SELECT COUNT(*) FROM user WHERE username = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $stmt->bind_result($userExist);
        $stmt->fetch();
        $stmt->close();

        if($userExist > 0){
            die("username has been used");
        }

    // connect mysql
    $stmt = $connect->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()){
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $stmt->close();
    $connect->close();
};


?>