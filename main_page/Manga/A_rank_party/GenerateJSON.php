<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$folder = __DIR__ . '/A_rank_party';

$chapters = array_filter(glob($folder . '/*'), 'is_dir');
$datakomik = [];

foreach ($chapters as $chapter) {
    $chapterName = basename($chapter);
    $files = glob($chapter . '/*.jpg');

    natsort($files);

    $datakomik[$chapterName] = array_values($files);
};

$hasil = file_put_contents('komikimg.json', json_encode($datakomik, JSON_PRETTY_PRINT));

$folder = realpath(__DIR__ . '/A_rank_party');

if ($folder === false) {
    echo "Path tidak ditemukan!";
} else {
    echo "Path ditemukan: $folder";
}
?>