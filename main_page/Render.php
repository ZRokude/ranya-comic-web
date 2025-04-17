<?php
include $_SERVER['DOCUMENT_ROOT'] . "/webKomik/ranya-comic-web/mysql.php";

$sql = "SELECT id, judul, cover FROM komik";
$result = $connect->query($sql);


if(!$result) {
    http_response_code(500);
    echo json_encode(["error" => "database query failed"]);
    exit;
}
$komik = [];
while ($row = $result->fetch_assoc()) {
    $komik[] = $row;
}

header('Content-Type: application/json');
echo json_encode($komik);

?>
