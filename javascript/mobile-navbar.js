const menuMobile = document.querySelector('.menu-mobile');
const navMenu = document.querySelector('.nav-menu');

menuMobile.addEventListener('click', () => {
 console.log("entrou")
 menuMobile.classList.toggle('active');
 navMenu.classList.toggle('active');
})

