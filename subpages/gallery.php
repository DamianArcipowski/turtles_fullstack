<script src="js/gallery.js" defer></script>

<section class="gallery-intro">
    <h1>Witaj w naszej galerii żółwi!</h1>
    <p>Odkryj nasze niesamowite żółwie! Kliknij na dowolny obrazek poniżej by otworzyć pełną galerię zdjęć.</p>
</section>
<div class="gallery">
    <img class="gallery-item" src="images/gallery1.webp" alt="gallery1">
    <img class="gallery-item" src="images/gallery2.webp" alt="gallery2">
    <img class="gallery-item" src="images/gallery3.webp" alt="gallery3">
</div>
<div class="gallery-viewer-wrapper">
    <div class="mobile-gallery">
        <button id="next-image-mobile"><i class="fa-solid fa-arrow-left-long"></i> Poprzednie </button>
        <button id="previous-image-mobile">Następne <i class="fa-solid fa-arrow-right-long"></i></button>
        <button id="close-image-mobile">Zamknij <i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="gallery-close"><i class="fa-solid fa-xmark"></i></div>
    <div class="gallery-previous"><i class="fa-solid fa-arrow-left-long"></i></div>
    <div class="gallery-viewer">
        <img class="hidden-image" src="images/gallery1.webp" alt="gallery1">
        <img class="hidden-image" src="images/gallery2.webp" alt="gallery2">
        <img class="hidden-image" src="images/gallery3.webp" alt="gallery3">
        <img class="hidden-image" src="images/gallery4.webp" alt="gallery4">
        <img class="hidden-image" src="images/gallery5.webp" alt="gallery5">
        <img class="hidden-image" src="images/gallery6.webp" alt="gallery6">
        <img class="hidden-image" src="images/gallery7.webp" alt="gallery7">
    </div>
    <div class="gallery-next"><i class="fa-solid fa-arrow-right-long"></i></div>
</div>