const hamburger = document.querySelector('.hamburger-menu');
const navbar = document.querySelector('.navbar-mobile-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navbar.classList.toggle('active');
});
