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
        <form action="../backend_logic/users_crud.php" method="POST" class="create-form">
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
        <div class="table-wrapper">
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
        </div>
        <hr class="gradient-hr">
        <h2>Dodaj pracownika</h2>
        <form action="../backend_logic/employee_create.php" method="POST" class="create-form">
            <label for="name">Imię:</label>
            <input type="text" name="name" required>
            <label for="surname">Nazwisko:</label>
            <input type="text" name="surname" required>
            <label for="sex">Płeć:</label>
            <select name="sex">
                <option value="K">Kobieta</option>
                <option value="M">Mężczyzna</option>
            </select>
            <label for="birth_date">Data urodzenia:</label>
            <input type="date" name="birth_date" required>
            <label for="country">Kraj:</label>
            <input type="text" name="country" required>
            <label for="city">Miasto:</label>
            <input type="text" name="city" required>
            <label for="street">Ulica:</label>
            <input type="text" name="street" required>
            <label for="home_num">Numer domu:</label>
            <input type="text" name="home_num" required>
            <label for="flat_num">Numer mieszkania:</label>
            <input type="text" name="flat_num">
            <button type="submit" name="create-employee">Dodaj pracownika</button>
            <button type="reset">Wyczyść</button>
        </form>
        <hr class="gradient-hr">
        <h2>Lista pracowników</h2>
        <div class="table-wrapper">
            <table id="employees-table">
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Płeć</th>
                    <th>Data urodzenia</th>
                    <th>Kraj</th>
                    <th>Miasto</th>
                    <th>Ulica</th>
                    <th>Numer domu</th>
                    <th>Numer mieszkania</th>
                </tr>
                <?php
                require_once('../backend_logic/employees_list.php');
                ?>
            </table>
        </div>
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