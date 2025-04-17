<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biji Komik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/webKomik/ranya-comic-web/HTML file/header/header.php";
include "mysql.php";
?>

<div class="comic-container" id="render"></div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="/webKomik/ranya-comic-web/main_page/Render.JS"></script>
</body>
</html>
