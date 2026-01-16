<?php

require_once '../config/database.php';

$orgData = [];

if (isset($_POST['org-data'])) {
    $result = $conn->query('SELECT * FROM organisation');

    while ($row = $result->fetch_assoc()) {
        $orgData[] = $row['info'];
    }

}

?>