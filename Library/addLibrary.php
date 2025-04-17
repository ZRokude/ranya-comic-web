<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/webKomik/ranya-comic-web/mysql.php";

if(isset($_SESSION['user_id'])) {
    echo "login required";
    exit();
}

$user_id = $_SESSION['user_id'];
$komik_id = $_POST['komik_id'];

$check = $connect->query("SELECT * FROM library WHERE user id = $user_id AND komik_id = $komik_id");
if ($check->num_rows == 0) {
    $connect->query("INSERT INTO library (user_id, komik_id,) VALUES ($user_id, $komik_id)");
    echo "Added to Library";
} else {
    echo "Already in Library";
}
?>