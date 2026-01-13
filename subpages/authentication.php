<script src="js/auth.js" defer></script>
<div class="authentication-window">
    <h3>Formularz logowania</h3>
    <form id="authentication-form" action="subpages/login.php" method="POST">
        <label for="login-email">Adres e-mail:</label>
        <input type="email" name="login-email" placeholder="Twój adres e-mail..." required>
        <label for="login-password">Hasło:</label>
        <input type="password" name="login-password" placeholder="Twoje hasło..." required>
        <p class="form-error">Uzupełnij wszystkie wymagane pola!</p>
        <button type="submit">Zaloguj</button>
        <hr>
        <p>Nie masz konta?</p>
        <button type="button" id="register">Zarejestruj się</button>
        <p class="register-success">Konto utworzone pomyślnie! Użyj powyższego formularza aby się zalogować.</p>
    </form>
    <form id="registration-form" action="subpages/register.php" method="POST">
        <label for="register-email">Adres e-mail:</label>
        <input type="email" name="register-email" placeholder="Adres e-mail..." required>
        <label for="register-password">Hasło:</label>
        <input type="password" name="register-password" minlength="8" placeholder="Minimum 8 znaków..." required>
        <p class="form-error">Uzupełnij wszystkie wymagane pola!</p>
        <button type="submit">Zarejestruj</button>
        <hr>
        <p>Aktywny użytkownik?</p>
        <button type="button" id="login">Zaloguj się</button>
        <p class="register-error">Użytkownik o podanym adresie e-mail już istnieje w bazie danych!</p>
    </form>
</div>