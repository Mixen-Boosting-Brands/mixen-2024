// Libraries
window.bootstrap = require('bootstrap/dist/js/bootstrap.bundle.js');

// Local Scripts
import '../src/smooth-scrolling';
import '../src/form-ajax';
import '../src/aos';
import '../src/swipers';
import '../src/remove-related-videos';
import 'jquery-parallax.js'
// import '../src/gsap';

// Header
document.addEventListener('DOMContentLoaded', function () {
    // Cache the DOM element containing the navbar
    var header = document.getElementById('navbar');

    function updateScroll() {
        var scroll = window.pageYOffset || document.documentElement.scrollTop;

        if (scroll >= 1) {
            header.classList.add('navbar-scroll');
        } else {
            header.classList.remove('navbar-scroll');
        }
    }

    window.addEventListener('scroll', updateScroll);
    updateScroll();
});

// Navigation menu
document.getElementById('mburger').addEventListener('click', function (e) {
    e.stopPropagation();
    var menu = document.querySelector('.menu');
    var navbar = document.getElementById('navbar');
    var backdrop = document.getElementById('backdrop');

    menu.classList.toggle('menu-abierto');
    navbar.classList.toggle('opacity-0');
    backdrop.classList.toggle('backdrop-opacity-1');
});

document.querySelector('.menu').addEventListener('click', function (e) {
    e.stopPropagation();
});

document.body.addEventListener('click', function (e) {
    var menu = document.querySelector('.menu');
    var navbar = document.getElementById('navbar');
    var backdrop = document.getElementById('backdrop');

    menu.classList.remove('menu-abierto');
    navbar.classList.remove('opacity-0');
    backdrop.classList.remove('backdrop-opacity-1');
});

document.getElementById("cerrar-menu").addEventListener("click", cerrarMenu, false);
document.getElementById("btn-logo").addEventListener("click", cerrarMenu, false);

for( let i = 1; i < 7; i++ ) { // Cambiar por número de botones de navegación que se vayan a necesitar (sumar +1 al número de elementos que se necesitan)
    document.getElementById(`btn-nav-${i}`).addEventListener("click", cerrarMenu, false);
}

document.getElementById("btn-contacto").addEventListener("click", cerrarMenu, false);

function cerrarMenu() {
    $('.menu').removeClass('menu-abierto');
    $('#navbar').removeClass('opacity-0');
    $('#backdrop').removeClass('backdrop-opacity-1');
}

// Cerrar menú con Esc
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        cerrarMenu();
    }
});

// Activar tooltips
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

// Quitar clases agregadas por SwiperJS
document.addEventListener("DOMContentLoaded", function() {
    const nextButton = document.querySelector('.swiper-button-next');
    if (nextButton) {
        nextButton.classList.remove('swiper-button-disabled', 'swiper-button-lock');
    }
});
