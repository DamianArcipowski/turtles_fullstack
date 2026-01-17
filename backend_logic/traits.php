<?php

require_once './config/database.php';

$sql = 'SELECT trait, description FROM traits';
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$assoc_array = $result->fetch_all(MYSQLI_ASSOC);

foreach ($assoc_array as $item) {
    echo '<tr>';
    echo '<td>' . $item['trait'] . '</td>';
    echo '<td>' . $item['description'] . '</td>';
    echo '</tr>';
}

?>