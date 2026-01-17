const galleryWrapper = document.querySelector('.gallery-viewer-wrapper');
const photos = document.querySelectorAll('.gallery-item');
const closeBtn = document.querySelector('.gallery-close');
const nextBtn = document.querySelector('.gallery-next');
const previousBtn = document.querySelector('.gallery-previous');
const galleryViewer = document.querySelector('.gallery-viewer');
const allHiddenPhotos = document.querySelectorAll('.hidden-image');
const nextBtnMobile = document.getElementById('next-image-mobile');
const previousBtnMobile = document.getElementById('previous-image-mobile');
const closeBtnMobile = document.getElementById('close-image-mobile');

photos.forEach(photo => {
    photo.addEventListener('click', () => {
        galleryWrapper.style.display = 'flex';
        document.body.classList.add('no-body-scroll');
        initGallery(photo);
    });
});

[closeBtn, closeBtnMobile].forEach(element => {
    element.addEventListener('click', () => {
        galleryWrapper.style.display = 'none';
        document.body.classList.remove('no-body-scroll');
        hideAllPhotosOnGalleryExit(allHiddenPhotos);
    });
});

function initGallery(clickedPhoto) {
    const clickedPhotoNumber = getImageNumber(clickedPhoto);
    const currentPhoto = allHiddenPhotos[clickedPhotoNumber - 1];
    currentPhoto.classList = 'visible-image';
}

function getImageNumber(element) {
    const nameStart = element.src.lastIndexOf('/') + 1;
    const fullName = element.src.substr(nameStart);
    return fullName.match(/\d+/)[0];
}

function hideAllPhotosOnGalleryExit(photos) {
    photos.forEach(photo => {
        photo.className = 'hidden-image';
    });
}

function switchImage(offset) {
    const currentImage = document.querySelector('.visible-image');
    const currentImageIndex = getImageNumber(currentImage) - 1;
    let newImageIndex = currentImageIndex + offset;
    if (newImageIndex >= allHiddenPhotos.length) {
        newImageIndex = 0;
    } else if (newImageIndex < 0) {
        newImageIndex = allHiddenPhotos.length - 1;
    }

    const animation = allHiddenPhotos[currentImageIndex].animate([{ opacity: 1 }, { opacity: 0.4 }], { duration: 600 });
    animation.finished.then(() => {
        allHiddenPhotos[currentImageIndex].classList = 'hidden-image';
        allHiddenPhotos[newImageIndex].classList = 'visible-image';
    });
}

[nextBtn, nextBtnMobile].forEach(element => {
    element.addEventListener('click', () => switchImage(1));
});

[previousBtn, previousBtnMobile].forEach(element => {
    element.addEventListener('click', () => switchImage(-1));
});