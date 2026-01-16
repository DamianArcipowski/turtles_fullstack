<?php

require_once '../config/database.php';

$result = $conn->query('SELECT * FROM employees');

while ($row = $result->fetch_assoc()) {
    echo <<<HTML
        <tr>
            <td>{$row['name']}</td>
            <td>{$row['surname']}</td>
            <td>{$row['sex']}</td>
            <td>{$row['birth_date']}</td>
            <td>{$row['country']}</td>
            <td>{$row['city']}</td>
            <td>{$row['street']}</td>
            <td>{$row['home_num']}</td>
            <td>{$row['flat_num']}</td>
        </tr>
    HTML;
}

$conn->close();

?>