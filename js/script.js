// Controle Scroll
function controleScroll() {
    let nav = document.querySelector('nav');
    if (document.documentElement.scrollTop > 64) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
}

// Döküman hazır olduktan sonra yapılacak işlemler
document.addEventListener('DOMContentLoaded', function (e) {
    controleScroll();
});

// Scroll olunca navigasyona gölge ekleme
document.addEventListener('scroll', function () {
    controleScroll();
});


let sideButton = document.querySelector('.side-button');
let closeButton = document.querySelector('.close-button');
let overlay = document.querySelector('.overlay');
let sideNav = document.querySelector('.side-nav');

// Open Menu
let menuOpen;
function openMenu() {
    menuOpen = true;
    overlay.classList.add('active');
    sideNav.classList.add('active');
    document.body.classList.add('side-bar-open');
}


// Close Menu
function closeMenu() {
    menuOpen = false;
    overlay.classList.remove('active');
    sideNav.classList.remove('active');
    document.body.classList.remove('side-bar-open');
}

sideButton.addEventListener('click', function () {
    if (!menuOpen) {
        openMenu();
    }
});
closeButton.addEventListener('click', function () {
    if (menuOpen) {
        closeMenu();
    }
});
overlay.addEventListener('click', function () {
    if (menuOpen) {
        closeMenu();
    }
});