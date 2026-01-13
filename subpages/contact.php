<script src="js/form.js" defer></script>

<section class="contact-section">
    <h2>Skontaktuj się z nami</h2>
    <form action="mailto:174970@student.uwm.edu.pl" method="post" enctype="text/plain">
        <label for="name">Imię i nazwisko:</label>
        <input type="text" id="name" name="name" placeholder="Wpisz swoje imię...">
        <label for="email">Adres e-mail:</label>
        <input type="email" id="email" name="email" placeholder="Twój adres e-mail...">
        <label for="phone">Telefon:</label>
        <input type="text" id="phone" name="phone" placeholder="Numer telefonu w formacie +48xxxxxxxxx...">
        <label>Płeć:</label>
        <label>
            <input type="radio" name="sex" value="k" required> Kobieta
        </label>
        <label>
            <input type="radio" name="sex" value="m" required> Mężczyzna
        </label>
        <label for="contact">Preferowane źródło kontaktu:</label>
        <select id="contact">
            <option value="email">E-mail</option>
            <option value="phone">Telefon</option>
        </select>
        <label>Dni preferowanego kontaktu:</label>
        <label for="date_start">
            Data od: <input type="date" id="date_start">
        </label>
        <label for="date_end">
            Data do: <input type="date" id="date_end">
        </label>
        <label for="newsletter">
            Chcę zapisać się do newslettera <input type="checkbox" id="newsletter" value="newsletter">
        </label>
        <label for="message">Wiadomość:</label>
        <textarea id="message" rows="5" placeholder="Napisz wiadomość..."></textarea>
        <p class="form-error">Uzupełnij wszystkie wymagane pola!</p>
        <button type="submit" id="send">Wyślij wiadomość</button>
        <button type="reset">Wyczyść</button>
    </form>
</section>