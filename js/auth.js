const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
const registerForm = document.getElementById('registration-form');
const authenticateForm = document.getElementById('authentication-form');
const h3 = document.getElementsByTagName('h3')[0];
const registerErrorField = document.querySelector('.register-error');
const successField = document.querySelector('.register-success');
const userErrorField = document.querySelector('.login-exist-error');
const passwordErrorField = document.querySelector('.login-password-error');

registerBtn.addEventListener('click', () => {
    registerForm.style.display = 'flex';
    authenticateForm.style.display = 'none';
    h3.textContent = 'Formularz rejestracji';
});

loginBtn.addEventListener('click', () => {
    registerForm.style.display = 'none';
    authenticateForm.style.display = 'flex';
    h3.textContent = 'Formularz logowania';
});

function checkRegistrationFormStatus() {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('registration');

    if (status == 'failed') {
        registerForm.style.display = 'flex';
        authenticateForm.style.display = 'none';
        registerErrorField.style.display = 'block';
    } else if (status == 'success') {
        successField.style.display = 'block';
    }
}

function checkLoginFormStatus() {
    const urlParams = new URLSearchParams(window.location.search);
    const userStatus = urlParams.get('user_exist');
    const passwordStatus = urlParams.get('password_match');

    if (userStatus == 'false') {
        userErrorField.style.display = 'block';
    } else if (passwordStatus == 'false') {
        passwordErrorField.style.display = 'block';
    }
}

checkRegistrationFormStatus();
checkLoginFormStatus();