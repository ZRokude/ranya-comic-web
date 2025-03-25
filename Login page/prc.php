<?php 
session_start();
include "Login.php";

if (isset($_POST['email']) && (isset($_POST['password']))){

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die ("Invalid Format");
    }


    $connect = new mysqli("localhost", "root", "", "komik");

    if ($connect->connect_error){
        die("connection failed:" . $connect->connect_error);
    }

    $stmt = $connect->prepare("SELECT password FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($dbpassword);
    $stmt->fetch();
    $stmt->close();

    if($dbpassword && password_verify($password, $dbpassword)){
        $_SESSION['email'] = $email;
        header("Location: /2025_CODE/index.php");
        exit();
    }else {
        die("password or email wrong");
    }

    $connect->close();
    
    

}


?>
