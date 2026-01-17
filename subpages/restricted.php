<?php

session_start();
if (!isset($_SESSION['signed_in']) || $_SESSION['signed_in'] != true) {
    header('Location: ../index.php');
    exit();
}

require_once('../backend_logic/organisation_info.php');

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projekt 1">
    <meta name="keywords" content="HTML5, CSS3, JavaScript, PHP">
    <meta name="author" content="Damian Arcipowski">
    <title>Hodowla żółwia błotnego</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/958b0131c3.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <form action="../backend_logic/logout.php" method="POST">
            <button type="submit" id="user-logout">Wyloguj</button>
        </form>
        <h1>Witaj w strefie użytkownika!</h1>
        <hr class="gradient-hr">
        <h2>Lista dostępnych kodów rabatowych:</h2>
        <?php
        require_once('../backend_logic/restricted_codes.php');
        ?>
        <hr class="gradient-hr">
        <h2>Nasza organizacja:</h2>
        <form method="POST">
            <button type="submit" name="org-data" id="organisation">Pobierz informacje o organizacji</button>
        </form>
        <?php if (!empty($orgData)): ?>
            <ul class="restricted-list">
                <?php foreach ($orgData as $info): ?>
                    <li><?= $info ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php
        $conn->close();
        ?>
    </main>
    <footer>
       2026 Damian Arcipowski | All rights reserved &copy;
    </footer>
</body>
</html>