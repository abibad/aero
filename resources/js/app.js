import './bootstrap';
import Aos from 'aos'; 
import 'aos/dist/aos.css';

Aos.init({
    duration: 1000,
    delay: 200,
    once: true,
}); 

import Typed from 'typed.js'; 

document.addEventListener('DOMContentLoaded', () => {
    const typedTitle = new Typed("#typed-title", {
        stringsElement: "#typed-strings",  // Usa los textos dentro de #typed-strings
        typeSpeed: 80,  // Reducir velocidad de escritura
        backSpeed: 50,  // Reducir velocidad de retroceso
        startDelay: 500, // Retraso antes de iniciar
        backDelay: 2500, // Tiempo antes de borrar el texto
        showCursor: false, 
        loop: true,
    });
});

// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const typedTitle = new Typed("#typed-title1", {
        strings: [
            "Descubre el Futuro Aeroespacial",
            "Noticias y Avances del Espacio",
            "Innovación en el Cosmos"
        ], 
        typeSpeed: 80,  // Velocidad más natural
        backSpeed: 50,  // Retroceso más suave
        startDelay: 500, // Pequeño retraso antes de empezar
        backDelay: 2500, // Espera más tiempo antes de borrar
        showCursor: true, 
        cursorChar: "_", // Cambia el cursor a un estilo más digital
        loop: true,
    });
});


