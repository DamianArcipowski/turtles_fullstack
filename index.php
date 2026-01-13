<?php
    $lifetime = time() + 30 * 24 * 60 * 60;
    setcookie('visit', date('Y-m-d H:i:s'), $lifetime);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projekt 1">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
    <meta name="author" content="Damian Arcipowski">
    <title>Hodowla żółwia błotnego</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/hamburger.js" defer></script>
    <script src="https://kit.fontawesome.com/958b0131c3.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <a href="?page=welcome"><img src="images/logo.png" alt="logo"></a>
        <a href="?page=welcome">Strona główna</a>
        <a href="?page=species">O gatunku</a>
        <a href="?page=distribution">Występowanie</a>
        <a href="?page=gallery">Galeria</a>
        <a href="?page=contact">Kontakt</a>
        <a href="?page=login">Logowanie</a>
    </nav>
    <div class="mobile-nav">
        <div class="active-page"></div>
        <div id="mobile-links">
            <a href="?page=welcome">Strona główna</a>
            <a href="?page=species">O gatunku</a>
            <a href="?page=distribution">Występowanie</a>
            <a href="?page=gallery">Galeria</a>
            <a href="?page=contact">Kontakt</a>
            <a href="?page=login">Logowanie</a>
        </div>
        <a class="hamburger"><i class="fa fa-bars"></i></a>
    </div>
    <main>
        <?php
            $subpages = [
                'welcome' => 'subpages/welcome.php',
                'species' => 'subpages/species.php',
                'distribution' => 'subpages/distribution.php',
                'gallery' => 'subpages/gallery.php',
                'contact' => 'subpages/contact.php',
                'login' => 'subpages/login.php'
            ];

            $page = $_GET['page'] ?? 'welcome';
            $file = $subpages[$page] ?? null;

            $file && file_exists($file) ? include($file) : http_response_code(404);
        ?>
    </main>
    <footer>
       2025 Damian Arcipowski | All rights reserved &copy;
    </footer>
</body>
</html>