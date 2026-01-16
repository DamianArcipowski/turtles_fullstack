<?php

require_once '../config/database.php';

if (isset($_POST['create'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $active = $_POST['active'];

    try {
        $stmt = $conn->prepare('INSERT INTO users (email, password, role, is_active) VALUES (?, ?, ?, ?)');
        $stmt->bind_param('sssi', $email, $password, $role, $active);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    } catch (mysqli_sql_exception $e) {
        header('Location: ../subpages/panel.php?error=create');
        exit();
    }

    header('Location: ../subpages/panel.php?action=create');
    exit();
}

if (isset($_POST['update'])) {
    $id = intval($_POST['id-update']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $active = $_POST['active'];

    try {
        $stmt = $conn->prepare('UPDATE users SET password = ?, role = ?, is_active = ? WHERE id = ?');
        $stmt->bind_param('ssii', $password, $role, $is_active, $id);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    } catch (mysqli_sql_exception $e) {
        header('Location: ../subpages/panel.php?error=update');
        exit();
    }

    header('Location: ../subpages/panel.php?action=update');
    exit(); 
}

if (isset($_POST['delete'])) {
    $id = intval($_POST['id-delete']);

    try {
        error_log($id);
        $stmt = $conn->prepare('DELETE FROM users WHERE id = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    } catch (mysqli_sql_exception $e) {
        header('Location: ../subpages/panel.php?error=delete');
        exit();
    }

    header('Location: ../subpages/panel.php?action=delete');
    exit(); 
}

?>