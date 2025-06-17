const hamburger = document.querySelector('.hamburger-menu');
const navbar = document.querySelector('.navbar-mobile-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navbar.classList.toggle('active');
});

const $ = id => document.querySelector(`#${id}`);

const elements = {
    translate: $('#translate'),
    hero_h1: $('#hero-h1'),
    hero_h2: $('#hero-h2'),
    about_me_h1: $('#about-me-h1'),
    about_me_p: $('#about-me-p'),
    about_me_link: $('#about-me-link'),
    works_h1: $('#works-h1'),
    works_p: $('#works-p'),
    skills_h2: $('#skills-h2'),
    figma_p: $('#figma-p'),
    mcita_p: $('#mcita-p'),
    cria_h1: $('#cria-h1'),
    cria_p: $('#cria-p'),
    intelli_h1: $('#intelli-h1'),
    intelli_p: $('#intelli-p'),
    portfolio_h1: $('#portfolio-h1'),
    portfolio_p: $('#portfolio-p'),
    visit_link: $('#visit-link'),
    talk_h1: $('#talk-h1'),
    talk_p: $('#talk-p'),
    nav_about: $('#nav-about'),
    nav_works: $('#nav-works'),
    nav_contact: $('#nav-contact')
};

function translate() {
    elements.hero_h1.innerHTML = 'Ciao, sono Armando.'
}

elements.translate.addEventListener('click', () => {
    alert('FATTO!');
});