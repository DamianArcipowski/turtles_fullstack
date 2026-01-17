const hamburgerIcon = document.querySelector('.hamburger');
const links = document.getElementById("mobile-links");

function toggleHamburgerMenu() {
  if (links.style.display == "block") {
    links.style.display = "none";
  } else {
    links.style.display = "block";
  }
}

hamburgerIcon.addEventListener('click', () => toggleHamburgerMenu());