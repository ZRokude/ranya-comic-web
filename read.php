<?php
include $_SERVER['DOCUMENT_ROOT'] . "/webKomik/ranya-comic-web/mysql.php";

$id = $_GET["id"];
$sql = "SELECT * FROM komik WHERE id = $id";
$result = $connect->query($sql);
$komik = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="read.css">
    <title><?php 
    echo $komik['judul'];?></title>
</head>
<body>
    <div class="container">
        <h1><?php 
    $komik['judul'];
    ?></h1>
    <img src="webKomik/main_page/Manga/cover/Cover.jpg" alt="<?php $komik['judul']?>">
    <p class="sinopsis"><?php echo $komik['sinopsis'];?></p>
    <p class="genre"><?php echo implode(",", $genrelist)?></p>
</div>
</body>
</html>