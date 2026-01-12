const username = document.getElementById('name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const dateStart = document.getElementById('date_start');
const dateEnd = document.getElementById('date_end');
const message = document.getElementById('message');
const sendBtn = document.getElementById('send');
const formError = document.querySelector('.form-error');

const formFields = [username, email, phone, dateStart, dateEnd, message];

sendBtn.addEventListener('click', e => {
    formFields.forEach(field => {
        if (field.value.trim() == '') {
            field.style.borderColor = "#B80F0A";
            e.preventDefault();
        } 
        formError.style.display = 'block';
    });

    if (dateStart.value > dateEnd.value) {
        alert('Data początkowa nie może być późniejsza od końcowej!');
        e.preventDefault();
    }

    let phoneRegex = new RegExp('^\\+48\\d{9}$');
    if (phone.value != '' && !phoneRegex.test(phone.value.trim())) {
        alert('Numer telefonu zawiera niepoprawny format!')
        phone.style.borderColor = "#B80F0A";
        formError.style.display = 'block';
        e.preventDefault();
    }
});

function checkIfAllFieldsAreFilled() {
    counter = 0;
    formFields.forEach(field => {
        if (field.value.trim() != '') {
            field.style.borderColor = "";
            counter++;
        }
    });

    if (counter == formFields.length) {
        formError.style.display = 'none';
    }
}

formFields.forEach(field => {
    field.addEventListener('input', () => checkIfAllFieldsAreFilled());
});