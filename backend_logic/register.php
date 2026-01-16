<?php

$email = $_POST['register-email'];
$password = password_hash($_POST['register-password'], PASSWORD_DEFAULT);

require_once '../config/database.php';

$stmt = $conn->prepare('SELECT is_active FROM users WHERE email = ?');
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header('Location: ../index.php?page=login&registration=failed');
} else {
    $stmt = $conn->prepare('INSERT INTO users (email, password) VALUES (?, ?)');
    $stmt->bind_param('ss', $email, $password);
    if ($stmt->execute()) {
        header('Location: ../index.php?page=login&registration=success');
    } else {
        echo 'Wystąpił błąd: ' . $conn->error;
    }
}

$conn->close();

?>