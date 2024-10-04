const button = document.getElementById('mobile-menu-button');
const menu = document.getElementById('mobile-menu');
const navbar = document.getElementById('navbar');

button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});

window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        navbar.classList.add('fixed', 'top-0', 'left-0', 'w-full', 'z-50', 'bg-white', 'shadow-md');
    } else {
        navbar.classList.remove('fixed', 'top-0', 'left-0', 'w-full', 'z-50', 'bg-white', 'shadow-md');
    }
});