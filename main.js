



// Navbar 
let navbar = document.querySelector('.navbar');

document.querySelector('#menu-icon').onclick = () => {
        navbar.classList.toggle('active');
   
}

// Remove Menu And Search Icon On Scroll
window.onscroll = () => {
        navbar.classList.remove('active');
     
}

// Header Animation
let header = document.querySelector('header');

window.addEventListener('scroll', () => {
        header.classList.toggle('active', window.scrollY > 0);
});