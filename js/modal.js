const inputId = document.querySelector('input[name="id"]');
const closeBtn = document.querySelector('.close-modal');
const modal = document.querySelector('.modal-wrapper');

function openModal(id) {
    inputId.value = id;

    document.body.classList.add('modal-open');
    modal.style.display = 'flex';
}

closeBtn.addEventListener('click', () => {
    document.body.classList.remove('modal-open');
    modal.style.display = 'none';
});