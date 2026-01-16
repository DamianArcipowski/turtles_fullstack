<?php

session_start();
if (!($_SESSION['signed_in'] == true && $_SESSION['admin'] == true)) {
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
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/958b0131c3.js" crossorigin="anonymous"></script>
    <script src="../js/crud.js" defer></script>
    <script src="../js/modal.js" defer></script>
</head>
<body>
    <main>
        <form action="../backend_logic/logout.php" method="POST">
            <button id="admin-logout" type="submit">Wyloguj</button>
        </form>
        <h1 id="h1-admin">Panel administracyjny</h1>
        <p class="crud-success"></p>
        <p class="crud-error"></p>
        <h2>Dodaj użytkownika</h2>
        <form action="../backend_logic/users_crud.php" method="POST" class="create-user">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="password">Hasło:</label>
            <input type="password" name="password" minlength="8" required>
            <label for="role">Rola:</label>
            <select name="role">
                <option value="user">Użytkownik</option>
                <option value="admin">Administrator</option>
            </select>
            <label for="active">Aktywny</label>
            <select name="active">
                <option value="1">Tak</option>
                <option value="0">Nie</option>
            </select>
            <button type="submit" name="create">Dodaj użytkownika</button>
        </form>
        <hr class="gradient-hr">
        <h2>Lista użytkowników</h2>
        <table id="users-table">
            <tr>
                <th>Id</th>
                <th>E-mail</th>
                <th>Rola</th>
                <th>Aktywny</th>
                <th>Operacje</th>
            </tr>
            <?php
            require_once('../backend_logic/users_list.php');
            ?>
        </table>
    </main>
    <div id="modal-update" class="modal-wrapper">
        <div class="modal">
            <form action="../backend_logic/users_crud.php" method="POST" class="update-user">
                <input type="hidden" name="id-update">
                <label for="email">Email:</label>
                <input type="email" name="email-update" disabled>
                <label for="password">Hasło:</label>
                <input type="password" name="password" minlength="8" required>
                <label for="role">Rola:</label>
                <select name="role">
                    <option value="user">Użytkownik</option>
                    <option value="admin">Administrator</option>
                </select>
                <label for="active">Aktywny</label>
                <select name="active">
                    <option value="1">Tak</option>
                    <option value="0">Nie</option>
                </select>
                <button type="submit" name="update">Aktualizuj użytkownika</button>
                <button type="button" class="close-modal">Zamknij</button>
            </form>
        </div>
    </div>
    <div id="modal-delete" class="modal-wrapper">
        <div class="modal">
            <form action="../backend_logic/users_crud.php" method="POST" class="delete-user">
                <input type="hidden" name="id-delete">
                <label for="email">Email:</label>
                <input type="email" name="email-delete" disabled>
                <button type="submit" name="delete">Usuń użytkownika</button>
                <button type="button" class="close-modal">Zamknij</button>
            </form>
        </div>
    </div>
    <footer>
       2026 Damian Arcipowski | All rights reserved &copy;
    </footer>
</body>
</html>