const inputIdUpdate = document.querySelector('input[name="id-update"]');
const inputIdDelete = document.querySelector('input[name="id-delete"]');
const inputEmailUpdate = document.querySelector('input[name="email-update"]');
const inputEmailDelete = document.querySelector('input[name="email-delete"]');
const closeBtnList = document.querySelectorAll('.close-modal');
const modalUpdate = document.getElementById('modal-update');
const modalDelete = document.getElementById('modal-delete');

function openModal(id, email, action) {
    if (action == 'update') {
        modalUpdate.style.display = 'flex';
        inputEmailUpdate.value = email;
        inputIdUpdate.value = id;
    } else if (action == 'delete') {
        modalDelete.style.display = 'flex';
        inputEmailDelete.value = email;
        inputIdDelete.value = id;
    }
    
    document.body.classList.add('modal-open');
}

closeBtnList.forEach(button => {
    button.addEventListener('click', () => {
        document.body.classList.remove('modal-open');
        modalUpdate.style.display = 'none';
        modalDelete.style.display = 'none';
    });
});