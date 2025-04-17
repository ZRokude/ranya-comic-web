<?php
$connect = new mysqli("localhost", "root", "", "komik");

if ($connect->connect_error) {
    die("connection fail: " .$conenct->connect_error);
}
?>