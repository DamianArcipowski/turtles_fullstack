<?php

require_once '../config/database.php';

$result = $conn->query('SELECT * FROM users');

while ($row = $result->fetch_assoc()) {
    $status = $row['is_active'] ? 'Tak' : 'Nie';
    echo <<<HTML
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['email']}</td>
            <td>{$row['role']}</td>
            <td>{$status}</td>
            <td>
                <a onclick="openModal({$row['id']})">Edytuj</a> |
                <a onclick="openModal({$row['id']})">Usuń</a>
            </td>
        </tr>
    HTML;
}

$conn->close();

?>