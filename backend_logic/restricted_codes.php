<?php

require_once '../config/database.php';

$result = $conn->query('SELECT * FROM discount_codes');

while ($row = $result->fetch_assoc()) {
    echo <<<HTML
        <ul class="restricted-list">
            <li>{$row['code']}</li>
        </ul>
    HTML;
}

?>