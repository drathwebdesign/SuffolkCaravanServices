//Hamburger and Menu

const hamMenu = document.querySelector('.hamburger-menu');
const offScreenMenu = document.querySelector('.mobile-nav');
const overlay = document.querySelector('.overlay');
const wrapper = document.querySelector('.wrapper');

hamMenu.addEventListener('click', toggleMenu);
overlay.addEventListener('click', toggleMenu);

function toggleMenu() {
    hamMenu.classList.toggle('active');
    offScreenMenu.classList.toggle('active');
    overlay.classList.toggle('active');
    wrapper.classList.toggle('active');

    // Prevent body scrolling when the overlay is active
    document.body.style.overflow = overlay.classList.contains('active') ? 'hidden' : 'auto';
}
