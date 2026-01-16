<?php

session_start();
if (!$_SESSION['signed_in'] == true) {
    header('Location: ../index.php');
}

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
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/958b0131c3.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <form action="../backend_logic/logout.php" method="POST">
            <button type="submit">Wyloguj</button>
        </form>
    </main>
    <footer>
       2026 Damian Arcipowski | All rights reserved &copy;
    </footer>
</body>
</html>