<?php 
$user_id = $_SESSION['user_id'];
$query ="
SELECT k.id, k.cover, k.judul
FROM library l
JOIN komik k ON l.komik_id = k.id
WHERE l.user_id = $user_id
";

$result = $connect->query($query);

while ($row = $result->fetch_assoc()) {
    
}

?>