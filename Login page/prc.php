<?php 
session_start();
include "Login.php";
include $_SERVER['DOCUMENT_ROOT'] . "/webKomik/ranya-comic-web/mysql.php";
  

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

    $stmt = $connect->prepare("SELECT password FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($dbpassword);
    $stmt->fetch();
    $stmt->close();

    if($dbpassword && password_verify($password, $dbpassword)){
        $_SESSION['email'] = $email;
        header("Location: /webKomik/ranya-web-comic/Index.php");
        exit();
    }else {
        die("password or email wrong");
    }

    $connect->close();
    
    

}


?>
