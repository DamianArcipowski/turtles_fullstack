<?php

$email = $_POST['login-email'];
$password = $_POST['login-password'];

require_once '../config/database.php';

$sql = 'SELECT password, is_active, role FROM users WHERE email = ?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows == 0) {
    header('Location: ../index.php?page=login&user_exist=false');
    $conn->close();
    exit();
}

$row = $result->fetch_assoc();
if (password_verify($password, $row['password']) && $row['is_active'] == 1) {
    session_start();
    $_SESSION['signed_in'] = true;

    if ($row['role'] == 'admin') {
        $_SESSION['admin'] = true;
        header('Location: ../subpages/panel.php');
        exit();
    }
    
    header('Location: ../subpages/restricted.php');
} else {
    header('Location: ../index.php?page=login&password_match=false');
}

$conn->close();

?>