const successField = document.querySelector('.crud-success');
const errorField = document.querySelector('.crud-error');
const navEntries = performance.getEntriesByType("navigation");

function displayMessage() {
    const urlParams = new URLSearchParams(window.location.search);
    const statusAction = urlParams.get('action');
    const statusError = urlParams.get('error');

    if (statusAction) {
        successField.style.display = 'block';

        switch (statusAction) {
            case 'create':
                successField.textContent = 'Użytkownik dodany pomyślnie!';
            break;
            case 'update':
                successField.textContent = 'Użytkownik zaktualizowany pomyślnie!';
            break;
            case 'delete':
                successField.textContent = 'Użytkownik usunięty pomyślnie!';
            break;
        }
    }

    if (statusError) {
        errorField.style.display = 'block';

        switch (statusError) {
            case 'create':
                errorField.textContent = 'Wystąpił błąd podczas dodawania użytkownika! Użytkownik istnieje w bazie danych!';
            break;
            case 'update':
                errorField.textContent = 'Wystąpił błąd podczas aktualizacji użytkownika! Podany email istnieje w bazie danych!';
            break;
            case 'delete':
                errorField.textContent = 'Wystąpił błąd podczas usuwania użytkownika!';
            break;
        }
    }
}

displayMessage();

if (navEntries[0].type == "reload") {
    successField.style.display = 'none';
    errorField.style.display = 'none';
};